<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Therapist extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'password', 'bio', 'specialization', 'contact_info'];
}
