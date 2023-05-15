<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class attendance extends Model
{
    use HasFactory;
    protected $table = 'attendances';
    public function student():BelongsTo{
        return $this->belongsTo(Student::class);
    }
    
}
