<?php

namespace App\Livewire\Backend\Subscribers;

use App\Livewire\Backend\Skills\BackendSkillsShowData;
use App\Models\Subscriber;
use Livewire\Component;

class DeleteComponent extends Component
{
    public  $subscriber_id;
    protected $listeners = [
        'subscriberDelete' // that function to deleted
    ];


    public function subscriberDelete($id)
    {
        $this->subscriber_id = Subscriber::find($id);
        $this->dispatch('open-modal', 'deleteSubscriberModal');
    }

    public function deleteSubscriber()
    {

        if (!$this->subscriber_id) {
            return;
        }

        $this->subscriber_id->delete();
        $this->reset("subscriber_id");


        //hide modal
        $this->dispatch('close-modal', 'deleteSubscriberModal');

        //refresh skill list
        $this->dispatch('refreshSubscribers');

        $this->reset("subscriber_id");

        session()->flash('success', 'Subscriber deleted successfully!');
    }

    public function render()
    {
        return view('backend.subscribers.delete-component');
    }
}
