<div>
    <!-- Skills Table -->
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Skills List</h5>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addSkillModal">
                <i class="bx bx-plus me-1"></i> Add New Skill
            </button>
        </div>


        <div class="card-body">
            <!-- Search Input -->
            <div class="mb-4">
                <div class="input-group input-group-merge">
                    <span class="input-group-text"><i class="bx bx-search"></i></span>
                    <input type="text" class="form-control" placeholder="Search skills..." id="searchSkill"
                        wire:model="searchTerm" wire:keyup="search">
                </div>
            </div>

            <!-- Skills Table -->
            <div class="table-responsive">
                @if ($skills->count() > 0)
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Skill Name</th>
                                <th>Progress</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($skills as $index => $skill)
                                <tr>
                                    <td>{{ $skill->id }}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <i class="bx bxl text-primary me-2 fs-4"></i>
                                            <span class="fw-medium">{{ $skill->name }}</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="progress flex-grow-1 me-3" style="height: 8px; width: 200px;">
                                                <div class="progress-bar bg-primary" role="progressbar"
                                                    style="width: {{ $skill->prograss }}%"
                                                    aria-valuenow="{{ $skill->prograss }}" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                            <small class="text-muted">{{ $skill->prograss }}%</small>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-icon btn-warning" title="Edit"
                                            wire:click.prevent="$dispatch('skillUpdate', { id: {{ $skill->id }} })">
                                            <i class="bx bx-edit"></i>
                                        </a>
                                        <button class="btn btn-sm btn-icon btn-danger" title="Delete">
                                            <i class="bx bx-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- Pagination -->
                    <div class="mt-3">
                        {{ $skills->links() }}
                    </div>
                @else
                    <div class="text-center py-4">
                        <p class="text-muted">No skills found.</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <!--/ Skills Table -->

    @livewire('backend.skills.create-skills-data')

    @if (session()->has('success'))
        <script>
            window.addEventListener('DOMContentLoaded', () => {
                alert('{{ session('success') }}');
            });
        </script>
    @endif
</div>
