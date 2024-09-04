<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Souscription extends Model
{
    use HasFactory;

    protected $fillable =['user_id','offre_mutuelle_id','date_souscription'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function offreMutuelle()
    {
        return $this->belongsTo(OffreMutuelle::class);
    }



}
