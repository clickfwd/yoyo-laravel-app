<?php

namespace App\Http\Yoyo;

use Clickfwd\Yoyo\Component;

class Counter extends Component
{
    public $count = 0;

    protected $props = ['count'];

    protected $queryString = ['count'];

    public function increment()
    {
        $this->count++;

        $this->dispatchBrowserEvent('counter:updated', $this->count);
    }

    public function decrement()
    {
        $this->count--;

        $this->dispatchBrowserEvent('counter:updated', $this->count);
    }
}
