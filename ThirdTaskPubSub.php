<?php

// Publisher
class Publisher
{
    private $sub = [];

    // adding an Event Subscriber
    public function addSubscriber($event, $sub)
    {
        $this->sub[$event] = $sub;
    }

    //deleting an event Subscriber
    public function delSubscriber($sub)
    {
        foreach ($this->sub as $key => $subscriber) {
            if ($subscriber == $sub) {
                unset($this->sub[$key]);
            }
        }
    }
    // notification Subscriber
    public function notify($startEvent, $date)
    {
        foreach ($this->sub as $event => $subscriber) {
            switch ($event) {
                case $startEvent :
                    $subscriber->handler($date);
                break;
            }

        }
    }

    // create an event
    public function emit($event, $date)
    {
        $this->notify($event, $date);
    }

}

// Subscriber
class Subscriber1
{
    public function handler($date)
    {
        echo get_class($date);
    }
}

$publisher = new Publisher();
$subscriber1 = new Subscriber1();
$publisher->addSubscriber("start", $subscriber1);

$publisher->emit('start', $subscriber1);
