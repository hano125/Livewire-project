<x-create_data_component id="addSkillModal" title="Add New Skill " submit="saveSkill" btnName="Save Skill" color="primary" >


    <div class="mb-3">
        <label for="skillName" class="form-label">Skill Name</label>
        <input type="text" class="form-control" id="skillName" placeholder="Enter skill name" wire:model="name">
        @include('backend.validationError', ['property' => 'name'])
    </div>
    <div class="mb-3">
        <label for="skillProgress" class="form-label">Progress (%)</label>
        <input type="number" class="form-control" id="skillProgress" placeholder="0-100" min="0" max="100"
            wire:model="prograss">
        @include('backend.validationError', ['property' => 'prograss'])
    </div>
</x-create_data_component>
