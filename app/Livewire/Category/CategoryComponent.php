<?php

namespace App\Livewire\Category;

use App\Models\Category;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Categorias')]
class CategoryComponent extends Component
{
    // atrubutos
    public $totalRegistros =0;
    public $name;

    // metodos
    public function render()
    {
        return view('livewire.category.category-component');
    }
    public function mount()
    {
        $this->totalRegistros = Category::count();
    }
    public function store()
    {
        //dump('crear categoria');
        $rules = [
            'name' => 'required|min:5|max:255|unique:categories'
        ];
        $messages = [
            'name.required' => 'El nombre de la categoria es requerido',
            'name.min' => 'El nombre de la categoria debe tener al menos 5 caracteres',
            'name.max' => 'El nombre de la categoria debe tener maximo 255 caracteres',
            'name.unique' => 'El nombre de la categoria ya existe'
        ];
        $this->validate($rules, $messages);
        $category = new Category();
        $category->name = $this->name;
        $category->save();
        $this->dispatch('close-modal');
    }

}
