<?php

namespace App\Livewire\Backend\Skills;

use App\Models\Skill;
use Livewire\Component;

class UpdateSkillData extends Component
{
    //the steps
    //1- define var that has id to update element
    //2- close modal adn define prpparty

    public  $skill, $name, $prograss;
    protected $listeners = [
        'skillUpdate'
    ];

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'prograss' => 'required|integer|min:0|max:100',
        ];
    }
    public function skillUpdate($id)
    {
        $this->skill = Skill::find($id);
        $this->name = $this->skill->name;
        $this->prograss = $this->skill->prograss;
        $this->resetValidation(['name', 'prograss']);
        $this->dispatch('editSkillModal');
    }

    public function saveSkill()
    {
        //validation
        $data = $this->validate();
        // save skill
        $this->skill->update($data);

        $this->reset(['name', 'prograss']);
        //hide modal
        $this->dispatch('closeEditModal');
        //refresh skill list
        $this->dispatch('skillCreated');

        session()->flash('success', 'Skill created successfully!');
    }

    public function render()
    {
        return view('backend.skills.update-skill-data');
    }
}
