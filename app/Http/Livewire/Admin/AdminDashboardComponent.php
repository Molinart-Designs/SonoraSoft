<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;

class AdminDashboardComponent extends Component
{
    public function render()
    {
        $products = Product::all();
        return view('livewire.admin.admin-dashboard-component', ['products' => $products])->layout('layouts.app');
    }
}
