<?php

namespace App\Livewire\Backend\Services;

use App\Models\Service;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateServiceComponent extends Component
{
    use WithFileUploads;
    public $name, $description, $icon;

    public function rules()
    {
        return [
            "name" => "required|string|max:255",
            "description" => "required|string",
            "icon" => "required|image|mimes:jpeg,png,jpg,gif,svg|max:2048"
        ];
    }


    public function save()
    {
        $this->validate();

        $iconPath = $this->icon->store('services', 'public');

        Service::create([
            'name'  => $this->name,
            'description' => $this->description,
            'icon'  => $iconPath,
        ]);
        $this->reset(['name', 'description', 'icon']);
        $this->dispatch('close-modal', 'addServicesModal');
        $this->dispatch('refresh');

        session()->flash('success', 'Counter created successfully!');
    }


    public function render()
    {
        return view('backend.services.create-service-component');
    }
}
