<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Nicolaslopezj\Searchable\SearchableTrait;

class User extends Authenticatable
{
    use Notifiable;
    use SearchableTrait;
    use EntrustUserTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $primaryKey = 'id';
	protected $table = 'users';

    protected $searchable = [

        'columns' => [

            'users.name' => 10,

            'users.email' => 5,

            'users.id' => 3,

        ]

    ];
    
    protected $fillable = [
        'name', 'email',  'phone', 'address', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function is_admin(){
        if($this->admin){
            return true;
        }
        return false;
    }
    
        public function Transaksi(){
        return $this->hasMany('App\Transaksi');
    }
}
