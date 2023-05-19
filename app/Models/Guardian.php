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
    protected $table = '_guardians';
    protected $fillable = [
        'Name',
        'Gender',
        'Gender',
        'Phone',
        'Email',
    ];
    
    public function students(): HasMany{
        
        return $this->hasMany(Student::class);
    }
   

}
