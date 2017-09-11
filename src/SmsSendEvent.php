<?php

namespace MMHK\AccessYou;

use Illuminate\Queue\SerializesModels;

class SmsSendEvent
{
    use SerializesModels;

    public
        $params;

    /**
     * @param $params
     */
    public function __construct($params)
    {
        $this->params = $params;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}
