<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Guardian extends Model
{
    use HasFactory;
    protected $table = 'guardians';
    public function students(): HasMany{
        
        return $this->hasMany(Student::class);
    }
    public function address(): HasMany{
        return $this->hasMany('Address' ::class);
    }

}
