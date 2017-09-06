<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;

class Type_products extends Model
{
    protected $table = 'type_products';

    public function getListTypeProducts(){
      $result = DB::table('type_products')->where('exist_id',1)->paginate(10);
      return $result;
    }
    public function countTypeProducts(){
      $result = DB::table('type_products')->where('exist_id',1)->count();
      return $result;
    }
}
