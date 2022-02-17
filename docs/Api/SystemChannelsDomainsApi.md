# Retailys\SystemChannelsDomainsApi

All URIs are relative to https://api.retailys.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getDomain()**](SystemChannelsDomainsApi.md#getDomain) | **GET** /System/Channels/Domains/{domainId} | Find domain by ID
[**getDomains()**](SystemChannelsDomainsApi.md#getDomains) | **GET** /System/Channels/Domains | Returns domains list in the instance.


## `getDomain()`

```php
getDomain($domainId): \Retailys\Model\DomainModel
```

Find domain by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemChannelsDomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domainId = 56; // int | Domain ID

try {
    $result = $apiInstance->getDomain($domainId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemChannelsDomainsApi->getDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domainId** | **int**| Domain ID |

### Return type

[**\Retailys\Model\DomainModel**](../Model/DomainModel.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDomains()`

```php
getDomains($page, $perPage): \Retailys\Model\DomainsModel
```

Returns domains list in the instance.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemChannelsDomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page
$perPage = 10; // int | Channels per page

try {
    $result = $apiInstance->getDomains($page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemChannelsDomainsApi->getDomains: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page | [optional] [default to 1]
 **perPage** | **int**| Channels per page | [optional] [default to 10]

### Return type

[**\Retailys\Model\DomainsModel**](../Model/DomainsModel.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
