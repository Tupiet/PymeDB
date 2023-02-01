<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    public function device() {
        return $this->belongsTo(Device::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'device_id',
        'user_id'
    ];
}