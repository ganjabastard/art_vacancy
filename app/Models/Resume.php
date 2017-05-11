<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    public function vacancy()
    {
        return $this->belongsTo(Vacancy::class);
    }
}
