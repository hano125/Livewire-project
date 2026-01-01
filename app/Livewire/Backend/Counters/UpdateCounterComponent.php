<?php

namespace App\Livewire\Backend\Counters;

use Illuminate\Http\UploadedFile; // Correct import for UploadedFile
use App\Models\Counter;
use Livewire\Component;
use Livewire\WithFileUploads;

class UpdateCounterComponent extends Component
{
    use WithFileUploads;
    public $counter, $icon, $name, $count;
    protected $listeners = [
        'counterUpdateComponent',
    ];

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'count' => 'nullable|integer',
            'icon' => 'nullable|file|image|max:1024',
        ];
    }

    public function counterUpdateComponent($id)
    {
        $this->counter = Counter::find($id);
        $this->name = $this->counter->name;
        $this->count = $this->counter->count;
        $this->icon = $this->counter->icon;
        $this->resetValidation(['name', 'count', 'icon']);
        $this->dispatch('open-modal', 'updateCounterModal');
    }

    public function updateCounter()
    {
        $this->validate();
        $this->counter->name = $this->name;
        $this->counter->count = $this->count;
        if ($this->icon instanceof UploadedFile) {
            $iconPath = $this->icon->store('counters', 'public');
            $this->counter->icon = $iconPath;
        }
        $this->counter->save();
        $this->dispatch('close-modal', 'updateCounterModal');
        $this->dispatch('refresh');
    }


    public function render()
    {
        return view('backend.counters.update-counter-component');
    }
}
