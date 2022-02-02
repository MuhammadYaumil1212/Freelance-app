<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class order extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    protected $fillable = [];

    public function order_freelancer()
    {
        return $this->belongsTo('App\Models\User','freelancer_id','id');
    }

    public function order_buyer()
    {
        return $this->belongsTo('App\Models\User','buyer_id','id');
    }

    public function order_status()
    {
        return $this->hasMany('App\Models\orderStatus','order_status_id');
    }
}
