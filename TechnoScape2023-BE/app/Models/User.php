<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'line_id',
        'whatsapp',
        'place_of_birth',
        'date_of_birth',
        'gender',
        'company',
        'is_admin'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function hackathonUser(){
        return $this->hasOne(HackathonUser::class,'user_id','id');
    }
    public function TAUser(){
        return $this->hasOne(TechnoAcademyUser::class,'user_id','id');
    }
    public function TCUser(){
        return $this->hasOne(TechnoConferenceUser::class,'user_id','id');
    }
}
