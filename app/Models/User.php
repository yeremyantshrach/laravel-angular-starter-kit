<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class User
 * @package App\Models
 *
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $birth_date
 * @property string $address
 * @property string $postal_code
 * @property string $phone_number
 * @property string $password
 * @property integer $country_id
 * @property integer $sender_id
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereDeletedAt($value)
 */
class User extends AbstractModel implements
    AuthenticatableContract,
    AuthorizableContract,
    CanResetPasswordContract
{
    use Notifiable, HasRoles, SoftDeletes,
        Authenticatable, Authorizable, CanResetPassword;

    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array $fillable
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'birth_date', 'address',
        'postal_code', 'phone_number', 'password', 'country_id', 'sender_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array $hidden
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    /**
     * @var array $dates
     */
    protected $dates = ['deleted_at'];

    /**
     * @return MorphToMany
     */
    public function roles(): MorphToMany
    {
        return $this->morphToMany(
            config('permission.models.role'),
            'user',
            config('permission.table_names.user_has_roles'),
            'user_id',
            'role_id'
        );
    }

    /**
     * @return MorphToMany
     */
    public function permissions(): MorphToMany
    {
        return $this->morphToMany(
            config('permission.models.permission'),
            'user',
            config('permission.table_names.model_has_permissions'),
            'user_id',
            'permission_id'
        );
    }
}
