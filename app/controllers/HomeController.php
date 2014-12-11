<?php
use Illuminate\Hashing\HasherInterface;

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

    public function __construct(HasherInterface $hasher)
    {
        $this->hasher = $hasher;
    }
	public function index()
	{
        //$reflect = new ReflectionClass($user);
        //$users = User::all();
        //foreach ($users as $user) {
            //echo ($user->getAttributes()["email"]);
        //}
        DB::listen(function($sql){
            print_r($sql); echo "<br>"; 
        });
        $db = DB::table("users")
            ->leftJoin("comments","users.id","=","comments.id")
            ->limit(3)
            ->get();
        dd($db);
        //$username = DB::table("users")->where("username","Hellen Maggio")->pluck('username');
        //$username = DB::table("users")->select("username")->where('age','>','33')->get();
        //$log = DB::getQueryLog();
        //print_r($log);
        //dd($username);


        
	}

}
