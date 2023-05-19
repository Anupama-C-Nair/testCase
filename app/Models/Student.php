<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Student extends Model
{
    use HasFactory;
    protected $table = '_students' ;
    protected $fillable = [
        'Name',
        'guardian_id',
        'Gender',
        'Standard',
        'Division',
    ];
    public function guardian() : BelongsTo{

        return $this->belongsTo(Guardian::class);
    }
    public function attendance(): HasMany{
        return $this->hasMany(attendance::class);
    }
    public function address(): HasMany{
        return $this->hasMany(Address::class);
    }
    
}