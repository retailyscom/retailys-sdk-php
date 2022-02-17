# Retailys\SystemChannelsShippingsApi

All URIs are relative to https://api.retailys.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getShipping()**](SystemChannelsShippingsApi.md#getShipping) | **GET** /System/Channels/Shippings/{shippingId} | Find shippings by ID
[**getShippings()**](SystemChannelsShippingsApi.md#getShippings) | **GET** /System/Channels/Shippings | Returns list of shippings
[**putShippings()**](SystemChannelsShippingsApi.md#putShippings) | **PUT** /System/Channels/Shippings | Update shipping


## `getShipping()`

```php
getShipping($shippingId, $expanded): \Retailys\Model\ShippingModel
```

Find shippings by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemChannelsShippingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shippingId = 1584; // int | Shipping ID
$expanded = false; // bool | Expanded data model

try {
    $result = $apiInstance->getShipping($shippingId, $expanded);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemChannelsShippingsApi->getShipping: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shippingId** | **int**| Shipping ID |
 **expanded** | **bool**| Expanded data model | [optional] [default to false]

### Return type

[**\Retailys\Model\ShippingModel**](../Model/ShippingModel.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getShippings()`

```php
getShippings($channel, $shipper, $page, $perPage, $expanded): \Retailys\Model\ShippingsModel
```

Returns list of shippings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemChannelsShippingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel = 56; // int | Channel ID
$shipper = 56; // int | Shipper ID
$page = 1; // int | Page
$perPage = 10; // int | Shippings per page
$expanded = false; // bool | Expanded data model

try {
    $result = $apiInstance->getShippings($channel, $shipper, $page, $perPage, $expanded);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemChannelsShippingsApi->getShippings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel** | **int**| Channel ID | [optional]
 **shipper** | **int**| Shipper ID | [optional]
 **page** | **int**| Page | [optional] [default to 1]
 **perPage** | **int**| Shippings per page | [optional] [default to 10]
 **expanded** | **bool**| Expanded data model | [optional] [default to false]

### Return type

[**\Retailys\Model\ShippingsModel**](../Model/ShippingsModel.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putShippings()`

```php
putShippings($shippingPutRequest): \Retailys\Model\IdModel
```

Update shipping

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemChannelsShippingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shippingPutRequest = new \Retailys\Model\ShippingPutRequest(); // \Retailys\Model\ShippingPutRequest | Shipping object that needs to be updated to the retailys

try {
    $result = $apiInstance->putShippings($shippingPutRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemChannelsShippingsApi->putShippings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shippingPutRequest** | [**\Retailys\Model\ShippingPutRequest**](../Model/ShippingPutRequest.md)| Shipping object that needs to be updated to the retailys |

### Return type

[**\Retailys\Model\IdModel**](../Model/IdModel.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
