@props(['url' => '', 'title' => ''])
<a href="{{ $url }}" class="btn btn-alt-secondary me-1 mb-3" wire:navigate>
    <i class="fa fa-fw fa-plus me-1"></i> {{ $title }}
</a>
