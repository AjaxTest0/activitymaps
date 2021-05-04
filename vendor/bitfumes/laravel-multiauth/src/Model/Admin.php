<?php

namespace Bitfumes\Multiauth\Model;

use Bitfumes\Multiauth\Notifications\AdminResetPasswordNotification;
use Bitfumes\Multiauth\Traits\hasPermissions;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable implements MustVerifyEmail
{
    use Notifiable, hasPermissions;

    protected $casts = ['active' => 'boolean'];

    public function roles()
    {
        $role = config('multiauth.models.role');
        return $this->belongsToMany($role);
    }

    /**
     * Send the password reset notification.
     *
     * @param string $token
     *
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new AdminResetPasswordNotification($token));
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
