@section('title', $title)
<div>
    <x-hero title="Kategori" subtitle="List Data Kategori">
        <li class="breadcrumb-item">
            <a class="link-fx" href="{{ route('apps.dashboard') }}" wire:navigate>Dashboard</a>
        </li>
        <li class="breadcrumb-item" aria-current="page">
            Kategori
        </li>
    </x-hero>
    <x-container>
        <x-button-create :url="route('apps.categories.create')" title="Tambah Kategori"/>
        <x-search title="Masukan nama kategori" params="query"/>
        <x-card title="Kategori" icon="folder">
            <x-table>
                <thead>
                    <tr>
                        @foreach($fields as $field)
                            <td>{{ $field }}</td>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $key => $category)
                        <tr>
                            <td>{{ $key + $categories->firstItem() }}</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->slug }}</td>
                            <td>
                                <x-button-edit :url="route('apps.categories.edit', $category->id)"/>
                                <x-button-delete :params="$category->id"/>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </x-table>
            <div class="d-flex justify-content-end">{{ $categories->links() }}</div>
        </x-card>
    </x-container>
</div>

<script>
    document.addEventListener('livewire:initialized', function () {
        @this.on('swal:confirm-delete', function () {
            Swal.fire({
                icon: 'warning',
                title: 'Apakah kamu yakin ingin menghapus data ini ?',
                text: 'Data yang sudah dihapus tidak dapat dikembalikan',
                showCancelButton: true,
                confirmButtonText: 'Ya, Tolong Hapus',
            }).then((result) => {
                if (result.isConfirmed) {
                    @this.call('delete');
                }
            });
        });

        @this.on('swal:deleted', function (data) {
            Swal.fire({
                icon: data[0].type,
                title: data[0].title,
                text: data[0].text,
            });
        });
    });
</script>
