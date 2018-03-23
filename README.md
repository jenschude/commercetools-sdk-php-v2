# Commercetools

Client and Request Builder for making API requests against [Commercetools](https://api.sphere.io).

## Installation

```sh
composer require  commercetools/raml-php-sdk
```

## Usage

```php
namespace Commercetools;

require_once __DIR__ . '/vendor/autoload.php';

$client = ClientFactory::create();
```

### Authentication

#### OAuth 2.0

This API supports authentication with OAuth 2.0. Initialize the `OAuth2` instance with the application client id and client secret.

```php
$config = new Config();
$config->getCredentials()->setClientId(<client_id>)->setClientSecret(<client_secret>);

$client = ClientFactory::create($config);
```

#### Base URI

You can override the base URI by setting the `baseUri` property, or initializing a request builder with a base URI. For example:

```php
$config = new Config();
$config->setApiUrl('http://google.com/search']);
```

### RequestBuilder

In order to be able to build request objects you can use the RequestBuilder

```php
$builder = new RequestBuilder();
```

### Mapper

To map the result data you can use the ResultMapper

```php

$mapper = new ResultMapper(new ModelClassMap());
$request = $builder->withProjectKeyValue()->get();

$response = $client->send($request);

// use one of the following possibilities
$result = $request->map($response, $mapper);
$result = $mapper->map($request, $response);
$result = $mapper->mapData(Project::class, json_decode((string)$response->getBody(), true));
```


### RequestBuilder

Detailed information can be found [here](lib/README.md#requestbuilder)


## License

MIT
