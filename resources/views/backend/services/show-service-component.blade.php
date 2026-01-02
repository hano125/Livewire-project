<div>
    <!-- Skills Table -->
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Counters List</h5>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addServicesModal">
                <i class="bx bx-plus me-1"></i> Add New Services
            </button>
        </div>


        <div class="card-body">
            <!-- Search Input -->
            <div class="mb-4">
                <div class="input-group input-group-merge">
                    <span class="input-group-text"><i class="bx bx-search"></i></span>
                    <input type="text" class="form-control" placeholder="Search Services..." id="searchSkill"
                        wire:model="searchTerm" wire:keyup="search">
                </div>
            </div>

            <!-- Skills Table -->
            <div class="table-responsive">
                @if ($services->count() > 0)
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
                            @foreach ($services as $index => $service)
                                <tr wire:key="counter-{{ $service->id }}">
                                    <td>{{ $service->id }}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <i class="bx bxl text-primary me-2 fs-4"></i>
                                            <span class="fw-medium">{{ $service->name }}</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <i class="bx bxl text-primary me-2 fs-4"></i>
                                            <span class="fw-medium">{{ $service->description }}</span>
                                        </div>
                                    </td>
                                    <td>
                                        @if ($service->icon)
                                            <img src="{{ Storage::url($service->icon) }}"
                                                alt="{{ $service->name }} icon" class="rounded"
                                                style="width: 32px; height: 32px; object-fit: cover;"
                                                onerror="this.style.display='none'">
                                        @else
                                            <span class="text-muted">No icon</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-icon btn-info" title="Show"
                                            wire:click.prevent="$dispatch('serviceShow', { id: {{ $service->id }} })">
                                            <i class="bx bx-show"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-icon btn-warning" title="Edit"
                                            wire:click.prevent="$dispatch('serviceUpdate', { id: {{ $service->id }} })">
                                            <i class="bx bx-edit"></i>
                                        </a>
                                        <a class="btn btn-sm btn-icon btn-danger" title="Delete" href="#"
                                            wire:click.prevent="$dispatch('serviceDelete', { id: {{ $service->id }} })">
                                            <i class="bx bx-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- Pagination -->
                    <div class="mt-3">
                        {{ $services->links() }}
                    </div>
                @else
                    <div class="text-center py-4">
                        <p class="text-muted">No Services found.</p>
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
