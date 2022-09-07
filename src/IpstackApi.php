<?php

namespace Paulhennell\IpstackApi;

use Paulhennell\IpstackApi\Requests\LookupIpRequest;
use Paulhennell\IpstackApi\Responses\IpstackApiResponse;
use Sammyjo20\Saloon\Http\SaloonConnector;
use Sammyjo20\Saloon\Traits\Plugins\AcceptsJson;
use Paulhennell\IpstackApi\Requests\ExampleRequestCollection;

/**
 * @method ExampleRequestCollection example
 */
class IpstackApi extends SaloonConnector
{
    use AcceptsJson;

    /**
     * Define the base URL for the API
     *
     * @var string
     */
    protected string $apiBaseUrl = 'https://api.ipstack.com/';

    /**
     * The Access key from ipstack.com
     *
     * @var string
     */
    protected string $accessKey;

    /**
     * Custom response that all requests will return.
     *
     * @var string|null
     */
    protected ?string $response = IpstackApiResponse::class;

    /**
     * The requests/services on the IpstackApi.
     *
     * @var array
     */
    protected array $requests = [
        'example' => ExampleRequestCollection::class,
        'lookup' => LookupIpRequest::class,
    ];

    /**
     * Define the base URL of the API.
     *
     * @return string
     */
    public function defineBaseUrl(): string
    {
        return $this->apiBaseUrl;
    }

    /**
     * @param string|null $baseUrl
     */
    public function __construct(string $apikey, string $baseUrl = null)
    {
        $this->accessKey = $apikey;
        if (isset($baseUrl)) {
            $this->apiBaseUrl = $baseUrl;
        }
    }

    /**
     * Define any default headers.
     *
     * @return array
     */
    public function defaultHeaders(): array
    {
        return [];
    }

    /**
     * Define any default config.
     *
     * @return array
     */
    public function defaultConfig(): array
    {
        return [];
    }

    public function defaultQuery() : array
    {
        return [
            'access_key' => $this->accessKey
        ];
    }
}
