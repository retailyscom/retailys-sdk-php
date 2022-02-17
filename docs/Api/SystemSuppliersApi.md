# Retailys\SystemSuppliersApi

All URIs are relative to https://api.retailys.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSupplier()**](SystemSuppliersApi.md#getSupplier) | **GET** /System/Suppliers/{id} | Find Supplier by ID
[**getSuppliers()**](SystemSuppliersApi.md#getSuppliers) | **GET** /System/Suppliers | Returns list of Suppliers in the instance.


## `getSupplier()`

```php
getSupplier($id): \Retailys\Model\SupplierModel
```

Find Supplier by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemSuppliersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Supplier ID

try {
    $result = $apiInstance->getSupplier($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemSuppliersApi->getSupplier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Supplier ID |

### Return type

[**\Retailys\Model\SupplierModel**](../Model/SupplierModel.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSuppliers()`

```php
getSuppliers($page, $perPage): \Retailys\Model\SuppliersModel
```

Returns list of Suppliers in the instance.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemSuppliersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page
$perPage = 10; // int | Channels per page

try {
    $result = $apiInstance->getSuppliers($page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemSuppliersApi->getSuppliers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page | [optional] [default to 1]
 **perPage** | **int**| Channels per page | [optional] [default to 10]

### Return type

[**\Retailys\Model\SuppliersModel**](../Model/SuppliersModel.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
