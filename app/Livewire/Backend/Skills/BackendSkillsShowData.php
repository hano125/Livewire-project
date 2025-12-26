<?php

namespace App\Livewire\Backend\Skills;

use App\Models\Skill;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class BackendSkillsShowData extends Component
{
    use WithPagination;
    public $searchTerm = '';

    protected $listeners = [
        'skillCreated' => '$refresh',
    ];

    public function search()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('backend.skills.backend-skills-show-data', ['skills' => Skill::where("name", "like", "%{$this->searchTerm}%")->paginate(10)]);
    }
}
