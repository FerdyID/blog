<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
      return view('halo');
    }

    public function show($id){
        $nilai = 'Ini adalah link ' . $id;
        $users = ['Bayu', 'Andy', 'Alan'];
        return view('single', ['blog' => $nilai, 'users' => $users]);
    }
}
