<?php

class User extends \Eloquent {
    protected $table = "users";
	protected $guarded = [];

    public function scopeEmail()
    {
        $user = User::find(1);
        return $user;
    }
}
