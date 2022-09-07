<?php

namespace Paulhennell\IpstackApi\Data;

use Spatie\DataTransferObject\Attributes\Strict;
use Spatie\DataTransferObject\DataTransferObject;

#[Strict]
class Connection extends DataTransferObject
{
	public int $asn;
	public string $isp;
}
