<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function resume()
    {
        return $this->belongsTo(Resume::class);
    }

    public function vacancy()
    {
        return $this->belongsTo(Vacancy::class);
    }
}
