<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class blog extends Model
{
    use HasFactory;
    public function insert($table,$array)
    {
    DB::table($table)->insert($array);
    }
public function selectData($table)
    {
     return  DB::table($table)->get();
    }
    public function selectById($table,$id)
    {
        return DB::table($table)->where('id',$id)->get();
    }
public function updataData($table,$array,$id)
    {
         DB::table($table)->where('id',$id)->update($array);
    }
public function deletedata($table,$id)
    {
         DB::table($table)->where('id',$id)->delete();
    }
    public function loginselect($table,$email,$password)
    {
    return DB::table($table)->where('email',$email)->where('password',$password)->first();
    }
}
