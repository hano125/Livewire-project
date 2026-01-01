<x-create_data_component id="updateCounterModal" title="Update Counter" submit="updateCounter" btnName="Update"
    color="primary">

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
        <label for="counterIcon" class="form-label">Icon</label>
        <input type="file" class="form-control" id="counterIcon" placeholder="Enter icon class" wire:model="icon">
        @include('backend.validationError', ['property' => 'icon'])
    </div>

</x-create_data_component>
