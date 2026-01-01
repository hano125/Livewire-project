<?php

namespace App\Livewire\Backend\Counters;

use App\Models\Counter;
use Livewire\Component;

class DeleteCounterComponent extends Component
{
    public $counterId;
    public $listeners = ["counterDelete"];
    public function counterDelete($id)
    {
        $this->counterId = $id;
        $this->dispatch('open-modal', 'deleteCounterModal');
    }
    public function deleteCounter()
    {
        $counter = Counter::find($this->counterId);
        if (!$counter) {
            return;
        }
        $counter->delete();
        $this->dispatch('close-modal', 'deleteCounterModal');
        $this->dispatch('refresh')->to(ViewCounterComponent::class);
        session()->flash('success', 'Counter deleted successfully!');
    }

    public function render()
    {
        return view('backend.counters.delete-counter-component');
    }
}
