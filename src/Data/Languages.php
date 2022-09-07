<?php

namespace Paulhennell\IpstackApi\Data;

use Spatie\DataTransferObject\Attributes\Strict;
use Spatie\DataTransferObject\DataTransferObject;

#[Strict]
class Languages extends DataTransferObject
{
	public string $code;
	public string $name;
	public string $native;
}
