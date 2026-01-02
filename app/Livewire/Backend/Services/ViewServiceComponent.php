<?php

namespace App\Livewire\Backend\Services;

use App\Models\Service;
use Livewire\Component;

class ViewServiceComponent extends Component
{
    public $name, $description, $icon, $services;
    public $listeners = ["serviceShow" => "show"];

    public function show($id)
    {
        $this->services = Service::find($id);
        $this->name = $this->services->name;
        $this->description = $this->services->description;
        $this->icon = $this->services->icon;
        $this->dispatch("open-modal", "showService");
    }

    public function render()
    {
        return view('backend.services.view-service-component');
    }
}
