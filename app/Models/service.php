<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class service extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    protected $fillable = [];

    public function User()
    {
        return $this->belongsTo('App\Models\User','user_id','id');
    }
    
    public function advantage_user()
    {
        return $this->hasMany('App\Models\advantageUser','service_id');
    }
    public function advantage_service()
    {
        return $this->hasMany('App\Models\advantageService','service_id');
    }
    public function tagline()
    {
        return $this->hasMany('App\Models\tagline','service_id');
    }
    public function thumbnail_service()
    {
        return $this->hasMany('App\Models\thumbnailService','service_id');
    }
}
