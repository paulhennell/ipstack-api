<?php

namespace Paulhennell\IpstackApi\Requests;

use Paulhennell\IpstackApi\IpstackApi;
use Sammyjo20\Saloon\Http\SaloonRequest;

class Request extends SaloonRequest
{
    /**
     * @var string|null
     */
    protected ?string $connector = IpstackApi::class;
}
