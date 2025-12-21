<?php

namespace App\Livewire\Backend\Skills;

use App\Models\Skill;
use Livewire\Component;
use Livewire\WithPagination;

class BackendSkillsShowData extends Component
{
    use WithPagination;
    public function render()
    {
        return view('backend.skills.backend-skills-show-data', ['skills' => Skill::paginate(10)]);
    }
}
