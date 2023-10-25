<?php

namespace App\Livewire\Categories;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $query, $categoryId;

    public function render()
    {
        $fields = ['No', 'Nama', 'Slug', 'Aksi'];

        $categories = Category::query()
            ->when($this->query, fn($query) => $query->where('name', 'like', '%'. $this->query .'%'))
            ->latest()
            ->paginate(7)->withQueryString();

        return view('livewire.categories.index', [
            'title' => 'Kategori',
            'fields' => $fields,
            'categories' => $categories,
        ]);
    }

    public function confirmDelete($id)
    {
        $this->categoryId = $id;

        $this->dispatch('swal:confirm-delete');
    }


    public function delete()
    {
        // delete category data by id
        Category::destroy($this->categoryId);

        $this->dispatch('swal:deleted', [
            'type' => 'success',
            'title' => 'Berhasil!',
            'text' => 'Data kategori berhasil dihapus.',
        ]);
    }
}
