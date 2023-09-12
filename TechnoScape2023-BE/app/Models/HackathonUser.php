<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HackathonUser extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'hackathon_team_id',
        'cv',
        'id_card',
        'is_leader',
    ];
    public function hackathonTeam()
    {
        return $this->belongsTo(HackathonTeam::class, 'hackathon_team_id' , 'id');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }




}
