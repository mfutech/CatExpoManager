<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

class RegistrationPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * before
     *
     * grant all privilege to the admin
     *
     * @param $user: the user, $ability: the requested ability
     * @return boolean
     * @throws conditon
     **/
    public function before($user, $ability)
    {
        return $user->is_admin;
    }

    /**
     * show a registration
     *
     *
     * @param Type $var Description
     * @return type
     * @throws conditon
     **/
    public function show($user, $registration)
    {
        return $registration->user->id == $user->id;
    }
}
