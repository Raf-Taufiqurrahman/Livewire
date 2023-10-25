<?php

namespace App\Livewire\Categories;

use Livewire\Component;
use App\Livewire\Forms\CategoryForm;

class Create extends Component
{
    public CategoryForm $form;

    /**
     * render view
     *
     * @return void
     */
    public function render()
    {
        return view('livewire.categories.create', [
            'title' => 'Tambah Kategori'
        ]);
    }

    /**
     * save data
     *
     * @return void
     */
    public function save()
    {
        // create new category data
        $this->form->store();

        // render view
        return $this->redirect(route('apps.categories.index'), navigate: true);
    }
}
