<?php


namespace App\Http\Controllers;

//use Illuminate\Support\Facades\Request;

use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    use ApiResponser;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    } 

    /*
        * Return author list,
        * @return Illuminate\http\Response
    */
    public function index(Request $request){

    }
    //

    /*
        * Create a instance of Author
        * @return Illuminate\http\Response
    */
    public function store(Request $request){
        
    }

    /*
        * Show a author specific
        * @return Illuminate\http\Response
    */
    public function show($author){
        
    }

    /*
        * Updata a author
        * @return Illuminate\http\Response
    */
    public function update(Request $request, $author){
        
    }

    /*
        * Remove a author 
        * @return Illuminate\http\Response
    */
    public function destroy($author){
        
    }
}
