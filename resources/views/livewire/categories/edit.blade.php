@section('title', $title)
<div>
    <x-hero title="Ubah Kategori" subtitle="Form perubahan data kategori">
        <li class="breadcrumb-item">
            <a class="link-fx" href="{{ route('apps.categories.index') }}" wire:navigate>Kategori</a>
        </li>
        <li class="breadcrumb-item" aria-current="page">
            Ubah Kategori
        </li>
    </x-hero>
    <x-container>
        <x-card title="Ubah Kategori" icon="folder">
            <form wire:submit.prevent="save">
                <x-input
                    label="Nama Kategori"
                    type="text"
                    placeholder="Masukan nama kategori"
                    name="form.name"
                    :value="old('name')"
                />
                <x-button-save/>
                <x-button-cancel :url="route('apps.categories.index')"/>
            </form>
        </x-card>
    </x-container>
</div>
