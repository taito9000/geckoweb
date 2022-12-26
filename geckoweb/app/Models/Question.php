<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Controllers\Admin\AdminQuestionController;
class Question extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body', 'image'];
}
