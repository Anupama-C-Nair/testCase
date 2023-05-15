<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\DB;

class Address extends Model
{
    use HasFactory;
    protected $table = '_addresses';

  public static $addressTypes = [
    'home' => 'home',
    'pickUp' => 'pickUp',
    'dropOff' => 'dropOff',
  ];

    public function Student(): BelongsTo{
        return $this->belongsTo('Student'::class);
    }

}
