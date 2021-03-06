<?php

namespace LaraCourse;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use LaraCourse\Models\Album;
use LaraCourse\Models\AlbumCategory;

//gallery_users
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];
  //  protected $table ='gallery_users';
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function albums(){
         return $this->hasMany(Album::class);
    }
    public function albumCategories()
    {
        return $this->hasMany(AlbumCategory::class);
    }
     public function  getFullNameAttribute(){
        return $this->name;
     }
}
