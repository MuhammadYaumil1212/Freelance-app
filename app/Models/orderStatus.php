<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class orderStatus extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'order_status';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    protected $fillable = ['name'];

    public function order_status()
    {
        return $this->belongsTo('App\Models\order','order_status_id','id');
    }
}
