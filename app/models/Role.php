<?php

class Role extends \Eloquent {
	protected $table = "roles";
	protected $guarded = [];

    public function users()
    {
        return $this->belongsToMany("User");
    }
}
