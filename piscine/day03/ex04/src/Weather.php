<?php

namespace marcoPicheca\Weather;
use RestClient;

class Weather
{
	private $apiKey = "1a6801b05336404fbb7154821251507";
	private $city = "Florence";

	public function getTemperature()
	{
		$client = new RestClient([
			'base_url' => "http://api.weatherapi.com/v1/"
		]);

		$response = $client->get("current.json", [
			'key' => $this->apiKey,
			'q' => $this->city,
			'aqi' => 'no'
		]);

		if ($response->info->http_code !== 200)
		{
			return "Errore: " . $response->info->http_code;
		}
		$temp = $response['current']->temp_c;

		file_put_contents("weather.txt", "Temperature in {$this->city}: {$temp}°C");

		return "{$temp}°C";
	}
}

?>