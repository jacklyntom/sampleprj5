<?php

namespace App\Http\Controllers;
use App\Models\blog;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public $obj1;
    public function __construct()
        {
             $this->obj1=new blog();
        }
    public function index()
        {
             return view('form');
        }
    public function store(Request $request)
        {
             $array['name']=$request->input('name');
             $array['age']=$request->input('age');
             $array['address']=$request->input('address');
             $array['email']=$request->input('email');
             $array['password']=$request->input('password');
             $files=$request->file('image');
             $filename = $files->getClientOriginalName();
             $files->move(public_path().'/upload', $filename);
             $array['image']=$filename;

             $this->obj1->insert('blogs',$array);
             return redirect('/logindisplay');
        }
    public function viewdata()
        {
             $result['data']=$this->obj1->selectData('blogs');
             return view('viewform',$result);
        }
    public function edit($id)
        {
            $result['data']=$this->obj1->selectById('blogs',$id);
            return view('regform',$result);
        }
        public function updatedata(Request $request,$id)
        {
            $files=$request->file('image');
            if($files=="")
            {
            $array['name']=$request->input('name');
            $array['age']=$request->input('age');
            $array['address']=$request->input('address');
            $array['email']=$request->input('email');
             $array['password']=$request->input('password');
            }
            else{
             $filename = $files->getClientOriginalName();
             $files->move(public_path().'/upload', $filename);
             $array['image']=$filename;
             $array['name']=$request->input('name');
             $array['age']=$request->input('age');
             $array['address']=$request->input('address');
             $array['email']=$request->input('email');
             $array['password']=$request->input('password');

            }
            $this->obj1->updataData('blogs',$array,$id);
            return redirect('/viewform');
        }
    public function deleteData($id)
    {
        $this->obj1->deletedata('blogs',$id);
        return redirect('/viewform');
    }
    public function login(Request $request)
        {
             $email=$request->input('email');
             $password=$request->input('password');
            //  echo $email;
            //  echo $password;
            //  exit();
            $result= $this->obj1->loginselect('blogs',$email,$password);
            // print_r($result);
            // exit();
            if (isset($result))
            {
                $request->session()->put(array('sessionid'=>$result->id));
                return redirect('/userprofile');
            }
            else
            {
                return redirect('/logindisplay')->with('message', 'Invalid email ID or password');
            }
        }
        public function userprofile()
        {
            $id=session('sessionid');
            $result['data']=$this->obj1->selectById('blogs',$id);
            return view('userprofile',$result);
        }
        public function sessupdatedata(Request $request)
        {
            $id=session('sessionid');
            $files=$request->file('image');
            if($files=="")
            {
            $array['name']=$request->input('name');
            $array['age']=$request->input('age');
            $array['address']=$request->input('address');
            $array['email']=$request->input('email');
             $array['password']=$request->input('password');
            }
            else{
             $filename = $files->getClientOriginalName();
             $files->move(public_path().'/upload', $filename);
             $array['image']=$filename;
             $array['name']=$request->input('name');
             $array['age']=$request->input('age');
             $array['address']=$request->input('address');
             $array['email']=$request->input('email');
             $array['password']=$request->input('password');

            }
            $this->obj1->updataData('blogs',$array,$id);
            return redirect('/userprofile'); 
        }
        public function logindisplay()
        {
             return view('login');
        }
        public function logout(Request $request)
    {
        $request->session()->forget('sessionid');
        return redirect('/logindisplay');
    }

}


