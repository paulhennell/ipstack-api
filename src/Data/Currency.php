<?php

namespace Paulhennell\IpstackApi\Data;

use Spatie\DataTransferObject\Attributes\Strict;
use Spatie\DataTransferObject\DataTransferObject;

#[Strict]
class Currency extends DataTransferObject
{
	public string $code;
	public string $name;
	public string $plural;
	public string $symbol;
	public string $symbol_native;
}
