<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TechnoConferenceUser extends Model
{
    use HasFactory;

    protected $primaryKey = 'user_id';

    protected $fillable = [
        'user_id',
        'payment_status',
        'payment_receipt'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
