<?php

namespace App\Models;

use App\Events\ChirpCreated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Chirp extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'message',
        'image',

    ];
    protected $dispatchesEvents = [
        'created' => ChirpCreated::class,
    ];

    protected $policies = [
        Chirp::class => ChirpPolicy::class,
    ];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
