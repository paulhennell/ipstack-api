<?php

namespace Paulhennell\IpstackApi\Responses;

use Sammyjo20\Saloon\Http\SaloonResponse;
use Paulhennell\IpstackApi\Exceptions\IpstackApiRequestException;

class IpstackApiResponse extends SaloonResponse
{
    /**
     * Create an exception if a server or client error occurred.
     *
     * @return IpstackApiRequestException
     */
    public function toException(): IpstackApiRequestException
    {
        if ($this->failed()) {
            $body = $this->response?->getBody()?->getContents();

            return new IpstackApiRequestException($this, $body, 0, $this->getGuzzleException());
        }
    }
}
