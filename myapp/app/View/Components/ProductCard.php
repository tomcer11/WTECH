<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProductCard extends Component
{

    public $name, $price, $photoPath, $altText, $id, $maincategory, $subcategory;
    /**
     * Create a new component instance.
     */
    public function __construct($name, $price, $photoPath, $altText, $id, $maincategory, $subcategory)
    {
        $this->name = $name;
        $this->price = $price;
        $this->photoPath = $photoPath;
        $this->altText = $altText;
        $this->id = $id;
        $this->maincategory = $maincategory;
        $this->subcategory = $subcategory;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.product-card');
    }
}
