<?php

namespace App\Livewire\Backend\Services;

use App\Models\Service;
use Livewire\Component;

class ShowServiceComponent extends Component
{
    public $searchTerm = '';
    protected $listeners = ["refresh" => '$refresh'];

    public function render()
    {
        $services = Service::where("name", 'like', '%' . $this->searchTerm . '%')->paginate(10);
        return view('backend.services.show-service-component', get_defined_vars());
    }
}
