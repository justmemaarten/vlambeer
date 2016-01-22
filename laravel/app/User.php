<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tbl_users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = ['username', 'email', 'password', 'firstname', 'lastname', 'insertion', 'phone_nr', 'birthdate', 'isadmin', 'hasnewsletter', 'city', 'street', 'house_nr', 'postalcode', 'city2', 'street2', 'house_nr2', 'postalcode2'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function products() {

        return $this->belongsToMany('App\Product', 'tbl_cart', 'id', 'product_id', 'is_sale');

    }

    public function getProducts() {
        return $this->products()->get();
    }
}
