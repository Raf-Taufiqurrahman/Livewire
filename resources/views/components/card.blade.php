@props(['title' => '', 'icon' => ''])
<div class="block block-rounded blocked-themed">
    <div class="block-header block-header-default">
        <h3 class="block-title">
            <i class="fas fa fa-{{ $icon }}"></i> {{ $title }}
        </h3>
    </div>
    <div class="block-content">
        {{ $slot }}
    </div>
</div>
