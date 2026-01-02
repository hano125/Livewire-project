<?php

namespace App\Livewire\Backend\Services;

use App\Models\Service;
use Livewire\Component;
use Illuminate\Http\UploadedFile; // Correct import for UploadedFile
use Livewire\WithFileUploads;

class UpdateServiceComponent extends Component
{
    use WithFileUploads;
    public $name, $description, $icon, $services;
    public $listeners = ["serviceUpdate" => "edit"];

    public function rules()
    {
        return [
            "name" => "required|string|max:255",
            "description" => "required|string",
            "icon" => "nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048"
        ];
    }

    public function edit($id)
    {
        $this->services = Service::find($id);
        $this->name = $this->services->name;
        $this->description = $this->services->description;
        $this->icon = $this->services->icon;
        $this->resetValidation(['name', 'description', 'icon']);
        //event
        $this->dispatch("open-modal", 'updateServicesModal');
    }

    public function update()
    {
        $this->validate();
        $this->services->name = $this->name;
        $this->services->description = $this->description;
        if ($this->icon instanceof UploadedFile) {
            $iconPath = $this->icon->store('services', 'public');
            $this->services->icon = $iconPath;
        }
        $this->services->save();
        $this->dispatch('close-modal', 'updateServicesModal');
        $this->dispatch('refresh');
    }

    public function render()
    {
        return view('backend.services.update-service-component');
    }
}
