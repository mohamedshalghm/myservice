<?php

namespace myprovide\myservice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use myprovide\myservice\MyServiceFacades;

class MyServiceFacades extends Controller
{
   public static function GetName($name)
   {
   		return $name;
   }
}
