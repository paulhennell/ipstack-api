# IpStack API
This repo is a test of the Saloon SDK setup, using with the API from [IPstack.com](http://ipstack.com?utm_source=FirstPromoter&utm_medium=Affiliate&fpr=hennell).

It is not designed as production ready, just an working example of a basic API SDK with [Saloon](https://docs.saloon.dev/). 

It returns single ip lookups as handy php DTO classes, but has limited error handling and no support for batch IP lookups.

## Getting Started

As an example package this is not on packagist, so you need to add the repo to your composer.json:

```json
"repositories": [
    {
        "type": "vcs",
        "url": "git@github.com:paulhennell/ipstack-api.git"
    }
]
```

You can then run `composer require paulhennell/ipstack-api` to install it.

## Useage

```php 

$ipstack = new Paulhennell\IpstackApi\IpstackApi($IPStackAccessKey);

$response = $ipstack->lookup('134.201.250.155')->send();

$response->dto() // returns an IpDTO class with nested clases from src/Data

```


### Get Quota limits

Depending on the IP stack plan you're on you will have a monthly quota.
You can check your current status with some methods on any response object:

```php
$response->getQuotaLimit(); //The max requests you can make per month

$response->getQuotaRemaining(); //How many requests you have left
```

