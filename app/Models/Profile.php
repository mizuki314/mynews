<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required',
        'gender' => 'required',
        'hobby' => 'required',
        'introduction' => 'required',
    );
    // 以下を追記
    // Modelに関連付けを行う
    public function histories()
    {
        return $this->hasMany('App\Models\ProfileHistory');

    }
    // 追記ここまで
}