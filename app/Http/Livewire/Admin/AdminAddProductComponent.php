<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Product;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminAddProductComponent extends Component
{
    use WithFileUploads;

    public $name;
    public $short_description;
    public $description;
    public $regular_price;
    public $sku;
    public $stock;
    public $featured;
    public $image;
    public $category_id;

    public function mount()
    {
        $this->featured = 0;
    }

    public function addProduct()
    {
        $product = new Product();
        $product->name = $this->name;
        $product->short_description = $this->short_description;
        $product->description = $this->description;
        $product->regular_price = $this->regular_price;
        $product->sku = $this->sku;
        $product->stock = $this->stock;
        $product->featured = $this->featured;
        $product->category_id = $this->category_id;

        $imageName = Carbon::now()->timestamp . $this->image->extension();
        $this->image->storeAs('products', $imageName);
        $product->img = $imageName;

        $product->save();

        Session()->flash('message', 'Product Has Been Created Successfully');

        $this->name = '';
        $this->short_description = '';
        $this->description = '';
        $this->regular_price = '';
        $this->sku = '';
        $this->stock = '';
        $this->featured = 0;
        $this->image = '';
        $this->category_id = '';
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.admin.admin-add-product-component', ['categories'=>$categories])->layout('layouts.app');
    }
}
