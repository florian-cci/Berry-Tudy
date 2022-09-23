<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'inscription_id',
        'uuid',
        'type',
        'reference',
        'amount',
        'currency',
        'status',
    ];
    // user 
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    // inscription
    public function inscription()
    {
        if($this->type == 'enfant'){
            return $this->belongsTo(Enfant::class, 'Inscription_ID');
        }
        return $this->belongsTo(Famille::class, 'Inscription_ID');
    }
}
