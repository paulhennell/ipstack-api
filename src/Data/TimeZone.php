<?php

namespace Paulhennell\IpstackApi\Data;

use Spatie\DataTransferObject\Attributes\Strict;
use Spatie\DataTransferObject\DataTransferObject;

#[Strict]
class TimeZone extends DataTransferObject
{
	public string $id;
	public string $current_time;
	public int $gmt_offset;
	public string $code;
	public bool $is_daylight_saving;
}
