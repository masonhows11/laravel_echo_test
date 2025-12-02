<?php

namespace App\Events;

// use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
// use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class TaskCreated implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $task;

    /**
     * Create a new event instance.
     */
    public function __construct($task)
    {
        $this->task = $task;
    }

    public function broadcastAs(): string
    {
        return 'task.added';
    }


    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int>
     */
    public function broadcastOn(): array
    {
        return [
            // this is public channel
            // new Channel('tasks')

            // this is private channel
            new PrivateChannel('tasks'.$this->task->id),
        ];
    }
}
