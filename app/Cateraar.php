<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cateraar extends Model
{

    public function opdrachten()
    {
        return $this->hasMany(Opdracht::class)->orderBy('oplever_datum');
    }


    protected $fillable = ['naam', 'regio'];
}
