<div>
    <!-- Skills Table -->
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Counters List</h5>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCounterModal">
                <i class="bx bx-plus me-1"></i> Add New Counters
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
                @if ($counters->count() > 0)
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Counter Name</th>
                                <th>Count</th>
                                <th>Icon</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($counters as $index => $counter)
                                <tr wire:key="counter-{{ $counter->id }}">
                                    <td>{{ $counter->id }}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <i class="bx bxl text-primary me-2 fs-4"></i>
                                            <span class="fw-medium">{{ $counter->name }}</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="progress flex-grow-1 me-3" style="height: 8px; width: 200px;">
                                                <div class="progress-bar bg-primary" role="progressbar"
                                                    style="width: {{ $counter->count }}%"
                                                    aria-valuenow="{{ $counter->count }}" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                            <small class="text-muted">{{ $counter->count }}%</small>
                                        </div>
                                    </td>
                                    <td>
                                        @if ($counter->icon)
                                            <img src="{{ Storage::url($counter->icon) }}"
                                                alt="{{ $counter->name }} icon" class="rounded"
                                                style="width: 32px; height: 32px; object-fit: cover;"
                                                onerror="this.style.display='none'">
                                        @else
                                            <span class="text-muted">No icon</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-icon btn-info" title="Show"
                                            wire:click.prevent="$dispatch('counterShow', { id: {{ $counter->id }} })">
                                            <i class="bx bx-show"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-icon btn-warning" title="Edit"
                                            wire:click.prevent="$dispatch('counterUpdateComponent', { id: {{ $counter->id }} })">
                                            <i class="bx bx-edit"></i>
                                        </a>
                                        <a class="btn btn-sm btn-icon btn-danger" title="Delete" href="#"
                                            wire:click.prevent="$dispatch('counterDelete', { id: {{ $counter->id }} })">
                                            <i class="bx bx-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- Pagination -->
                    <div class="mt-3">
                        {{ $counters->links() }}
                    </div>
                @else
                    <div class="text-center py-4">
                        <p class="text-muted">No counters found.</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <!--/ Skills Table -->

    @if (session()->has('success'))
        <script>
            window.addEventListener('DOMContentLoaded', () => {
                alert('{{ session('success') }}');
            });
        </script>
    @endif
</div>
