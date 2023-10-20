<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImprestHolder extends Model
{
    use HasFactory;

    protected $fillables = ['name', 'location', 'deleted_at'];
}
