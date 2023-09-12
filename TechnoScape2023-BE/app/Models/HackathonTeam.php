<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HackathonTeam extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'team_token',
        'is_binusian',
        'payment_status',
        'payment_receipt'
    ];

    public function members() {
        return $this->hasMany(HackathonUser::class,'hackathon_team_id','id');
    }

    public function hackathonUser(){
        return $this->hasMany(User::class);
    }



}
