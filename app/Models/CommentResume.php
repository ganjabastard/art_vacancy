<?php

namespace App\Mdodels;

use App\User;
use Illuminate\Database\Eloquent\Model;

class CommentResume extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
