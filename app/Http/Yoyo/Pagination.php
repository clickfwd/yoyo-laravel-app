<?php

namespace App\Http\Yoyo;

use Clickfwd\Yoyo\Component;

class Pagination extends Component
{
    public $page = 1;

    public $pages;

    public $limit = 3;

    protected $data;

    protected $queryString = ['page'];

    public function mount()
    {
        $this->data = config('test-data');
    }

    public function goToPage($page)
    {
        $this->page = $page;
    }

    protected function getResultsProperty()
    {
        $results = array_chunk($this->data, $this->limit)[$this->page - 1] ?? [];

        return $results;
    }

    protected function getStartProperty()
    {
        return 1 + (($this->page - 1) * $this->limit);
    }

    protected function getEndProperty()
    {
        $end = $this->page * $this->limit;

        return $end > $this->total ? $this->total : $end;
    }

    protected function getTotalProperty()
    {
        return count($this->data);
    }

    protected function getNextProperty()
    {
        return $this->page < $this->pages ? $this->page + 1 : false;
    }

    protected function getPreviousProperty()
    {
        return $this->page > 1 ? $this->page - 1 : false;
    }

    public function rendering()
    {
        $this->pages = count(array_chunk($this->data, $this->limit));
    }
}
