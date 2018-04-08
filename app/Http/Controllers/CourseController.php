<?php

namespace App\Http\Controllers;

use App\User;
use App\models\Object;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use JWTAuth;
use JWTAuthException;
use DB;

class CourseController extends Controller
{
    private $user;

    public function __construct(User $user){
        $this->user = $user;
    }

    public function listCourse(Request $request){
        $query = '
        select users.id, roles.role, users.name, users.email, users.address,
        users.fee, district.name as district, province.name as province,
        region.name as region , users.object, users.class from users join roles
        on users.role_id = roles.id join district on users.district_id = district.id
        join province on district.province_id = province.id join region on
        province.region_id = region.id where users.role_id = 2';
        $result = DB::select($query);
        return response()->json([
            'status'=> 200,
            'message'=> 'Get list course successfully',
            'data'=>$result
        ]);
    }

    public function getProvince(Request $request) {
      // $query = 'select * from province';
      // $result = DB::select($query);
      $query = 'select users.name, users.email, object.name from users join object
       on users.id = object.user_id';
      $result = DB::select($query);
      return response()->json([
        'status' => 200,
        'message' => 'Get list province successfully',
        'data' => $result
      ]);
    }

    public function addCourse(Request $request){
        return response()->json([
            'status'=> 200,
            'message'=> 'Get list course successfully',
            'data'=>$result
        ]);
    }
}
