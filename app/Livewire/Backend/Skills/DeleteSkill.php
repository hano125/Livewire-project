<?php

namespace App\Livewire\Backend\Skills;

use App\Models\Skill;
use Livewire\Component;

class DeleteSkill extends Component
{

    public  $skill_id;
    protected $listeners = [
        'skillDelete' // that function to deleted
    ];


    public function skillDelete($id)
    {
        $this->skill_id = Skill::find($id);
        $this->dispatch('deleteSkillModal');
    }

    public function deleteSkill()
    {

        if (!$this->skill_id) {
            return;
        }

        $this->skill_id->delete();

        $this->reset("skill_id");


        //hide modal
        $this->dispatch('closeDelete');

        //refresh skill list
        $this->dispatch('skillCreated')->to(BackendSkillsShowData::class);

        $this->reset("skill_id");

        session()->flash('success', 'Skill deleted successfully!');
    }
    public function render()
    {
        return view('backend.skills.delete-skill');
    }
}
