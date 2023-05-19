<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class attendance extends Model
{
    use HasFactory;
    protected $table = 'attendances';
    protected $fillable = [
        'attendance_date',
        'morning_dropOff',
        'morning_pickup',
        'evening_pickup',
        'evening_dropOff',
        'student_id',
    ];
    public function student():BelongsTo{
        return $this->belongsTo(Student::class);
    }
    
}
