<?php

namespace App\Policies;
use Illuminate\Auth\Access\Response;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\User;

class UserPolicy
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

    public function checkCustomer(User $user)
    {
        return ($user->roles == 'customer'
            ? Response::allow()
            : Response::deny('Anda haruslah terdaftar sebagai member'));
    }
}
