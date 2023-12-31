<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    use HasFactory;
    protected $table = 'table_pizza';

    protected $fillable = [
        'nome',
        'valor',
        'src'
        ];
}
