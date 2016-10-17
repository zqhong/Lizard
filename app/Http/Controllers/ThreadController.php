<?php
/*
 * This file is part of Lizard.
 *
 * @author zqhong <i@zqhong.com>
 * @date 2016/9/12 22:30
 * @namespace Http\Controllers
 * @filename ThreadController.php
 * @encoding UTF-8
 */

namespace Lizard\Http\Controllers;

use Auth;
use Input;
use Lizard\Commands\Thread\AddThreadCommand;
use Lizard\Events\BeforeShowThread;
use Lizard\Models\Node;
use Lizard\Models\Section;
use Lizard\Models\Thread;
use Lizard\Repositories\ThreadsRepository;
use Redirect;

class ThreadController extends Controller
{
    /**
     * @var ThreadsRepository
     */
    private $thread;

    /**
     * ThreadController constructor.
     *
     * @param ThreadsRepository $thread
     */
    public function __construct(ThreadsRepository $thread)
    {
        $this->thread = $thread;
        $this->middleware(['auth'])->except(['show']);
    }

    /**
     * Show a form of create thread.
     *
     * @return mixed
     */
    public function create()
    {
        $sections = Section::all();
        $nodes = Node::all();

        return view('threads.create', compact('sections', 'nodes'));
    }

    /**
     * Store a thread.
     *
     * @return $this
     */
    public function store()
    {
        $thread_data = Input::get('thread');
        $node_id = isset($thread_data['node_id']) ? $thread_data['node_id'] : null;
        $tags = isset($thread_data['tags']) ? $thread_data['tags'] : '';

        try {
            $thread = dispatch(new AddThreadCommand(
                $thread_data['title'],
                $thread_data['body'],
                Auth::user()->id,
                $node_id,
                $tags
            ));
        } catch (\Exception $e) {
            return Redirect::route('thread.create')
                ->withInput(Input::all())
                ->withErrors($e->getMessageBag());
        }

        return Redirect::route('thread.show', [$thread->id])
            ->withSuccess(trans('forum.add_thread_success'));
    }

    /**
     * Show a thread.
     *
     * @param $thread_id
     * @return mixed
     */
    public function show($thread_id)
    {
        $thread = Thread::where('id', $thread_id)->with('user', 'node', 'tags', 'section', 'replies')->firstOrFail();
        // add thread view count
        $thread->view_count += 1;
        $thread->save();

        $lastReply = end($thread->replies);

        return view('threads.show')
            ->withThread($thread)
            ->withLastReply($lastReply);
    }
}
