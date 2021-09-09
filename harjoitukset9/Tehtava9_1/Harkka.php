<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Harkka extends Model
{
   protected $table = 'hsarja';
   // id-nimiseltä kentältä voidaan ottaa autoincrement-ominaisuus
   // pois päältä seuraavasti:
   //public $incrementing = false;
}