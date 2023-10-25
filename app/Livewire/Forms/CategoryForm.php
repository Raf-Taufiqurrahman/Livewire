<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\Attributes\Rule;

class CategoryForm extends Form
{
    // category property
    public ?Category $category;

    // name property
    #[Rule('required|min:3|max:255')]
    public $name;

    /**
     * store
     *
     * @return void
     */
    public function store()
    {
        // call validate
        $this->validate();

        // create new category data
        Category::create([
            'name' => $this->name,
            'slug' => Str::slug($this->name),
        ]);
    }

    /**
     * setCategory
     *
     * @param  mixed $category
     * @return void
     */
    public function setCategory(Category $category)
    {
        $this->category = $category;

        $this->name = $category->name;
    }

    /**
     * update
     *
     * @return void
     */
    public function update()
    {
        $this->category->update([
            'name' => $this->name,
            'slug' => Str::slug($this->name),
        ]);
    }
}
