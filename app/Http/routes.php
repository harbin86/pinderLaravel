<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\User;

Route::get('signin',function()
{
	return Socialize::with('facebook')->redirect();
});

Route::get('callback',function()
{
	 $fbUser = Socialize::with('facebook')->user();
	 $user = User::whereName($fbUser->getName())->first();
	 if(!$user)
	 {
	 	$user = new User;
	 	$user->name = $fbUser->getName();
	 	$user->email = $fbUser->getEmail();
	 	$user->profile_pic = $fbUser->getAvatar();
	 	$user->save();
	 }
	 Auth::loginUsingId($user->id);
	 return redirect('events');
	 // dd($user);
});

// Route::get('/', 'WelcomeController@index');

Route::get('/map', function(){
    $config = array();
    $config['center'] = 'auto';
    $config['places'] = true;
	$config['placesAutocompleteInputID'] = 'myPlaceTextBox';
	$config['placesAutocompleteBoundsMap'] = true; // set results biased towards the maps viewport
	$config['placesAutocompleteOnChange'] = 'var place = placesAutocomplete.getPlace();
        var location = place.geometry.location;

         map.setCenter(location);
            var mapCentre = map.getCenter();
            marker_0.setOptions({
                position: new google.maps.LatLng(mapCentre.lat(), mapCentre.lng())
            });

        updateDatabase(location);
        // alert(JSON.stringify(location))';


    Gmaps::initialize($config);

    // set up the marker ready for positioning
    // once we know the users location
    $marker = array();
    Gmaps::add_marker($marker);

    $map = Gmaps::create_map();

    return view('/map',compact('map'));
    // echo "<html><head><script type='text/javascript'>var centreGot = false;</script>".$map['js']."</head><body><input type='text' id='myPlaceTextBox' />".$map['html']."<script>document.write(event.latLng.lat())</script></body></html>";
});

Route::post('/map', function(){
	//
});

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::resource('myevents','MyEventsController');

Route::resource('events','EventsController',
                ['only' => ['index', 'show']]);



Route::resource('people', 'PeopleController',
                ['only' => ['index', 'show']]);

Route::resource('profile', 'ProfileController',
                ['only' => ['index', 'edit','update']]);

// Route::get('profile','ProfileController@index');
// Route::get('profile/edit','ProfileController@edit');
// Route::post('profile','ProfileController@update');
