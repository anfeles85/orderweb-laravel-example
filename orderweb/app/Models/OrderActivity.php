<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderActivity extends Model
{
    use HasFactory;
    protected $table = 'order_activity';
    protected $fillable = [
        'order_id',
        'activity_id'
    ];

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }

    public function activity()
    {
        return $this->belongsTo(Activity::class, 'activity_id');
    }
}
