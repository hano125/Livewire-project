<?php

namespace App\Livewire\Backend\Skills;

use App\Models\Skill;
use Livewire\Component;
use Livewire\WithPagination;

class BackendSkillsShowData extends Component
{
    use WithPagination;
    public $searchTerm = '';

    public function search()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('backend.skills.backend-skills-show-data', ['skills' => Skill::where("name", "like", "%{$this->searchTerm}%")->paginate(10)]);
    }
}
