<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class Rezervacija extends Model
{
    use HasFactory;
    protected $fillable=[
        'ime',
        'prezime',
        'datum_preuzimanja',
        'brDana',
        'kontakt',
        'skuter_id',
        'user_id',
];
    //use HasFactory;
    public $timestamps = true;
    public function skuter(){
        return $this->belongsTo(Skuter::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
