    <!-- Delete Skill Modal -->
    <div class="modal fade" id="deleteSkillModal" tabindex="-1" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">
                <form wire:submit.prevent="deleteSkill">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete Skill</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-warning" role="alert">
                            <i class="bx bx-error me-2"></i>
                            <strong>Are you sure?</strong>
                            <p class="mb-0 mt-2">Do you really want to delete this skill? This action cannot be undone.
                            </p>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger">
                            <i class="bx bx-trash me-1"></i> Delete
                        </button>
                    </div>
                </form>P
            </div>
        </div>
    </div>
    <!--/ Delete Skill Modal -->
    <script>
        document.addEventListener('livewire:init', () => {
            // Open modal
            Livewire.on('deleteSkillModal', () => {
                $('#deleteSkillModal').modal('show');
            });

            Livewire.on('closeDelete', () => {
                $('#deleteSkillModal').modal('hide');
            });
        });
    </script>
