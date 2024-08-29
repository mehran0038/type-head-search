<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class TestController extends Controller
{
    public function index()
    {
        return view('search');
    }
     public function searchAutocomplete(Request $request)
    {
          $search = $request->get('term');
     
          $result = User::where('name', 'LIKE', '%' . $search . '%')->pluck('name');
          
          return response()->json($result);
           
    } 
}