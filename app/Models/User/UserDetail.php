<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;

    public function schoolDocuments()
    {
        return $this->hasMany(School::class);
    }

    public function collegeDocuments()
    {
        return $this->hasMany(College::class);
    }

    public function universityDocuments()
    {
        return $this->hasMany(University::class);
    }
}
