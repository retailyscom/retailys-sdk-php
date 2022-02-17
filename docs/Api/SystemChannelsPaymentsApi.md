# Retailys\SystemChannelsPaymentsApi

All URIs are relative to https://api.retailys.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getChannelsPayment()**](SystemChannelsPaymentsApi.md#getChannelsPayment) | **GET** /System/Channels/Payments/{paymentId} | Find Payment by ID
[**getChannelsPayments()**](SystemChannelsPaymentsApi.md#getChannelsPayments) | **GET** /System/Channels/Payments | Returns list of Payments for sales channels


## `getChannelsPayment()`

```php
getChannelsPayment($paymentId, $expanded): \Retailys\Model\PaymentModel
```

Find Payment by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemChannelsPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$paymentId = 56; // int | Payment ID
$expanded = false; // bool | Expanded data model

try {
    $result = $apiInstance->getChannelsPayment($paymentId, $expanded);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemChannelsPaymentsApi->getChannelsPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paymentId** | **int**| Payment ID |
 **expanded** | **bool**| Expanded data model | [optional] [default to false]

### Return type

[**\Retailys\Model\PaymentModel**](../Model/PaymentModel.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChannelsPayments()`

```php
getChannelsPayments($channel, $page, $perPage, $expanded): \Retailys\Model\PaymentsModel
```

Returns list of Payments for sales channels

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemChannelsPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel = 56; // int | Channel ID
$page = 1; // int | Page
$perPage = 10; // int | Payments per page
$expanded = false; // bool | Expanded data model

try {
    $result = $apiInstance->getChannelsPayments($channel, $page, $perPage, $expanded);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemChannelsPaymentsApi->getChannelsPayments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel** | **int**| Channel ID | [optional]
 **page** | **int**| Page | [optional] [default to 1]
 **perPage** | **int**| Payments per page | [optional] [default to 10]
 **expanded** | **bool**| Expanded data model | [optional] [default to false]

### Return type

[**\Retailys\Model\PaymentsModel**](../Model/PaymentsModel.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
