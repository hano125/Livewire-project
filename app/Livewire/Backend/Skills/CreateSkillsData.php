<?php

namespace App\Livewire\Backend\Skills;

use App\Models\Skill;
use Livewire\Component;

class CreateSkillsData extends Component
{
    public $name;
    public $prograss;

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'prograss' => 'required|integer|min:0|max:100',
        ];
    }
    public function saveSkill()
    {
        //validation
        $data = $this->validate();
        //save skill
        Skill::create($data);
        $this->reset(['name', 'prograss']);
        //hide modal
        $this->dispatch('close-modal', 'addSkillModal');
        //refresh skill list
        $this->dispatch('skillCreated');

        session()->flash('success', 'Skill created successfully!');
    }

    public function render()
    {
        return view('backend.skills.create-skills-data');
    }
}
