<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class HomeController extends Controller{
    //membuat function index
    public function index(){
        return view('home',$data = [
            'title' => 'Home']);
    }
}