<?php

namespace HTTPCheck;

use GuzzleHttp\Client;


class Resource {

	private $client;

	public function __construct( Client $client ) {


		$this->client = $client;


	}

	public function getStatusCode( $url ) {

		try {
			return $this->client->head( $url )->getStatusCode();
		} catch ( \Exception $ex ) {
			if ( method_exists( $ex, 'getCode' ) ) {
				return $ex->getCode();
			}
			throw new \Exception( 'Error: ' . $ex->getMessage() );
		}


	}


}