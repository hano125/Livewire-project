<?php

namespace App\Livewire\Backend\Subscribers;

use Livewire\Component;
use Livewire\WithPagination;

class SubscriberComponent extends Component
{
    use WithPagination;
    public $searchTerm = '';

    protected $listeners = [
        'refreshSubscribers' => '$refresh',
    ];

    public function search()
    {
        $this->resetPage();
    }
    public function render()
    {
        return view('backend.subscribers.subscriber-component', [
            'subscribers' => \App\Models\Subscriber::where('email', 'like', '%' . $this->searchTerm . '%')->paginate(10),
        ]);
    }
}
