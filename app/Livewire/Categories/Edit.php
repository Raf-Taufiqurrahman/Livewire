<?php

namespace App\Livewire\Categories;

use Livewire\Component;
use App\Models\Category;
use App\Livewire\Forms\CategoryForm;

class Edit extends Component
{
    // define categoryform
    public CategoryForm $form;

    /**
     * render
     *
     * @return void
     */
    public function render()
    {
        return view('livewire.categories.edit', [
            'title' => 'Ubah Data Kategori',
        ]);
    }

    /**
     * mount
     *
     * @param  mixed $category
     * @return void
     */
    public function mount(Category $category)
    {
        $this->form->setCategory($category);
    }

    /**
     * save
     *
     * @return void
     */
    public function save()
    {
        // update category data
        $this->form->update();

        // render view
        return $this->redirect(route('apps.categories.index'), navigate: true);
    }
}
