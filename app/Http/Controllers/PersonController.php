<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use App\Http\Requests\ClientRequest;
use Illuminate\Support\Facades\Redis;

class PersonController extends Controller
{
    //
    public function index(ClientRequest $request){
        $items=Person::all();
        return view('index',['items'=>$items]);
    }
    public function add(ClientRequest $request){
    return view('add');
    }
    public function create(ClientRequest $request){
        $form=$request->all();
        Person::create($form);
        return redirect('/');
    }
    
}
