<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Bookmarks extends Component
{
    public $bookmarks;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->bookmarks = null;

        if (auth()->check()) {
            $this->bookmarks = auth()->user()->bookmarks;
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.bookmarks', [
            'bookmarks' => $this->bookmarks
        ]);
    }
}
