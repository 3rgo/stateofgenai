<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Participant extends Model
{
    use Notifiable;

    protected $fillable = [
        'hashed_email',
        'email',
        'birth_year',
        'country',
        'longitudinal_tracking',
        'send_results',
    ];

    protected function casts(): array{
        return [
            'longitudinal_tracking' => 'boolean',
            'send_results'          => 'boolean',
        ];
    }
}
