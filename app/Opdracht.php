<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opdracht extends Model
{

    public function cateraar()
    {
        return $this->belongsTo(Cateraar::class);
    }

    protected $fillable = ['cateraar_id', 'naam', 'omschrijving', 'oplever_datum'];
}
