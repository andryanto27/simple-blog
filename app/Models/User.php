<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Support\Arr;
use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use App\Models\Role;
// Relations
use App\Models\Person;

class User extends Authenticatable implements JWTSubject, Auditable
{
    use Notifiable, HasRoles, \OwenIt\Auditing\Auditable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'email', 
        'phone',
        'password',
        'session_id',
        'is_admin',
        'remember_token',
        'verified',
        'verification_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getJWTIdentifier() {
        return $this->getKey();
    }

    public function getJWTCustomClaims() {
        return [];
    }

    public function transformAudit(array $data): array {
        if (Arr::has($data, 'new_values.role_id')) {
            $data['old_values']['role_name'] = Role::find($this->getOriginal('role_id'))->name;
            $data['new_values']['role_name'] = Role::find($this->getAttribute('role_id'))->name;
        }

        return $data;
    }

    public function profile() {
        return $this->hasOne(Person::class);
    }

    public function getFullName(){
        $name = $this->username;
        $profile = $this->profile;
        if(strlen($profile->first_name) > 0 || strlen($profile->last_name) > 0){
            $name = $profile->first_name." ".$profile->last_name;
        }
        return $name;
    }

    public function getUserImage(){
        $profile = $this->profile;
        if(!is_null($profile->img_thumbnail)){
            return $profile->img_thumbnail;
        }else{
            if((int) $profile->gender == 0){
                return "dist/img/male.png";
            }else if((int) $profile->gender == 1){
                return "dist/img/female.png";
            }else{
                return "dist/img/no-image.png";
            }
        }
    }

    public function getDateJoined(){
        $date = $this->created_at;
        return $date->diffForHumans();
    }

}
