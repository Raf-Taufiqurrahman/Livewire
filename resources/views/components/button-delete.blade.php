@props(['params' => ''])

<button class="btn btn-sm btn-alt-danger rounded" wire:click="confirmDelete({{ $params }})">
    <i class="fa fa-fw fa-trash"></i>
</button>
