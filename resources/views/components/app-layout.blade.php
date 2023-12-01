<?php


namespace App\View\Components;

use Illuminate\View\Component;
Use Illuminate\View\View;

class AppLayout extends Component
{
    public function render(): View
{
    return view('layouts.app')
}
}
