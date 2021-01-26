<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employment extends Model
{
    use HasFactory;
    protected $table = 'employments';
    
    public function employmentAchievements(){
        return $this->hasMany(EmploymentAchievement::class,'employment_id','id');
    }

    public function employmentResponsibilities(){
        return $this->hasMany(EmploymentResponsibility::class,'employment_id','id');
    }
}
