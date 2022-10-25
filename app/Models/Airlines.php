<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airlines extends Model
{
    use HasFactory;

    protected $table = "airlines";
    protected $fillable = ["name", 'countries_id', 'updated_at', 'created_at', 'airport_id'];

    public function countries()
    {
        return $this->belongsTo(Countries::class, "countries_id");
    }
    
    public function airport()
    {
        return $this->belongsTo(airport::class, "airport_id");
    }
}


