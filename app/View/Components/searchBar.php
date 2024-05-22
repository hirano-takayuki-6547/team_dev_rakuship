<?php

namespace App\View\Components;

use App\Models\Category;
use App\Models\ItemCondition;
use Illuminate\Support\Facades\Request;
use Illuminate\View\Component;

class searchBar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $currentUri = Request::getRequestUri();
        $categories = Category::orderBy('id')->get();
        $conditions = ItemCondition::orderBy('id')->get();

        return view('components.searchBar')
            ->with('currentUri', $currentUri)
            ->with('categories', $categories)
            ->with('conditions', $conditions);
    }
}
