<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Cart;

class DetailsComponent extends Component
{
    public $slug;

    public function mount($slug) {
        $this->slug = $slug;
    }

    public function store($product_id, $product_name, $product_price)
    {
        Cart::add($product_id, $product_name, 1, $product_price)->associate('App\Models\Product');
        session()->flash('success_message', 'Item Added in Cart');
        return redirect()->route('product.cart');
    }

    public function render()
    {
        $product = Product::where('slug', $this->slug)->firstOrFail();
        $featured = Product::where('id', '!=', $product->id)->inRandomOrder()->get()->take(7);
        return view('livewire.details-component',
            ['product' => $product, 'featured' => $featured]
        )->layout('layouts.app');
    }
}
