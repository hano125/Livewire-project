<?php

namespace App\Livewire\Backend\Messages;

use App\Models\Message;
use App\Models\Messages;
use Livewire\Component;
use Livewire\WithPagination;

class ShowAllMessagesComponent extends Component
{
    use WithPagination;

    public $searchTerm = '';
    protected $listeners = ["refresh" => '$refresh'];

    public function render()
    {
        $messages = Messages::where("name", 'like', '%' . $this->searchTerm . '%')
            ->orWhere("email", 'like', '%' . $this->searchTerm . '%')
            ->orWhere("subject", 'like', '%' . $this->searchTerm . '%')
            ->orWhere("message", 'like', '%' . $this->searchTerm . '%')
            ->latest()
            ->paginate(10);
        return view('backend.messages.show-all-messages-component', get_defined_vars());
    }
}
