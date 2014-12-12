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
        //User::destroy([1,2,5]);
        DB::listen(function($sql){
            print_r($sql); echo "<br>"; 
        });
        //$user = Post::find(3)->user;
        //dd($user->username);

        $post = Post::find(1);
        foreach ($post->users as $p) {
            return $p . "<hr>";
        }
        //$users = Role::find(1)->users;
        //foreach ($users as $user) {
            //echo $user->email . "<br>";
        //$user = User::find(1);
        //$roles = $user->roles;
        //foreach ($roles as $role) {
            //echo $role->role . " " . $user->username . "<br>";
        //}
        //$user->delete();
        //User::withTrashed()->where("id",3)->restore();
        //$users = User::all();
        //foreach ($users as $user) {
            //echo $user->email . "<br>";
        //}
        //$schema = Schema::getColumnListing("users");
        //dd($schema);
        //dd($user->trashed());
        //foreach ($wt as $w) {
            //echo $w->email;
        //}
        //$user->touch();
        //dd(User::firstOrCreate(["username"=>"miro"]));
        //$db = DB::table("users")
            //->leftJoin("comments","users.id","=","comments.id")
            //->limit(3)
            //->get();
        //dd($db);
        //$username = DB::table("users")->where("username","Hellen Maggio")->pluck('username');
        //$username = DB::table("users")->select("username")->where('age','>','33')->get();
        //$log = DB::getQueryLog();
        //print_r($log);
        //dd($username);


        
	}

}
