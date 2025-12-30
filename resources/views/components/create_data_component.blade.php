<!-- Add Skill Modal -->
<div class="modal fade" id="{{ $id }}" tabindex="-1" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog">
        <div class="modal-content">
            <form @if (!empty($submit)) wire:submit.prevent="{{ $submit }}" @endif>
                <div class="modal-header">
                    <h5 class="modal-title">{{ $title }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{ $slot }}
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>

                    @if (!empty($submit) && !empty($btnName))
                        <button type="button" class="btn btn-{{ $color }}"
                            wire:click="{{ $submit }}">{{ $btnName }}</button>
                    @endif
                </div>
            </form>
        </div>
    </div>
</div>
