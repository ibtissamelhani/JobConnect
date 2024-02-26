<?php

namespace App\View\Components\admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class UpdateModal extends Component
{
    /**
     * Create a new component instance.
     */
    public $route;
    public $title;
    public $entity;
   

    public function __construct($route,$title,$entity)
    {
        $this->route=$route;
        $this->title=$title;
        $this->entity=$entity;
      
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.update-modal');
    }
}
