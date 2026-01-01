<?php

namespace App\Livewire\Backend\Counters;

use App\Models\Counter;
use Livewire\Component;

class ViewCounterComponent extends Component
{
    public $searchTerm = '';
    protected $listeners = ["refresh" => '$refresh'];
    public function render()
    {
        $counters = Counter::where('name', 'like', '%' . $this->searchTerm . '%')->paginate(10);
        return view('backend.counters.view-counter-component', compact('counters'));
    }
}
