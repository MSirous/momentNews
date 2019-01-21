<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function store(Request $request)
    {
        $news = News::create([
            'news' => $request->news,
        ]);
        event(
            $e = new NewsEvent($news)
        );
        return redirect()->back();

    }
}
