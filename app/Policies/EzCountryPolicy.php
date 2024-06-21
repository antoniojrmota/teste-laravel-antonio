<?php

namespace App\Policies;

use App\Models\EzState;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class EzCountryPolicy
{
  use HandlesAuthorization;

  /**
   * Determine whether the user can view any models.
   *
   * @param  \App\Models\User  $user
   * @return \Illuminate\Auth\Access\Response|bool
   */
  public function viewAny(User $user)
  {
    return $user->hasPermissionTo('Visualizar Estados');
  }

  /**
   * Determine whether the user can view the model.
   *
   * @param  \App\Models\User  $user
   * @param  \Spatie\Permission\Models\EzState $register
   * @return \Illuminate\Auth\Access\Response|bool
   */
  public function view(User $user, EzState $register)
  {
    return $user->hasPermissionTo('Visualizar Estados');
  }

  /**
   * Determine whether the user can create models.
   *
   * @param  \App\Models\User  $user
   * @return \Illuminate\Auth\Access\Response|bool
   */
  public function create(User $user)
  {

    return $user->hasPermissionTo('Cadastrar Estados');
  }

  /**
   * Determine whether the user can update the model.
   *
   * @param  \App\Models\User  $user
   * @param  \Spatie\Permission\Models\EzState $register
   * @return \Illuminate\Auth\Access\Response|bool
   */
  public function update(User $user, EzState $register)
  {

    return $user->hasPermissionTo('Editar Estados');
  }

  /**
   * Determine whether the user can delete the model.
   *
   * @param  \App\Models\User  $user
   * @param  \Spatie\Permission\Models\EzState $register
   * @return \Illuminate\Auth\Access\Response|bool
   */
  public function delete(User $user, EzState $register)
  {

    return $user->hasPermissionTo('Remover Estados');
  }

  /**
   * Determine whether the user can restore the model.
   *
   * @param  \App\Models\User  $user
   * @param  \Spatie\Permission\Models\EzState $register
   * @return \Illuminate\Auth\Access\Response|bool
   */
  public function restore(User $user, EzState $register)
  {
    //
  }

  /**
   * Determine whether the user can permanently delete the model.
   *
   * @param  \App\Models\User  $user
   * @param  \Spatie\Permission\Models\EzState $register
   * @return \Illuminate\Auth\Access\Response|bool
   */
  public function forceDelete(User $user, EzState $register)
  {
    //
  }
}
