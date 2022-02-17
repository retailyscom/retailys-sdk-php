# Retailys\SystemListsApi

All URIs are relative to https://api.retailys.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCountries()**](SystemListsApi.md#getCountries) | **GET** /System/Lists/Countries | Returns countries list in the system.
[**getCurrencies()**](SystemListsApi.md#getCurrencies) | **GET** /System/Lists/Currencies | Returns currencies list in the system.
[**getLanguages()**](SystemListsApi.md#getLanguages) | **GET** /System/Lists/Languages | Returns languages list in the system.
[**getPaymentsProvider()**](SystemListsApi.md#getPaymentsProvider) | **GET** /System/Lists/PaymentsProviders/{id} | Find Payments Provider by ID
[**getPaymentsProviders()**](SystemListsApi.md#getPaymentsProviders) | **GET** /System/Lists/PaymentsProviders | Returns Payments Providers list in the system.
[**getShipper()**](SystemListsApi.md#getShipper) | **GET** /System/Lists/Shippers/{id} | Find shipper by ID
[**getShippers()**](SystemListsApi.md#getShippers) | **GET** /System/Lists/Shippers | Returns shippers list in the system.
[**getStoresProvider()**](SystemListsApi.md#getStoresProvider) | **GET** /System/Lists/StoresProviders/{id} | Find Stores Provider by ID
[**getStoresProviders()**](SystemListsApi.md#getStoresProviders) | **GET** /System/Lists/StoresProviders | Returns Stores Providers list in the system.


## `getCountries()`

```php
getCountries($page, $perPage): \Retailys\Model\CountriesModel
```

Returns countries list in the system.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page
$perPage = 10; // int | Countries per page

try {
    $result = $apiInstance->getCountries($page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemListsApi->getCountries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page | [optional] [default to 1]
 **perPage** | **int**| Countries per page | [optional] [default to 10]

### Return type

[**\Retailys\Model\CountriesModel**](../Model/CountriesModel.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCurrencies()`

```php
getCurrencies($page, $perPage): \Retailys\Model\CurrenciesModel
```

Returns currencies list in the system.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page
$perPage = 10; // int | Currencies per page

try {
    $result = $apiInstance->getCurrencies($page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemListsApi->getCurrencies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page | [optional] [default to 1]
 **perPage** | **int**| Currencies per page | [optional] [default to 10]

### Return type

[**\Retailys\Model\CurrenciesModel**](../Model/CurrenciesModel.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLanguages()`

```php
getLanguages($page, $perPage): \Retailys\Model\LanguagesModel
```

Returns languages list in the system.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page
$perPage = 10; // int | Languages per page

try {
    $result = $apiInstance->getLanguages($page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemListsApi->getLanguages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page | [optional] [default to 1]
 **perPage** | **int**| Languages per page | [optional] [default to 10]

### Return type

[**\Retailys\Model\LanguagesModel**](../Model/LanguagesModel.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaymentsProvider()`

```php
getPaymentsProvider($id): \Retailys\Model\PaymentsProviderModel
```

Find Payments Provider by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Payments Provider ID

try {
    $result = $apiInstance->getPaymentsProvider($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemListsApi->getPaymentsProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Payments Provider ID |

### Return type

[**\Retailys\Model\PaymentsProviderModel**](../Model/PaymentsProviderModel.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaymentsProviders()`

```php
getPaymentsProviders($page, $perPage): \Retailys\Model\PaymentsProvidersModel
```

Returns Payments Providers list in the system.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page
$perPage = 10; // int | Payments Providers per page

try {
    $result = $apiInstance->getPaymentsProviders($page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemListsApi->getPaymentsProviders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page | [optional] [default to 1]
 **perPage** | **int**| Payments Providers per page | [optional] [default to 10]

### Return type

[**\Retailys\Model\PaymentsProvidersModel**](../Model/PaymentsProvidersModel.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getShipper()`

```php
getShipper($id): \Retailys\Model\ShipperModel
```

Find shipper by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Shipper ID

try {
    $result = $apiInstance->getShipper($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemListsApi->getShipper: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Shipper ID |

### Return type

[**\Retailys\Model\ShipperModel**](../Model/ShipperModel.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getShippers()`

```php
getShippers($page, $perPage): \Retailys\Model\ShippersModel
```

Returns shippers list in the system.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page
$perPage = 10; // int | Shippers per page

try {
    $result = $apiInstance->getShippers($page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemListsApi->getShippers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page | [optional] [default to 1]
 **perPage** | **int**| Shippers per page | [optional] [default to 10]

### Return type

[**\Retailys\Model\ShippersModel**](../Model/ShippersModel.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStoresProvider()`

```php
getStoresProvider($id): \Retailys\Model\StoresProviderModel
```

Find Stores Provider by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Stores Provider ID

try {
    $result = $apiInstance->getStoresProvider($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemListsApi->getStoresProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Stores Provider ID |

### Return type

[**\Retailys\Model\StoresProviderModel**](../Model/StoresProviderModel.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStoresProviders()`

```php
getStoresProviders($page, $perPage): \Retailys\Model\StoresProvidersModel
```

Returns Stores Providers list in the system.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page
$perPage = 10; // int | Stores Providers per page

try {
    $result = $apiInstance->getStoresProviders($page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemListsApi->getStoresProviders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page | [optional] [default to 1]
 **perPage** | **int**| Stores Providers per page | [optional] [default to 10]

### Return type

[**\Retailys\Model\StoresProvidersModel**](../Model/StoresProvidersModel.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
