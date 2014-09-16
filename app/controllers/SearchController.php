<?php

# import packages
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class SearchController extends BaseController {

	/**
	 * Movie search
	 */
	public function showResults()
	{
		// error handling for missing query
		if (! Input::has('q')) {
			return View::make('search.missing');
		}
			
		// build url
		$url = $this->build_rt_search_api_url( Input::get('q') );
	
		// run API call
		$json = $this->send_api_request($url);

		// decode json into assoc array
		$results_arr = json_decode($json);

		// return view
		$array = array('search_query' => Input::get('q'), 'total_results' => $results_arr->total, 'results' => $results_arr->movies );

		return View::make('search.results', $array);
	}

	/** ----------------------------------------
	 * Helper functions
	 */

	public function build_rt_search_api_url($query_string)
	{
		$api_key = "hwxdmu6pu9kjfjm2trkdwsru";

		$url = "http://api.rottentomatoes.com/api/public/v1.0/"; 
		$url = $url . "movies.json";
		$url = $url . "?apikey=" . $api_key;
		$url = $url . "&q=" . urlencode($query_string);
		$url = $url . "&page_limit=10";
		$url = $url . "&page=1";

		return $url;
	}

	public function send_api_request($api_url)
	{
		$client = new Client();

		try {
			$response = $client->get($api_url);
		} 
		catch (RequestException $e) {
			echo $e->getRequest();
		    if ($e->hasResponse()) {
		        echo $e->getResponse();
		    }
		}

		return $response->getBody();
	}
}