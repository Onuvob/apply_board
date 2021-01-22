<?php

namespace App\Models\Programs;
use App\Models\User\AppliedProgram;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolProgram extends Model
{
    use HasFactory;

    public function appliedPrograms()
    {
        return $this->hasMany(AppliedProgram::class);
    }
}
