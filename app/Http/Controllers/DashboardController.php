<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Inertia\Inertia;


class DashboardController extends Controller{
    
    public function index(Request $request){
        $value = $request->session()->get('key');
        $user = $request->user(); 

        return Inertia::render('Dashboard', [
            'Name' => $user->name,  
            'Email' => $user->email
        ]);
    }

    

}