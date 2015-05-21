<?php namespace App\Http\Controllers;

use App\Event;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Auth;
use Gmaps;

class MyEventsController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		$profile = $request->user();
		$events = Event::where('user_id','=',$profile->id)->get(); 
		
		return view('myevents.index',compact('events'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$config = array();
	    $config['center'] = 'auto';
	    $config['places'] = true;
		$config['placesAutocompleteInputID'] = 'location';
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

		return view('myevents.create',compact('map'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$event = new Event($request->all());
		Auth::user()->events()->save($event);
		
		return redirect('myevents');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$event = Event::findOrFail($id);
		return view('myevents.show',compact('event'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$event = Event::findOrFail($id);
		return view('myevents.edit',compact('event'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,Request $request)
	{
		$events = Event::findOrFail($id);
		$events->update($request->all());

		return redirect('myevents');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
