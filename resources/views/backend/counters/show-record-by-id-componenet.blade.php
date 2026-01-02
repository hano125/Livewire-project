<x-create_data_component id="counterShow" title="Show Counter" submit="" btnName="" color="">

    <div class="mb-3">
        <label for="counterName" class="form-label">Counter Name</label>
        <input type="text" class="form-control" id="counterName" placeholder="Enter counter name" wire:model="name"
            disabled>
        @include('backend.validationError', ['property' => 'name'])
    </div>
    <div class="mb-3">
        <label for="counterProgress" class="form-label">Count</label>
        <input type="number" class="form-control" id="counterProgress" placeholder="0-100" min="0"
            max="100" wire:model="count" disabled>
        @include('backend.validationError', ['property' => 'count'])
    </div>

    <div class="mb-3">
        <label for="counterIcon" class="form-label">Icon</label>
        @if ($icon)
            <div class="d-flex align-items-center gap-2">
                <a href="{{ asset('storage/' . $icon) }}" download class="btn btn-primary btn-sm">
                    <i class="fas fa-download"></i> Download Icon
                </a>
                <span class="text-muted">{{ basename($icon) }}</span>
            </div>
        @else
            <p class="form-control-plaintext text-muted">No icon uploaded</p>
        @endif
        @include('backend.validationError', ['property' => 'icon'])
    </div>

</x-create_data_component>
