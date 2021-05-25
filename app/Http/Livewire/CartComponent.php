<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Cart;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class CartComponent extends Component
{
    public $featured;

    public function mount()
    {
        $this->featured = Product::inRandomOrder()->get()->take(7);
    }

    public function increaseQuantity($rowId)
    {
        $p = Cart::get($rowId);
        $qty = $p->qty + 1;
        Cart::update($rowId, $qty);
        $this->featured = Product::inRandomOrder()->get()->take(7);
    }

    public function decreaseQuantity($rowId)
    {
        $p = Cart::get($rowId);
        $qty = $p->qty - 1;
        Cart::update($rowId, $qty);
        $this->featured = Product::inRandomOrder()->get()->take(7);
    }

    public function removeFromCart($rowId)
    {
        Cart::remove($rowId);
        $this->featured = Product::inRandomOrder()->get()->take(7);
        Session()->flash('success_message', 'Item has been removed');
    }

    public function checkout()
    {
        if (Auth::User()) {
            Cart::destroy();
            Session()->flash('message', 'You have purchased your products successfully!');
            return redirect('/');
        } else {
            return redirect()->route('login');
        }
    }

    public function render()
    {
        return view('livewire.cart-component')->layout('layouts.app');
    }
}
