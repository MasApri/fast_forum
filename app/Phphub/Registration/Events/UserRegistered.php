<?php namespace Phphub\Registration\Events;



use User;

class UserRegistered {

    public $user;

    function __construct(User $user)
    {
        $this->user = $user;
    }

} 