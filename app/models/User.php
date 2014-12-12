<?php
use Illuminate\Database\Eloquent\SeftDeletingTrait;

class User extends \Eloquent {

    use SoftDeletingTrait;
    protected $table = "users";
	protected $guarded = [];
    protected $dates = ["deleted_at"];

    public function scopeEmail()
    {
        $user = User::find(1);
        return $user;
    }
    public function post()
    {
        return $this->hasMany("Post");
    }
    public function roles()
    {
        return $this->belongsToMany("Role");
    }
    public function shared()
    {
        return $this->morphTo();
    }
}
