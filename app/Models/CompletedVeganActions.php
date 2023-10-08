<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompletedVeganActions extends Model
{
    use HasFactory;

    protected $table = 'completed_vegan_actions'; // Set the table name
    protected $primaryKey = ['username', 'vegan_action_id']; // Set the primary key
    public $incrementing = false;

    public function veganAction()
    {
        return $this->belongsTo(VeganActions::class, 'vegan_action_id', 'id');
    }
}
