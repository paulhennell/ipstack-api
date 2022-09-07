<?php

namespace Paulhennell\IpstackApi\Data;

use Sammyjo20\Saloon\Http\SaloonResponse;
use Spatie\DataTransferObject\Attributes\Strict;
use Spatie\DataTransferObject\DataTransferObject;

#[Strict]
class IpDto extends DataTransferObject
{
	public string $ip;
	public string $type;
	public ?string $continent_code;
	public string $continent_name;
	public string $country_code;
	public string $country_name;
	public string $region_code;
	public string $region_name;
	public string $city;
	public string $zip;
	public float $latitude;
	public float $longitude;
	public Location $location;
	public TimeZone $time_zone;
	public Currency $currency;
	public Connection $connection;

    public static function fromSaloon(SaloonResponse $response) : self
    {
        $data = $response->json();

        return new static($data);
    }
}
