<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class accepted_rewards extends Model
{
    use HasFactory;

    protected $table = 'accepted_rewards'; // Set the table name
    protected $primaryKey = ['username', 'reward_id']; // Set the primary key
    public $incrementing = false;

    public function rewards()
    {
        return $this->belongsTo(rewards::class, 'reward_id', 'id');
    }
}
