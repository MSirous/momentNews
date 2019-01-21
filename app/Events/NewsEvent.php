<?php

namespace App\Events;

use App\News;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class NewsEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $news;
    public function __construct(News $news)
    {
        $this->news = $news;
    }


    public function broadcastOn()
    {
//        return new PrivateChannel('channel-name');
        return ['chat'];
    }

    public function broadcastAs()
    {
        return 'News';
    }
}
