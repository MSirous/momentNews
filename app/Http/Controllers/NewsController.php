<?php

namespace App\Http\Controllers;

use App\Events\MessageEvent;
use App\Events\NewsEvent;
use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    public function index()
    {
//        return response()->json($news->with('user')->latest()->get());
        $news = News::all();
        return view('news', compact('news'));
    }

    public function store(Request $request)
    {
//        if (Auth::check())
//        {
//return "test";
        $news = News::create([
                'news' => $request->news
//                'user_id' => Auth::id()
            ]);
//            $comment = Comment::where('id', $comment->id)->with('user')->first();
//            broadcast(new NewComment($comment))->toOthers();
        event(
            $e = new NewsEvent($news)
//            $e = new MessageEvent($message)
        );
//            return $news->toJson();
//        }
        return redirect()->back();
//        return "You Have to Loged In..";

    }

}
