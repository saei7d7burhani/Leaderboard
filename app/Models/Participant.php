<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Participant extends Model
{

    protected $fillable = ['name','score'];

    public function leaderboard(): BelongsTo
    {
        return $this->belongsTo(Leaderboard::class);
    }

}
