<?php

namespace App\Models\User;

use App\Models\Programs\CollegeProgram;
use App\Models\Programs\SchoolProgram;
use App\Models\Programs\UniversityProgram;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppliedProgram extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function schoolProgram()
    {
        return $this->belongsTo(SchoolProgram::class);
    }

    public function collegeProgram()
    {
        return $this->belongsTo(CollegeProgram::class);
    }

    public function universityProgram()
    {
        return $this->belongsTo(UniversityProgram::class);
    }
}
