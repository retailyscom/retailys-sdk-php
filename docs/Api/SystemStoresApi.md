# Retailys\SystemStoresApi

All URIs are relative to https://api.retailys.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getStore()**](SystemStoresApi.md#getStore) | **GET** /System/Stores/{id} | Find store by ID
[**getStores()**](SystemStoresApi.md#getStores) | **GET** /System/Stores | Returns stores list in the system.


## `getStore()`

```php
getStore($id, $expanded): \Retailys\Model\StoreModel
```

Find store by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemStoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Store ID
$expanded = false; // bool | Expanded data model

try {
    $result = $apiInstance->getStore($id, $expanded);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemStoresApi->getStore: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Store ID |
 **expanded** | **bool**| Expanded data model | [optional] [default to false]

### Return type

[**\Retailys\Model\StoreModel**](../Model/StoreModel.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStores()`

```php
getStores($providerId, $page, $perPage, $expanded): \Retailys\Model\StoresModel
```

Returns stores list in the system.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemStoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$providerId = 56; // int | Stores Provider ID
$page = 1; // int | Page
$perPage = 10; // int | Stores per page
$expanded = false; // bool | Expanded data model

try {
    $result = $apiInstance->getStores($providerId, $page, $perPage, $expanded);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemStoresApi->getStores: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **providerId** | **int**| Stores Provider ID | [optional]
 **page** | **int**| Page | [optional] [default to 1]
 **perPage** | **int**| Stores per page | [optional] [default to 10]
 **expanded** | **bool**| Expanded data model | [optional] [default to false]

### Return type

[**\Retailys\Model\StoresModel**](../Model/StoresModel.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
