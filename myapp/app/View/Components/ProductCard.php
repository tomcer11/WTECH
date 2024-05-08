<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProductCard extends Component
{

    public $name, $price, $photoPath, $altText, $id;
    /**
     * Create a new component instance.
     */
    public function __construct($name, $price, $photoPath, $altText, $id)
    {
        $this->name = $name;
        $this->price = $price;
        $this->photoPath = $photoPath;
        $this->altText = $altText;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.product-card');
    }
}
