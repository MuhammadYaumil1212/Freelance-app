<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetailUser extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'Detail_user';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    protected $fillable = ['users_id','photo','role','contact_number','bioghrapy'];

    // one to one
    public function User(){
        return $this->belongsTo('App\Models\User','user_id','id');
    }
    //one to many
    public function experience_user(){
        return $this->hasMany('App\Models\ExperienceUser','detail_user_id');
    }
}
