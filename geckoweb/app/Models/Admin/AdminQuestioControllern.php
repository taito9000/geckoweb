<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminQuestioControllern extends Model
{
    use HasFactory;

    
    protected $fillable = ['title', 'body', 'image','parent'];
}
