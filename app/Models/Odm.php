<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Odm extends Model
{
    use HasFactory;

    protected $fillable = [
        'pergunta_1',
        'opcoes_1',
        // Add other fields as necessary
    ];

    // Define relationships if needed
}
