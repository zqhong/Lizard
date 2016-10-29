<?php

namespace Lizard\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Input;
use Lizard\Commands\Reply\AddReplyCommand;
use Redirect;
use Illuminate\Validation\ValidationException;

class ReplyController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function store(Request $request)
    {
        $reply_data = Input::get('reply');
        $thread_id = isset($reply_data['thread_id']) ? $reply_data['thread_id'] : null;
        $body = isset($reply_data['body']) ? $reply_data['body'] : null;

        try {
            $reply = dispatch(new AddReplyCommand(
                $thread_id,
                Auth::user()->id,
                $body,
                $body,
                $request->header('User-Agent')
            ));
        } catch (ValidationException $e) {
            return Redirect::back()
                ->withInput(Input::all())
                ->withErrors($e->getMessageBag());
        }

        return Redirect::back()
            ->withSuccess(trans('forum.add_reply_success'));
    }
}
