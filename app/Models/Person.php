<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model {

    public $timestamps = false;
    public $incrementing = false;

    protected $table = 'persons';
    protected $fillable = [
        'user_id',
        'image',
        'first_name',
        'last_name',
        'gender',
        'blood_type',
        'marital_status',
        'postal_code',
        'fax_number',
        'birth_place',
        'birth_date',
        'address',
        'country_id',
        'about_me'
    ];

    public static function Genders(){
        return array(
            "MALE",
            "FEMALE"
        );
    }

    public static function BloodTypes(){
        return array(
            "A",
            "B",
            "AB",
            "O"
        );
    }

    public static function MaritalStatus(){
        return array(
            "SINGLE",
            "MARRIED",
            "DIVORCE",
            "WIDOWED"
        );
    }

}