<?php

class Post extends Eloquent {
    protected $guarded = array('id');
    protected $fillable = array('title', 'content', 'description', 'rate',
     'user_id', 'status');

    public function user()
    {
      return $this->belongsTo('User');
    }

    public static $rules = array(
      'title' => 'required|min:10',
      'content'=>'required',
      'rate'=>'min:0|max:5',
    );
}
