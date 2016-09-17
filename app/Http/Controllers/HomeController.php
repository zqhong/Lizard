<?php
/*
 * This file is part of Lizard.
 *
 * @author zqhong <i@zqhong.com>
 * @date 2016/9/9 8:08
 * @namespace Http\Controllers
 * @filename HomeController.php
 * @encoding UTF-8
 */

namespace Lizard\Http\Controllers;

use Input;
use Lizard\Http\Requests;
use Lizard\Models\Thread;
use Lizard\Models\User;
use Lizard\Repositories\Criteria\Thread\Filter;
use Lizard\Repositories\ThreadsRepository;

class HomeController extends Controller
{
    /**
     * @var ThreadsRepository
     */
    private $thread;

    /**
     * HomeController constructor.
     *
     * @param ThreadsRepository $thread
     */
    public function __construct(ThreadsRepository $thread)
    {
        $this->thread = $thread;
    }


    /**
     * @return mixed
     */
    public function index()
    {
        $this->thread->pushCriteria(new Filter(Input::query('filter')));
        $threads = $this->thread->fetchThreads();
        return view('threads.index', compact('threads'));
    }
}
