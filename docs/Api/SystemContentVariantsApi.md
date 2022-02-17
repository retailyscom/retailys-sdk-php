# Retailys\SystemContentVariantsApi

All URIs are relative to https://api.retailys.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getVariant()**](SystemContentVariantsApi.md#getVariant) | **GET** /System/Content/Variants/{id} | Find variant by ID
[**getVariants()**](SystemContentVariantsApi.md#getVariants) | **GET** /System/Content/Variants | Get list of Variants
[**postVariants()**](SystemContentVariantsApi.md#postVariants) | **POST** /System/Content/Variants | Create new set variants
[**postVariantsIdValues()**](SystemContentVariantsApi.md#postVariantsIdValues) | **POST** /System/Content/Variants/{id}/values | Create new value in set variants by ID


## `getVariant()`

```php
getVariant($id): \Retailys\Model\VariantModel
```

Find variant by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemContentVariantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Variant ID

try {
    $result = $apiInstance->getVariant($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemContentVariantsApi->getVariant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Variant ID |

### Return type

[**\Retailys\Model\VariantModel**](../Model/VariantModel.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVariants()`

```php
getVariants($page, $perPage): \Retailys\Model\VariantsModel
```

Get list of Variants

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemContentVariantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | Page
$perPage = 56; // int | Variants per page

try {
    $result = $apiInstance->getVariants($page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemContentVariantsApi->getVariants: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page | [optional]
 **perPage** | **int**| Variants per page | [optional]

### Return type

[**\Retailys\Model\VariantsModel**](../Model/VariantsModel.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postVariants()`

```php
postVariants($variantPostRequest): \Retailys\Model\IdModel
```

Create new set variants

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemContentVariantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$variantPostRequest = new \Retailys\Model\VariantPostRequest(); // \Retailys\Model\VariantPostRequest | Set variants object that needs to be added to the retailys

try {
    $result = $apiInstance->postVariants($variantPostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemContentVariantsApi->postVariants: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **variantPostRequest** | [**\Retailys\Model\VariantPostRequest**](../Model/VariantPostRequest.md)| Set variants object that needs to be added to the retailys |

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

## `postVariantsIdValues()`

```php
postVariantsIdValues($variantIdValuePostRequest, $id): \Retailys\Model\IdModel
```

Create new value in set variants by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemContentVariantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$variantIdValuePostRequest = new \Retailys\Model\VariantIdValuePostRequest(); // \Retailys\Model\VariantIdValuePostRequest | Set variants object that needs to be added to the retailys
$id = 56; // int | Variants Set ID

try {
    $result = $apiInstance->postVariantsIdValues($variantIdValuePostRequest, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemContentVariantsApi->postVariantsIdValues: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **variantIdValuePostRequest** | [**\Retailys\Model\VariantIdValuePostRequest**](../Model/VariantIdValuePostRequest.md)| Set variants object that needs to be added to the retailys |
 **id** | **int**| Variants Set ID |

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
