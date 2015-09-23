<?php

namespace HTTPCheck;

use GuzzleHttp\Client;


class Resource {

	private $client;
	private $url;
	private $method;

	public function __construct( Client $client ) {


		$this->client = $client;


	}

	private function grab() {

		try {
			return $this->client->request( $this->method, $this->url )->getStatusCode();
		} catch ( \Exception $ex ) {

			return $ex->getCode();
		}

	}

	public function getStatusCode( $url, $method = 'GET' ) {

		$this->url    = $url;
		$this->method = $method;

		return $this->grab();


	}


}