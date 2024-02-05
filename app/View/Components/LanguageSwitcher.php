<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LanguageSwitcher extends Component
{
    public $current_locale;
    public $available_locales;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->current_locale = app()->getLocale();
        $this->available_locales = config('app.available_locales');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.daisy.language-switcher-dropdown')
        ->with('current_locale',$this->current_locale)
        ->with('available_locales',$this->available_locales);
        // ->with('nav_dropdowns',null);
    }
}
