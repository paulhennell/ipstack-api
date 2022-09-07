<?php

namespace Paulhennell\IpstackApi\Exceptions;

use Sammyjo20\Saloon\Http\SaloonResponse;
use Sammyjo20\Saloon\Exceptions\SaloonRequestException;

class IpstackApiRequestException extends SaloonRequestException
{
    /**
     * Retrieve the response.
     *
     * @return SaloonResponse
     */
    public function getResponse(): SaloonResponse
    {
        return $this->getSaloonResponse();
    }
}
