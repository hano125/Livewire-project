    <!-- Add Skill Modal -->
    <div class="modal fade" id="editSkillModal" tabindex="-1" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">
                <form wire:submit.prevent="updateSkill">
                    <div class="modal-header">
                        <h5 class="modal-title">Add New Skill</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="skillName" class="form-label">Skill Name</label>
                            <input type="text" class="form-control" id="skillName" placeholder="Enter skill name"
                                wire:model="name">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="skillProgress" class="form-label">Progress (%)</label>
                            <input type="number" class="form-control" id="skillProgress" placeholder="0-100"
                                min="0" max="100" wire:model="prograss">
                            @error('prograss')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">
                            <i class="bx bx-save me-1"></i> Save Skill
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--/ Add Skill Modal -->
    <script>
        document.addEventListener('livewire:init', () => {
            // Open modal
            Livewire.on('skillUpdate', (data) => {
                $('#editSkillModal').modal('show');
            });

            // Close modal
            Livewire.on('closeEditModal', () => {
                $('#editSkillModal').modal('hide');
            });
        });
    </script>
