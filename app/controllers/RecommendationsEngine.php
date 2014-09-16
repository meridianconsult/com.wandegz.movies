<?php

/**
 *	This class manages movie recommendations
 */
class RecommendationsEngine extends BaseController {

	public function showPopular()
	{
		return View::make('recommend.popular');
	}

	public function showBoxOffice()
	{
		$url = "http://api.rottentomatoes.com/api/public/v1.0.json";
		$api_key = "hwxdmu6pu9kjfjm2trkdwsru";

		// Test API call
		$response = GuzzleHttp\get($url . "?apikey=" . $api_key);
		return $response->json();

		// return View::make('recommend.boxoffice');
	}

}