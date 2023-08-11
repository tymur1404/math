<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ServerResponse extends Model
{
    use HasFactory;

    protected $guarded = false;

    public function calculation(): BelongsTo
    {
        return $this->belongsTo(Calculation::class);
    }
}
