<x-create_data_component id="addCounterModal" title="Add New Counter " submit="save" btnName="Save" color="primary">

    <div class="mb-3">
        <label for="counterName" class="form-label">Counter Name</label>
        <input type="text" class="form-control" id="counterName" placeholder="Enter counter name" wire:model="name">
        @include('backend.validationError', ['property' => 'name'])
    </div>
    <div class="mb-3">
        <label for="counterProgress" class="form-label">Count</label>
        <input type="number" class="form-control" id="counterProgress" placeholder="0-100" min="0"
            max="100" wire:model="count">
        @include('backend.validationError', ['property' => 'count'])
    </div>

    <div class="mb-3">
        <label class="form-label">Icon</label>
        <input type="file" class="form-control" wire:model="icon" accept="image/*">
        <div wire:loading wire:target="icon" class="text-info small mt-1">
            Uploading icon, please wait...
        </div>
        @error('icon')
            <span class="text-danger small">{{ $message }}</span>
        @enderror
    </div>
</x-create_data_component>
