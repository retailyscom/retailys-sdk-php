# Retailys\SystemPeopleApi

All URIs are relative to https://api.retailys.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAllPeople()**](SystemPeopleApi.md#getAllPeople) | **GET** /System/People | Return list of customer in system instance
[**getPeople()**](SystemPeopleApi.md#getPeople) | **GET** /System/People/{id} | Return customer information by ID
[**getPeopleOrders()**](SystemPeopleApi.md#getPeopleOrders) | **GET** /System/People/{id}/Orders | Returns list of Orders for People by specified ID.
[**postPeople()**](SystemPeopleApi.md#postPeople) | **POST** /System/People | Create new user or return ID existing user in sales channel


## `getAllPeople()`

```php
getAllPeople($channelId, $page, $perPage): \Retailys\Model\UsersModel
```

Return list of customer in system instance

Returns all peole from the system that the user has access to

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemPeopleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channelId = 56; // int | Channel ID
$page = 1; // int | Page
$perPage = 10; // int | Users per page

try {
    $result = $apiInstance->getAllPeople($channelId, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemPeopleApi->getAllPeople: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channelId** | **int**| Channel ID | [optional]
 **page** | **int**| Page | [optional] [default to 1]
 **perPage** | **int**| Users per page | [optional] [default to 10]

### Return type

[**\Retailys\Model\UsersModel**](../Model/UsersModel.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPeople()`

```php
getPeople($id, $expanded): \Retailys\Model\UserModel
```

Return customer information by ID

Returns detailed people information in the system according to the specified ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemPeopleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | User ID
$expanded = false; // bool | Expanded data model

try {
    $result = $apiInstance->getPeople($id, $expanded);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemPeopleApi->getPeople: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| User ID |
 **expanded** | **bool**| Expanded data model | [optional] [default to false]

### Return type

[**\Retailys\Model\UserModel**](../Model/UserModel.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPeopleOrders()`

```php
getPeopleOrders($id, $done, $canceled, $from, $to, $page, $perPage, $expanded): \Retailys\Model\OrdersModel
```

Returns list of Orders for People by specified ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemPeopleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | User ID
$done = True; // bool | Finished Orders
$canceled = True; // bool | Canceled Orders
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Orders from date (2019-12-01T08:15:30+01:00)
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Orders to date (2019-12-15T08:15:30+01:00)
$page = 1; // int | Page
$perPage = 10; // int | Orders per page (min:10 max:250)
$expanded = false; // bool | Expanded data model

try {
    $result = $apiInstance->getPeopleOrders($id, $done, $canceled, $from, $to, $page, $perPage, $expanded);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemPeopleApi->getPeopleOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| User ID |
 **done** | **bool**| Finished Orders | [optional]
 **canceled** | **bool**| Canceled Orders | [optional]
 **from** | **\DateTime**| Orders from date (2019-12-01T08:15:30+01:00) | [optional]
 **to** | **\DateTime**| Orders to date (2019-12-15T08:15:30+01:00) | [optional]
 **page** | **int**| Page | [optional] [default to 1]
 **perPage** | **int**| Orders per page (min:10 max:250) | [optional] [default to 10]
 **expanded** | **bool**| Expanded data model | [optional] [default to false]

### Return type

[**\Retailys\Model\OrdersModel**](../Model/OrdersModel.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPeople()`

```php
postPeople($userPostRequest): \Retailys\Model\IdModel
```

Create new user or return ID existing user in sales channel

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemPeopleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userPostRequest = new \Retailys\Model\UserPostRequest(); // \Retailys\Model\UserPostRequest | Create people in Retailys System

try {
    $result = $apiInstance->postPeople($userPostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemPeopleApi->postPeople: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userPostRequest** | [**\Retailys\Model\UserPostRequest**](../Model/UserPostRequest.md)| Create people in Retailys System |

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
