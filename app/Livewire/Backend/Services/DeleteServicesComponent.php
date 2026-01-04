<?php

namespace App\Livewire\Backend\Services;

use App\Models\Service;
use Livewire\Component;

class DeleteServicesComponent extends Component
{

    public $service_id;
    public $listeners = ["serviceDelete"];

    public function serviceDelete($id)
    {
        $this->service_id = $id;
        $this->dispatch('open-modal', 'serviceDelete');
    }

    public function delete()
    {
        $services = Service::find($this->service_id);
        if ($services) {
            $services->delete();
            $this->dispatch('close-modal', 'serviceDelete');
            $this->dispatch('refresh');
            session()->flash('success', 'Services deleted successfully!');
        }
    }
    public function render()
    {
        return view('backend.services.delete-services-component');
    }
}
