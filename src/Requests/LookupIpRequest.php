<?php

namespace Paulhennell\IpstackApi\Requests;

use Paulhennell\IpstackApi\Data\IpDto;
use Paulhennell\IpstackApi\IpstackApi;
use Sammyjo20\Saloon\Constants\Saloon;
use Sammyjo20\Saloon\Http\SaloonRequest;
use Sammyjo20\Saloon\Http\SaloonResponse;
use Sammyjo20\Saloon\Traits\Plugins\CastsToDto;

class LookupIpRequest extends SaloonRequest
{
    use CastsToDto;
    /**
     * @var string|null
     */
    protected ?string $connector = IpstackApi::class;

    protected string $ipaddress = '';

    protected ?string $method = Saloon::GET;

    public function defineEndpoint() : string
    {
        return "$this->ipaddress";
    }

    public function __construct(string $ipaddress)
    {
        $this->ipaddress = $ipaddress;
    }

    protected function castToDto(SaloonResponse $response): mixed
    {
        return IpDto::fromSaloon($response);
    }
}
