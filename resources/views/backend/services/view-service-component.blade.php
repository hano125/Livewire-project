<x-create_data_component id="showService" title="Show New Service " submit="" btnName=" " color="">

    <div class="mb-3">
        <label for="counterName" class="form-label">Services Name</label>
        <input type="text" class="form-control" id="counterName" placeholder="Enter counter name" wire:model="name"
            disabled>
        @include('backend.validationError', ['property' => 'name'])
    </div>
    <div class="mb-3">
        <label for="counterProgress" class="form-label">Description</label>
        <input type="text" class="form-control" id="counterProgress" placeholder="Type some think"
            wire:model="description" disabled>
        @include('backend.validationError', ['property' => 'description'])
    </div>

    <div class="mb-3">
        <label class="form-label">Icon</label>
        <input type="file" class="form-control" wire:model="icon" accept="image/*" disabled>
        <div wire:loading wire:target="icon" class="text-info small mt-1">
            Uploading icon, please wait...
        </div>
        @error('icon')
            <span class="text-danger small">{{ $message }}</span>
        @enderror
    </div>


</x-create_data_component>
