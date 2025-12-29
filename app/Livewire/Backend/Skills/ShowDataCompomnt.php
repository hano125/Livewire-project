<?php

namespace App\Livewire\Backend\Skills;

use App\Models\Skill;
use Livewire\Component;

class ShowDataCompomnt extends Component
{
    public  $skill, $name, $prograss;
    protected $listeners = [
        'skillShow' // that function to deleted
    ];

    public function skillShow($id)
    {
        $this->skill = Skill::find($id);
        $this->name = $this->skill->name;
        $this->prograss = $this->skill->prograss;
        $this->dispatch('open-modal', 'skillShow');
    }


    public function render()
    {
        return view('backend.skills.show-data-compomnt');
    }
}
