<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Cart;

class HomeComponent extends Component
{
    use WithPagination;

    public function store($product_id, $product_name, $product_price)
    {
        Cart::add($product_id, $product_name, 1, $product_price)->associate('App\Models\Product');
        session()->flash('success_message', 'Item Added in Cart');
        return redirect()->route('product.cart');
    }

    public function render()
    {
        $products = Product::orderBy('created_at', 'desc')->paginate(12);

        return view('livewire.home-component',
            ['products' => $products]
        )->layout('layouts.app');
    }
}
