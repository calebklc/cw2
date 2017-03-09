<?php

/**
 * Class JSONResponse
 */
class JSONResponse
{
	/**
	 *	JSON data format
	 */
	const JSON_FORMAT = 'json';

	/**
	 *    Set JSON header
	 */
	public static function setJSONHeader()
	{
		header('Content-Type: application/json; charset=utf-8');
	}

	/**
	 * Convert station data to JSON format
	 *
	 * @param array $stations
	 */
	public static function jsonStations($stations = [])
	{
		JSONResponse::setJSONHeader();

		$stationList = [
			'stationList' => [
				'station' => $stations,
			],
		];

		echo json_encode($stationList);
	}

	/**
	 * Convert error message to JSON format
	 *
	 * @param array $msg
	 */
	public static function jsonError($msg = [])
	{
		JSONResponse::setJSONHeader();

		$stationList = [
			'stationList' => $msg
		];

		echo json_encode($stationList);
	}
}