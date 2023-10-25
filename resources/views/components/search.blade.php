@props(['title' => '', 'params' => ''])
<div class="mb-3">
    <div class="input-group">
        <input type="text" class="form-control" wire:model.live.debounce.250ms="{{ $params }}"
            placeholder="{{ $title }}">
        <span class="input-group-text bg-body">
            <i class="fa fa-search"></i>
        </span>
    </div>
</div>
