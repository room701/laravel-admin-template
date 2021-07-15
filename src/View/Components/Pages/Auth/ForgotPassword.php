<?php

namespace Dennykuo\AdminFerry\View\Components\Pages\Auth;

use Illuminate\View\Component;

class ForgotPassword extends Component
{
    public $submitUrl;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($submitUrl)
    {
        $this->submitUrl = $submitUrl;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('admin-ferry::auth.forgot-password');
    }
}
