<?php

namespace App\Policies;

use App\Menu;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class MenuPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\Menu  $menu
     * @return mixed
     */
    public function view(User $user, Menu $menu)
    {
        //return $user->id == $menu->MenuOwner;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        if($user->email == 'admin@orebs.cafe' || $user->email == 'manager@orebs.cafe'){
            return True;
        }
         
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Menu  $menu
     * @return mixed
     */
    public function update(User $user, Menu $menu)
    {
        if($user->email == 'admin@orebs.cafe' || $user->email == 'manager@orebs.cafe'){
            return True;
        }
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Menu  $menu
     * @return mixed
     */
    public function delete(User $user, Menu $menu)
    {
        if($user->email == 'admin@orebs.cafe' || $user->email == 'manager@orebs.cafe'){
            return True;
        }
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Menu  $menu
     * @return mixed
     */
    public function restore(User $user, Menu $menu)
    {
        if($user->email == 'admin@orebs.cafe' || $user->email == 'manager@orebs.cafe'){
            return True;
        }
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Menu  $menu
     * @return mixed
     */
    public function forceDelete(User $user, Menu $menu)
    {
        if($user->email == 'admin@orebs.cafe' || $user->email == 'manager@orebs.cafe'){
            return True;
        }
    }
}
