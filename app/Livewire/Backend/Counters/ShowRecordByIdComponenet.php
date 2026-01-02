<?php

namespace App\Livewire\Backend\Counters;

use App\Models\Counter;
use Livewire\Component;

class ShowRecordByIdComponenet extends Component
{
    public $name, $icon, $count, $counter;
    public $listeners = ["counterShow"];

    public function counterShow($id)
    {
        $this->counter = Counter::find($id);
        $this->name =  $this->counter->name;
        $this->count = $this->counter->count;
        $this->icon =  $this->counter->icon;
        $this->dispatch('open-modal', 'counterShow');
    }


    public function render()
    {
        return view('backend.counters.show-record-by-id-componenet');
    }
}
