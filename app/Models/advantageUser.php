<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class advantageUser extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'advantage_user';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    protected $fillable = [];

    public function service(){
        return $this->belongsTo('App\Models\service','service_id','id');
    }
}
