<?php

namespace Paulhennell\IpstackApi\Data;

use Spatie\DataTransferObject\Attributes\Strict;
use Spatie\DataTransferObject\DataTransferObject;

#[Strict]
class Location extends DataTransferObject
{
	public ?int $geoname_id;
	public string $capital;

	/** @var \hennell\IpstackApi\Data\Languages[] $languages */
	public array $languages;
	public string $country_flag;
	public string $country_flag_emoji;
	public string $country_flag_emoji_unicode;
	public string $calling_code;
	public bool $is_eu;
}
