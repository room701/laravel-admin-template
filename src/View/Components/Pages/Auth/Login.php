<?php

namespace Dennykuo\AdminView\View\Components\Pages\Auth;

use Illuminate\View\Component;

class Login extends Component
{
    public $submitUrl;
    public $passwordResetUrl;
    public $heading;


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($submitUrl, $passwordResetUrl, $heading = null)
    {
        $this->submitUrl = $submitUrl;
        $this->passwordResetUrl = $passwordResetUrl;
        $this->heading = $heading ?? 'HELLO';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('admin::auth.login');
    }
}
