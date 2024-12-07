<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileHistory extends Model
{
    use HasFactory;
    protected $guarded = array('id');

    public static $rules = array(
        //課題１７追記 
        'profile_id' => 'required',
        // 
        'edited_at' => 'required',
    );
}
