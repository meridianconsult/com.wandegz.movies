<?php



class ShelfController extends BaseController {

	/**
	 * Box office movies showcase
	 */
	public function showAssorted()
	{
		$url = "http://api.rottentomatoes.com/api/public/v1.0/lists/movies/box_office.json";
		$api_key = "hwxdmu6pu9kjfjm2trkdwsru";

		// Test API call
		$response = GuzzleHttp\get($url . "?apikey=" . $api_key);
		return $response->json();

		// return View::make('shelf');
	}

	/**
	 * Box office movies showcase
	 */
	public function showBoxOffice()
	{
		$url = "http://api.rottentomatoes.com/api/public/v1.0/lists/movies/box_office.json";
		$api_key = "hwxdmu6pu9kjfjm2trkdwsru";

		// Test API call
		$response = GuzzleHttp\get($url . "?apikey=" . $api_key);
		return $response->json();

		// return View::make('shelf');
	}

}