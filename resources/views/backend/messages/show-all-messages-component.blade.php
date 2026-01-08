<div>
    <!-- Messages Table -->
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Messages List</h5>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addMessageModal">
                <i class="bx bx-plus me-1"></i> Add New Message
            </button>
        </div>


        <div class="card-body">
            <!-- Search Input -->
            <div class="mb-4">
                <div class="input-group input-group-merge">
                    <span class="input-group-text"><i class="bx bx-search"></i></span>
                    <input id="searchMessage" type="text" class="form-control" placeholder="Search messages..."
                        wire:model.debounce.500ms="searchTerm">
                </div>
            </div>

            <!-- Messages Table -->
            <div class="table-responsive">
                @if ($messages->count() > 0)
                    <table class="table table-hover align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th style="width: 70px;">No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th style="width: 130px;">Status</th>
                                <th style="width: 140px;" class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($messages as $index => $message)
                                <tr wire:key="counter-{{ $message->id }}">
                                    <td>{{ $messages->firstItem() + $index }}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <i class="bx bxl text-primary me-2 fs-4"></i>
                                            <span class="fw-medium">{{ $message->name }}</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <i class="bx bxl text-primary me-2 fs-4"></i>
                                            <span class="fw-medium">{{ $message->email }}</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <i class="bx bxl text-primary me-2 fs-4"></i>
                                            <span class="fw-medium text-truncate d-inline-block"
                                                style="max-width: 220px;" title="{{ $message->subject }}">
                                                {{ \Illuminate\Support\Str::limit($message->subject, 60) }}
                                            </span>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-truncate d-inline-block" style="max-width: 260px;"
                                            title="{{ $message->message }}">
                                            {{ \Illuminate\Support\Str::limit($message->message, 80) }}
                                        </span>
                                    </td>
                                    <td>
                                        @php
                                            $status = strtolower($message->status);
                                            $badgeClass =
                                                $status === 'completed'
                                                    ? 'bg-success'
                                                    : ($status === 'rejected'
                                                        ? 'bg-danger'
                                                        : 'bg-warning'); // pending
                                        @endphp
                                        <span class="badge rounded-pill {{ $badgeClass }} text-uppercase">
                                            {{ $status }}
                                        </span>
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group" role="group" aria-label="Message actions">
                                            <a href="#" class="btn btn-sm btn-icon btn-info" title="Show"
                                                wire:click.prevent="$dispatch('counterShow', { id: {{ $message->id }} })">
                                                <i class="bx bx-show"></i>
                                            </a>
                                            <a href="#" class="btn btn-sm btn-icon btn-warning" title="Edit"
                                                wire:click.prevent="$dispatch('counterUpdateComponent', { id: {{ $message->id }} })">
                                                <i class="bx bx-edit"></i>
                                            </a>
                                            <a class="btn btn-sm btn-icon btn-danger" title="Delete" href="#"
                                                wire:click.prevent="$dispatch('counterDelete', { id: {{ $message->id }} })">
                                                <i class="bx bx-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- Pagination -->
                    <div class="mt-3">
                        {{ $messages->links() }}
                    </div>
                @else
                    <div class="text-center py-4">
                        <p class="text-muted">No messages found.</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <!--/ Messages Table -->

    @if (session()->has('success'))
        <script>
            window.addEventListener('DOMContentLoaded', () => {
                alert('{{ session('success') }}');
            });
        </script>
    @endif
</div>
