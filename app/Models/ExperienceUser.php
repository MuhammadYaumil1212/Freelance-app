<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExperienceUser extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'detail_user';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    protected $fillable = [];

    public function detail_user()
    {
        return $this->belongsTo('App\Models\DetailUser','detaiil_user_id','id');
    }
}
