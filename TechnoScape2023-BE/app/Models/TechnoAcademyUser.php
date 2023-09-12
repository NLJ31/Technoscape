<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TechnoAcademyUser extends Model
{
    use HasFactory;

    protected $primaryKey = 'user_id';

    protected $fillable = [
        'user_id',
        'cv',
        'id_card',
        'topic',
        'payment_type',
        'payment_status',
        'payment_receipt'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
