<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Leaderboard extends Model
{
    
    protected $fillable = ['name','description','logo'];


    public function owner()
    {
        return $this->belongsTo(User::class,'owner_user_id');
    }

    public function participants(): HasMany
    {
        return $this->hasMany(Participant::class);
    }
}
