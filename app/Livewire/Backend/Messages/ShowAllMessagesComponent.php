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
        $query = Messages::query()
            ->select(['id', 'name', 'email', 'subject', 'status'])
            ->when($this->searchTerm !== '', function ($q) {
                $term = $this->searchTerm;
                $q->where(function ($q) use ($term) {
                    $q->where('name', 'like', "%{$term}%")
                        ->orWhere('email', 'like', "%{$term}%")
                        ->orWhere('subject', 'like', "%{$term}%")
                        ->orWhere('message', 'like', "%{$term}%");
                });
            })
            ->orderByDesc('id'); // uses PK index

        $messages = $query->Paginate(10);

        return view('backend.messages.show-all-messages-component', get_defined_vars());
    }
}
