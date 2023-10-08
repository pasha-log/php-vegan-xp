<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $primaryKey = 'username'; // Set the primary key
    public $incrementing = false; // Make sure Laravel knows it's a non-incrementing primary key
    public $timestamps = true;

    protected $fillable = [
        'username',
        'first_name',
        'last_name',
        'email',
        'password',
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
        'password' => 'hashed',
    ];

    public function completedVeganActions()
    {
        return $this->hasMany(CompletedVeganActions::class, 'username', 'username');
    }

    public function acceptedVeganRewards()
    {
        return $this->hasMany(AcceptedRewards::class, 'username', 'username');
    }

    public function calculateTotalAccumulatedXP() {
            $completedActionIds = $this->completedVeganActions->pluck('vegan_action_id');
            
            // Calculate the total vegan XP by summing xp_amount
            return VeganActions::whereIn('id', $completedActionIds)
            ->sum('xp_amount');
    }
}
