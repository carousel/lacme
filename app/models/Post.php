<?php

class Post extends \Eloquent {
	protected $table = "posts";
	protected $guarded = [];

    public function user()
    {
        return $this->belongsTo("User");
    }
    public function users()
    {
        return $this->morphMany("User","shared");
    }
}
