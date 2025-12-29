<div>
    <!-- Subscribers Table -->
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Subscribers List</h5>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addSubscriberModal">
                <i class="bx bx-plus me-1"></i> Add New Subscriber
            </button>
        </div>

        <div class="card-body">
            <!-- Search Input -->
            <div class="mb-4">
                <div class="input-group input-group-merge">
                    <span class="input-group-text"><i class="bx bx-search"></i></span>
                    <input type="text" class="form-control" placeholder="Search subscribers..." id="searchSubscriber"
                        wire:model="searchTerm" wire:keyup="search">
                </div>
            </div>

            <!-- Subscribers Table -->
            <div class="table-responsive">
                @if ($subscribers->count() > 0)
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Email</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($subscribers as $subscriber)
                                <tr wire:key="subscriber-{{ $subscriber->id }}">
                                    <td>{{ $subscriber->id }}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <i class="bx bx-mail-send text-primary me-2 fs-4"></i>
                                            <span class="fw-medium">{{ $subscriber->email }}</span>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-icon btn-info" title="Show"
                                            wire:click.prevent="$dispatch('subscriberShow', { id: {{ $subscriber->id }} })">
                                            <i class="bx bx-show"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-icon btn-warning" title="Edit"
                                            wire:click.prevent="$dispatch('subscriberUpdate', { id: {{ $subscriber->id }} })">
                                            <i class="bx bx-edit"></i>
                                        </a>
                                        <a class="btn btn-sm btn-icon btn-danger" title="Delete" href="#"
                                            wire:click.prevent="$dispatch('subscriberDelete', { id: {{ $subscriber->id }} })">
                                            <i class="bx bx-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- Pagination -->
                    <div class="mt-3">
                        {{ $subscribers->links() }}
                    </div>
                @else
                    <div class="text-center py-4">
                        <p class="text-muted">No subscribers found.</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <!--/ Subscribers Table -->
</div>
