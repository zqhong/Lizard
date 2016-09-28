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

use AltThree\Validator\ValidationException;
use Auth;
use Input;
use Lizard\Commands\Thread\AddThreadCommand;
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
        } catch (ValidationException $e) {
            return Redirect::route('thread.create')
                ->withInput(Input::all())
                ->withErrors($e->getMessageBag());
        }

        return Redirect::route('thread.show', [$thread->id])
            ->withSuccess('Add thread success');
    }

    /**
     * Show a thread.
     *
     * @param $thread_id
     * @return mixed
     */
    public function show($thread_id)
    {
        $thread = Thread::where('id', $thread_id)->with('user', 'node', 'tags', 'section')->firstOrFail();

        return view('threads.show')
            ->withThread($thread);
    }
}
