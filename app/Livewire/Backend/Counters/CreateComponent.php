<?php

namespace App\Livewire\Backend\Counters;

use App\Models\Counter;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateComponent extends Component
{
    use WithFileUploads;
    public $name, $count, $icon;
    
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'count' => 'required|integer',
            'icon' => 'required|file|image|max:1024',
        ];
    }
    public function save()
    {
        $this->validate();

        $iconPath = $this->icon->store('counters', 'public');

        Counter::create([
            'name'  => $this->name,
            'count' => $this->count,
            'icon'  => $iconPath,
        ]);

        $this->reset(['name', 'count', 'icon']);
        $this->dispatch('close-modal', 'addCounterModal');
        $this->dispatch('refresh');

        session()->flash('success', 'Counter created successfully!');
    }
    public function render()
    {
        return view('backend.counters.create-component');
    }
}
