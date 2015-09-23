<?php

include __DIR__ . '/../vendor/autoload.php';

class TestResource extends \PHPUnit_Framework_TestCase {

	/**
	 * @vcr unittest_resource_200
	 */
	public function testResource200() {
		$guzzle     = new \GuzzleHttp\Client;
		$resource   = new \HTTPCheck\Resource( $guzzle );
		$statusCode = $resource->getStatusCode( 'http://httpstat.us/200' );
		$this->assertEquals( '200', $statusCode );
	}

	/**
	 * @vcr unittest_resource_201
	 */
	public function testResource201() {
		$guzzle     = new \GuzzleHttp\Client;
		$resource   = new \HTTPCheck\Resource( $guzzle );
		$statusCode = $resource->getStatusCode( 'http://httpstat.us/201' );
		$this->assertEquals( '201', $statusCode );
	}

	/**
	 * @vcr unittest_resource_202
	 */
	public function testResource202() {
		$guzzle     = new \GuzzleHttp\Client;
		$resource   = new \HTTPCheck\Resource( $guzzle );
		$statusCode = $resource->getStatusCode( 'http://httpstat.us/202' );
		$this->assertEquals( '202', $statusCode );
	}

	/**
	 * @vcr unittest_resource_203
	 */
	public function testResource203() {
		$guzzle     = new \GuzzleHttp\Client;
		$resource   = new \HTTPCheck\Resource( $guzzle );
		$statusCode = $resource->getStatusCode( 'http://httpstat.us/203' );
		$this->assertEquals( '203', $statusCode );
	}

	/**
	 * @vcr unittest_resource_204
	 */
	public function testResource204() {
		$guzzle     = new \GuzzleHttp\Client;
		$resource   = new \HTTPCheck\Resource( $guzzle );
		$statusCode = $resource->getStatusCode( 'http://httpstat.us/204' );
		$this->assertEquals( '204', $statusCode );
	}

	/**
	 * @vcr unittest_resource_205
	 */
	public function testResource205() {
		$guzzle     = new \GuzzleHttp\Client;
		$resource   = new \HTTPCheck\Resource( $guzzle );
		$statusCode = $resource->getStatusCode( 'http://httpstat.us/205' );
		$this->assertEquals( '205', $statusCode );
	}

	/**
	 * @vcr unittest_resource_206
	 */
	public function testResource206() {
		$guzzle     = new \GuzzleHttp\Client;
		$resource   = new \HTTPCheck\Resource( $guzzle );
		$statusCode = $resource->getStatusCode( 'http://httpstat.us/206' );
		$this->assertEquals( '206', $statusCode );
	}

	/**
	 * @vcr unittest_resource_300
	 */
	public function testResource300() {
		$guzzle     = new \GuzzleHttp\Client;
		$resource   = new \HTTPCheck\Resource( $guzzle );
		$statusCode = $resource->getStatusCode( 'http://httpstat.us/300' );
		$this->assertEquals( '300', $statusCode );
	}

	/**
	 * Test that a redirect returns a 200
	 * @vcr unittest_resource_301
	 */
	public function testResource301() {
		$guzzle     = new \GuzzleHttp\Client;
		$resource   = new \HTTPCheck\Resource( $guzzle );
		$statusCode = $resource->getStatusCode( 'http://httpstat.us/301' );
		$this->assertEquals( '200', $statusCode );
	}

	/**
	 * Test that a redirect returns a 200
	 * @vcr unittest_resource_302
	 */
	public function testResource302() {
		$guzzle     = new \GuzzleHttp\Client;
		$resource   = new \HTTPCheck\Resource( $guzzle );
		$statusCode = $resource->getStatusCode( 'http://httpstat.us/302' );
		$this->assertEquals( '200', $statusCode );
	}

	/**
	 * Test that a redirect returns a 200
	 * @vcr unittest_resource_303
	 */
	public function testResource303() {
		$guzzle     = new \GuzzleHttp\Client;
		$resource   = new \HTTPCheck\Resource( $guzzle );
		$statusCode = $resource->getStatusCode( 'http://httpstat.us/303' );
		$this->assertEquals( '200', $statusCode );
	}

	/**
	 * @vcr unittest_resource_304
	 */
	public function testResource304() {
		$guzzle     = new \GuzzleHttp\Client;
		$resource   = new \HTTPCheck\Resource( $guzzle );
		$statusCode = $resource->getStatusCode( 'http://httpstat.us/304' );
		$this->assertEquals( '304', $statusCode );
	}

	/**
	 * Test that a redirect returns a 200
	 * @vcr unittest_resource_305
	 */
	public function testResource305() {
		$guzzle     = new \GuzzleHttp\Client;
		$resource   = new \HTTPCheck\Resource( $guzzle );
		$statusCode = $resource->getStatusCode( 'http://httpstat.us/305' );
		$this->assertEquals( '200', $statusCode );
	}

	/**
	 * @vcr unittest_resource_306
	 */
	public function testResource306() {
		$guzzle     = new \GuzzleHttp\Client;
		$resource   = new \HTTPCheck\Resource( $guzzle );
		$statusCode = $resource->getStatusCode( 'http://httpstat.us/306' );
		$this->assertEquals( '306', $statusCode );
	}

	/**
	 * Test that a redirect returns a 200
	 * @vcr unittest_resource_307
	 */
	public function testResource307() {
		$guzzle     = new \GuzzleHttp\Client;
		$resource   = new \HTTPCheck\Resource( $guzzle );
		$statusCode = $resource->getStatusCode( 'http://httpstat.us/307' );
		$this->assertEquals( '200', $statusCode );
	}

	/**
	 * Test that a redirect returns a 200
	 * @vcr unittest_resource_308
	 */
	public function testResource308() {
		$guzzle     = new \GuzzleHttp\Client;
		$resource   = new \HTTPCheck\Resource( $guzzle );
		$statusCode = $resource->getStatusCode( 'http://httpstat.us/308' );
		$this->assertEquals( '200', $statusCode );
	}

	/**
	 * @vcr unittest_resource_400
	 */
	public function testResource400() {
		$guzzle     = new \GuzzleHttp\Client;
		$resource   = new \HTTPCheck\Resource( $guzzle );
		$statusCode = $resource->getStatusCode( 'http://httpstat.us/400' );
		$this->assertEquals( '400', $statusCode );
	}

	/**
	 * @vcr unittest_resource_401
	 */
	public function testResource401() {
		$guzzle     = new \GuzzleHttp\Client;
		$resource   = new \HTTPCheck\Resource( $guzzle );
		$statusCode = $resource->getStatusCode( 'http://httpstat.us/401' );
		$this->assertEquals( '401', $statusCode );
	}

	/**
	 * @vcr unittest_resource_402
	 */
	public function testResource402() {
		$guzzle     = new \GuzzleHttp\Client;
		$resource   = new \HTTPCheck\Resource( $guzzle );
		$statusCode = $resource->getStatusCode( 'http://httpstat.us/402' );
		$this->assertEquals( '402', $statusCode );
	}

	/**
	 * @vcr unittest_resource_403
	 */
	public function testResource403() {
		$guzzle     = new \GuzzleHttp\Client;
		$resource   = new \HTTPCheck\Resource( $guzzle );
		$statusCode = $resource->getStatusCode( 'http://httpstat.us/403' );
		$this->assertEquals( '403', $statusCode );
	}

	/**
	 * @vcr unittest_resource_404
	 */
	public function testResource404() {
		$guzzle     = new \GuzzleHttp\Client;
		$resource   = new \HTTPCheck\Resource( $guzzle );
		$statusCode = $resource->getStatusCode( 'http://httpstat.us/404' );
		$this->assertEquals( '404', $statusCode );
	}

	/**
	 * @vcr unittest_resource_405
	 */
	public function testResource405() {
		$guzzle     = new \GuzzleHttp\Client;
		$resource   = new \HTTPCheck\Resource( $guzzle );
		$statusCode = $resource->getStatusCode( 'http://httpstat.us/405' );
		$this->assertEquals( '405', $statusCode );
	}

	/**
	 * @vcr unittest_resource_406
	 */
	public function testResource406() {
		$guzzle     = new \GuzzleHttp\Client;
		$resource   = new \HTTPCheck\Resource( $guzzle );
		$statusCode = $resource->getStatusCode( 'http://httpstat.us/406' );
		$this->assertEquals( '406', $statusCode );
	}

	/**
	 * @vcr unittest_resource_407
	 */
	public function testResource407() {
		$guzzle     = new \GuzzleHttp\Client;
		$resource   = new \HTTPCheck\Resource( $guzzle );
		$statusCode = $resource->getStatusCode( 'http://httpstat.us/407' );
		$this->assertEquals( '407', $statusCode );
	}

	/**
	 * @vcr unittest_resource_408
	 */
	public function testResource408() {
		$guzzle     = new \GuzzleHttp\Client;
		$resource   = new \HTTPCheck\Resource( $guzzle );
		$statusCode = $resource->getStatusCode( 'http://httpstat.us/408' );
		$this->assertEquals( '408', $statusCode );
	}

	/**
	 * @vcr unittest_resource_409
	 */
	public function testResource409() {
		$guzzle     = new \GuzzleHttp\Client;
		$resource   = new \HTTPCheck\Resource( $guzzle );
		$statusCode = $resource->getStatusCode( 'http://httpstat.us/409' );
		$this->assertEquals( '409', $statusCode );
	}

	/**
	 * @vcr unittest_resource_410
	 */
	public function testResource410() {
		$guzzle     = new \GuzzleHttp\Client;
		$resource   = new \HTTPCheck\Resource( $guzzle );
		$statusCode = $resource->getStatusCode( 'http://httpstat.us/410' );
		$this->assertEquals( '410', $statusCode );
	}

	/**
	 * @vcr unittest_resource_411
	 */
	public function testResource411() {
		$guzzle     = new \GuzzleHttp\Client;
		$resource   = new \HTTPCheck\Resource( $guzzle );
		$statusCode = $resource->getStatusCode( 'http://httpstat.us/411' );
		$this->assertEquals( '411', $statusCode );
	}

	/**
	 * @vcr unittest_resource_412
	 */
	public function testResource412() {
		$guzzle     = new \GuzzleHttp\Client;
		$resource   = new \HTTPCheck\Resource( $guzzle );
		$statusCode = $resource->getStatusCode( 'http://httpstat.us/412' );
		$this->assertEquals( '412', $statusCode );
	}

	/**
	 * @vcr unittest_resource_413
	 */
	public function testResource413() {
		$guzzle     = new \GuzzleHttp\Client;
		$resource   = new \HTTPCheck\Resource( $guzzle );
		$statusCode = $resource->getStatusCode( 'http://httpstat.us/413' );
		$this->assertEquals( '413', $statusCode );
	}

	/**
	 * @vcr unittest_resource_414
	 */
	public function testResource414() {
		$guzzle     = new \GuzzleHttp\Client;
		$resource   = new \HTTPCheck\Resource( $guzzle );
		$statusCode = $resource->getStatusCode( 'http://httpstat.us/414' );
		$this->assertEquals( '414', $statusCode );
	}

	/**
	 * @vcr unittest_resource_415
	 */
	public function testResource415() {
		$guzzle     = new \GuzzleHttp\Client;
		$resource   = new \HTTPCheck\Resource( $guzzle );
		$statusCode = $resource->getStatusCode( 'http://httpstat.us/415' );
		$this->assertEquals( '415', $statusCode );
	}

	/**
	 * @vcr unittest_resource_416
	 */
	public function testResource416() {
		$guzzle     = new \GuzzleHttp\Client;
		$resource   = new \HTTPCheck\Resource( $guzzle );
		$statusCode = $resource->getStatusCode( 'http://httpstat.us/416' );
		$this->assertEquals( '416', $statusCode );
	}

	/**
	 * @vcr unittest_resource_417
	 */
	public function testResource417() {
		$guzzle     = new \GuzzleHttp\Client;
		$resource   = new \HTTPCheck\Resource( $guzzle );
		$statusCode = $resource->getStatusCode( 'http://httpstat.us/417' );
		$this->assertEquals( '417', $statusCode );
	}

	/**
	 * @vcr unittest_resource_418
	 */
	public function testResource418() {
		$guzzle     = new \GuzzleHttp\Client;
		$resource   = new \HTTPCheck\Resource( $guzzle );
		$statusCode = $resource->getStatusCode( 'http://httpstat.us/418' );
		$this->assertEquals( '418', $statusCode );
	}

	/**
	 * @vcr unittest_resource_422
	 */
	public function testResource422() {
		$guzzle     = new \GuzzleHttp\Client;
		$resource   = new \HTTPCheck\Resource( $guzzle );
		$statusCode = $resource->getStatusCode( 'http://httpstat.us/422' );
		$this->assertEquals( '422', $statusCode );
	}

	/**
	 * @vcr unittest_resource_428
	 */
	public function testResource428() {
		$guzzle     = new \GuzzleHttp\Client;
		$resource   = new \HTTPCheck\Resource( $guzzle );
		$statusCode = $resource->getStatusCode( 'http://httpstat.us/428' );
		$this->assertEquals( '428', $statusCode );
	}

	/**
	 * @vcr unittest_resource_429
	 */
	public function testResource429() {
		$guzzle     = new \GuzzleHttp\Client;
		$resource   = new \HTTPCheck\Resource( $guzzle );
		$statusCode = $resource->getStatusCode( 'http://httpstat.us/429' );
		$this->assertEquals( '429', $statusCode );
	}

	/**
	 * @vcr unittest_resource_431
	 */
	public function testResource431() {
		$guzzle     = new \GuzzleHttp\Client;
		$resource   = new \HTTPCheck\Resource( $guzzle );
		$statusCode = $resource->getStatusCode( 'http://httpstat.us/431' );
		$this->assertEquals( '431', $statusCode );
	}

	/**
	 * @vcr unittest_resource_500
	 */
	public function testResource500() {
		$guzzle     = new \GuzzleHttp\Client;
		$resource   = new \HTTPCheck\Resource( $guzzle );
		$statusCode = $resource->getStatusCode( 'http://httpstat.us/500' );
		$this->assertEquals( '500', $statusCode );
	}

	/**
	 * @vcr unittest_resource_501
	 */
	public function testResource501() {
		$guzzle     = new \GuzzleHttp\Client;
		$resource   = new \HTTPCheck\Resource( $guzzle );
		$statusCode = $resource->getStatusCode( 'http://httpstat.us/501' );
		$this->assertEquals( '501', $statusCode );
	}

	/**
	 * @vcr unittest_resource_502
	 */
	public function testResource502() {
		$guzzle     = new \GuzzleHttp\Client;
		$resource   = new \HTTPCheck\Resource( $guzzle );
		$statusCode = $resource->getStatusCode( 'http://httpstat.us/502' );
		$this->assertEquals( '502', $statusCode );
	}

	/**
	 * @vcr unittest_resource_503
	 */
	public function testResource503() {
		$guzzle     = new \GuzzleHttp\Client;
		$resource   = new \HTTPCheck\Resource( $guzzle );
		$statusCode = $resource->getStatusCode( 'http://httpstat.us/503' );
		$this->assertEquals( '503', $statusCode );
	}

	/**
	 * @vcr unittest_resource_504
	 */
	public function testResource504() {
		$guzzle     = new \GuzzleHttp\Client;
		$resource   = new \HTTPCheck\Resource( $guzzle );
		$statusCode = $resource->getStatusCode( 'http://httpstat.us/504' );
		$this->assertEquals( '504', $statusCode );
	}

	/**
	 * @vcr unittest_resource_505
	 */
	public function testResource505() {
		$guzzle     = new \GuzzleHttp\Client;
		$resource   = new \HTTPCheck\Resource( $guzzle );
		$statusCode = $resource->getStatusCode( 'http://httpstat.us/505' );
		$this->assertEquals( '505', $statusCode );
	}

	/**
	 * @vcr unittest_resource_511
	 */
	public function testResource511() {
		$guzzle     = new \GuzzleHttp\Client;
		$resource   = new \HTTPCheck\Resource( $guzzle );
		$statusCode = $resource->getStatusCode( 'http://httpstat.us/511' );
		$this->assertEquals( '511', $statusCode );
	}

	/**
	 * @vcr unittest_resource_520
	 */
	public function testResource520() {
		$guzzle     = new \GuzzleHttp\Client;
		$resource   = new \HTTPCheck\Resource( $guzzle );
		$statusCode = $resource->getStatusCode( 'http://httpstat.us/520' );
		$this->assertEquals( '520', $statusCode );
	}

	/**
	 * @vcr unittest_resource_522
	 */
	public function testResource522() {
		$guzzle     = new \GuzzleHttp\Client;
		$resource   = new \HTTPCheck\Resource( $guzzle );
		$statusCode = $resource->getStatusCode( 'http://httpstat.us/522' );
		$this->assertEquals( '522', $statusCode );
	}

	/**
	 * @vcr unittest_resource_524
	 */
	public function testResource524() {
		$guzzle     = new \GuzzleHttp\Client;
		$resource   = new \HTTPCheck\Resource( $guzzle );
		$statusCode = $resource->getStatusCode( 'http://httpstat.us/524' );
		$this->assertEquals( '524', $statusCode );
	}


}