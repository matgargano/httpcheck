<?php

namespace HTTPCheck;

use GuzzleHttp\Client;


class Resource {

	private $client;

	public function __construct( Client $client ) {


		$this->client = $client;


	}

	public function getStatusCode( $url, $method = 'GET' ) {

		try {
			return $this->client->request( $method, $url )->getStatusCode();
		} catch ( \Exception $ex ) {

			return $ex->getCode();
		}


	}


}