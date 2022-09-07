<?php

namespace Paulhennell\IpstackApi\Responses;

use Sammyjo20\Saloon\Http\SaloonResponse;
use Paulhennell\IpstackApi\Exceptions\IpstackApiRequestException;

class IpstackApiResponse extends SaloonResponse
{
    /**
     * Create an exception if a server or client error occurred.
     *
     * @return void|IpstackApiRequestException
     */
    public function toException()
    {
        if ($this->failed()) {
            $body = $this->response?->getBody()?->getContents();

            return new IpstackApiRequestException($this, $body, 0, $this->getGuzzleException());
        }
    }

    public function getQuotaLimit()
    {
        return $this->header("x-quota-limit");
    }

    public function getQuotaRemaining()
    {
        return $this->header("x-quota-remaining");
    }
}
