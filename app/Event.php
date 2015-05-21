<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Model as Eloquent;

class Event extends Eloquent {

	 protected $connection = 'mongodb';
	 protected $table = 'events';

	 protected $fillable = ['start_date','end_date','event_title','description','location','category','price','event_LatLng'];

	 public function user()
	{
		return $this->belongsTo('App\User');
	}
}
