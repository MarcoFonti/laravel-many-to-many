<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    use HasFactory;

    /* RELAZIONE CON IL MEDELLO PROJECT */
    public function projects() {
        /* MOLTI PROGETTI */
        return $this->belongsToMany(Project::class);
    }
}