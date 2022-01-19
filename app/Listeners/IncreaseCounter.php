<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\IdeaViewer;

class IncreaseCounter
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(IdeaViewer $event)
    {
        //
        $this->updateviewer($event->idea);
    }
    function updateviewer($idea)
    {
       $idea->view=$idea->view+1;
       $idea->save();
    }
}
