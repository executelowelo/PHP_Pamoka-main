<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    use HasFactory;

    protected $table = 'airports';

    protected $fillable = ['name', 'countries_id', 'location', 'airlines_id'];

    
    public function countries()
    {
        return $this->belongsTo(Countries::class, "countries_id");
    }

    public function airlines()
    {
        return $this->belongsTo(Airlines::class, "airlines_id");
    }
}

