<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Type_products extends Model
{
    protected $table = 'type_products';

    public function getListTypeProducts(){
      $result = DB::table('type_products')->where('exist_id',1)->get();
      return $result;
    }
    public function countTypeProducts(){
      $result = DB::table('type_products')->where('exist_id',1)->count();
      return $result;
    }
}
