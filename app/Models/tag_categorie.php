<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class tag_categorie extends Model
{
    use HasFactory;

    protected $fillable = ['tag_id', 'categorie_id'];
}
