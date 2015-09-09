<?php

namespace Reactor\Presenters;


use Laracasts\Presenter\Presenter;

class UserPresenter extends Presenter {

    public function avatar()
    {
        return str_limit($this->first_name, 1, '') .
               str_limit($this->last_name, 1, '');
    }

    public function fullName()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

}