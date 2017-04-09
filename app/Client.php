<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    protected $fillable = [
    'nom', 'prenom', 'age', 'sexe', 'numrue', 'rue', 'cp','ville','email','tel', 'ffsnw', 'nht','nhr'];

    public $timestamps = false;


}
