# Retailys\SystemOrdersApi

All URIs are relative to https://api.retailys.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteOrderItem()**](SystemOrdersApi.md#deleteOrderItem) | **DELETE** /System/Orders/{order-id}/item/{order-item-id} | Delete item in Order by ID
[**getOrder()**](SystemOrdersApi.md#getOrder) | **GET** /System/Orders/{order-id} | Find order by ID
[**getOrders()**](SystemOrdersApi.md#getOrders) | **GET** /System/Orders | Find orders by params
[**getOrdersStauses()**](SystemOrdersApi.md#getOrdersStauses) | **GET** /System/Orders/Statuses | Get All Oreder Statuses
[**patchOrderCancel()**](SystemOrdersApi.md#patchOrderCancel) | **PATCH** /System/Orders/{order-id}/cancel | Cancel order by ID
[**patchOrderDelivered()**](SystemOrdersApi.md#patchOrderDelivered) | **PATCH** /System/Orders/{order-id}/delivered | Set flag delivered on order by ID
[**patchOrderDone()**](SystemOrdersApi.md#patchOrderDone) | **PATCH** /System/Orders/{order-id}/done | Finish order by ID
[**patchOrderPaid()**](SystemOrdersApi.md#patchOrderPaid) | **PATCH** /System/Orders/{order-id}/paid | Paid order by ID
[**patchOrderSent()**](SystemOrdersApi.md#patchOrderSent) | **PATCH** /System/Orders/{order-id}/sent | Set flag sent on order by ID
[**patchOrderStatus()**](SystemOrdersApi.md#patchOrderStatus) | **PATCH** /System/Orders/{order-id}/status | Finish order by ID
[**postOrder()**](SystemOrdersApi.md#postOrder) | **POST** /System/Orders | Create new Order in system
[**postOrderHistory()**](SystemOrdersApi.md#postOrderHistory) | **POST** /System/Orders/{order-id}/history | Create new record in Order History by ID
[**postOrderItem()**](SystemOrdersApi.md#postOrderItem) | **POST** /System/Orders/{order-id}/item | Create new item in Order by ID
[**postOrderTracking()**](SystemOrdersApi.md#postOrderTracking) | **POST** /System/Orders/{order-id}/tracking | Add tracking number in Order by ID
[**putOrder()**](SystemOrdersApi.md#putOrder) | **PUT** /System/Orders | Update Order system (only delivery address)
[**putOrderItem()**](SystemOrdersApi.md#putOrderItem) | **PUT** /System/Orders/{order-id}/item | Update item in Order by ID


## `deleteOrderItem()`

```php
deleteOrderItem($orderId, $orderItemId): \Retailys\Model\IdModel
```

Delete item in Order by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderId = 56; // int | Order ID
$orderItemId = 56; // int | Order item ID

try {
    $result = $apiInstance->deleteOrderItem($orderId, $orderItemId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemOrdersApi->deleteOrderItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **int**| Order ID |
 **orderItemId** | **int**| Order item ID |

### Return type

[**\Retailys\Model\IdModel**](../Model/IdModel.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrder()`

```php
getOrder($orderId, $expanded): \Retailys\Model\OrderModel
```

Find order by ID

Returns detailed order information in the system according to the specified ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderId = 56; // int | Order ID
$expanded = false; // bool | Expanded data model

try {
    $result = $apiInstance->getOrder($orderId, $expanded);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemOrdersApi->getOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **int**| Order ID |
 **expanded** | **bool**| Expanded data model | [optional] [default to false]

### Return type

[**\Retailys\Model\OrderModel**](../Model/OrderModel.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrders()`

```php
getOrders($channelId, $companyId, $customerId, $done, $canceled, $statusId, $from, $to, $tracking, $page, $perPage, $expanded): \Retailys\Model\OrdersModel
```

Find orders by params

Returns orders list in the system.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channelId = 56; // int | Channel ID
$companyId = 56; // int | Company ID
$customerId = 56; // int | Customer ID
$done = True; // bool | Finished Orders
$canceled = True; // bool | Canceled Orders
$statusId = 56; // int | Order status ID
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Orders from date (2019-12-01T08:15:30+01:00)
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Orders to date (2019-12-15T08:15:30+01:00)
$tracking = 'tracking_example'; // string | Package tracking number
$page = 1; // int | Page
$perPage = 10; // int | Orders per page (min:10 max:250)
$expanded = false; // bool | Expanded data model

try {
    $result = $apiInstance->getOrders($channelId, $companyId, $customerId, $done, $canceled, $statusId, $from, $to, $tracking, $page, $perPage, $expanded);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemOrdersApi->getOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channelId** | **int**| Channel ID | [optional]
 **companyId** | **int**| Company ID | [optional]
 **customerId** | **int**| Customer ID | [optional]
 **done** | **bool**| Finished Orders | [optional]
 **canceled** | **bool**| Canceled Orders | [optional]
 **statusId** | **int**| Order status ID | [optional]
 **from** | **\DateTime**| Orders from date (2019-12-01T08:15:30+01:00) | [optional]
 **to** | **\DateTime**| Orders to date (2019-12-15T08:15:30+01:00) | [optional]
 **tracking** | **string**| Package tracking number | [optional]
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

## `getOrdersStauses()`

```php
getOrdersStauses($page, $perPage): \Retailys\Model\OrderStatusesModel
```

Get All Oreder Statuses

Returns orders statuses list in the system.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page
$perPage = 10; // int | Orders per page (min:10 max:250)

try {
    $result = $apiInstance->getOrdersStauses($page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemOrdersApi->getOrdersStauses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page | [optional] [default to 1]
 **perPage** | **int**| Orders per page (min:10 max:250) | [optional] [default to 10]

### Return type

[**\Retailys\Model\OrderStatusesModel**](../Model/OrderStatusesModel.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchOrderCancel()`

```php
patchOrderCancel($orderId): \Retailys\Model\OrderModel
```

Cancel order by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderId = 56; // int | Order ID

try {
    $result = $apiInstance->patchOrderCancel($orderId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemOrdersApi->patchOrderCancel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **int**| Order ID |

### Return type

[**\Retailys\Model\OrderModel**](../Model/OrderModel.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchOrderDelivered()`

```php
patchOrderDelivered($orderId): \Retailys\Model\OrderModel
```

Set flag delivered on order by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderId = 56; // int | Order ID

try {
    $result = $apiInstance->patchOrderDelivered($orderId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemOrdersApi->patchOrderDelivered: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **int**| Order ID |

### Return type

[**\Retailys\Model\OrderModel**](../Model/OrderModel.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchOrderDone()`

```php
patchOrderDone($orderId): \Retailys\Model\OrderModel
```

Finish order by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderId = 56; // int | Order ID

try {
    $result = $apiInstance->patchOrderDone($orderId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemOrdersApi->patchOrderDone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **int**| Order ID |

### Return type

[**\Retailys\Model\OrderModel**](../Model/OrderModel.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchOrderPaid()`

```php
patchOrderPaid($orderPaidPatchRequest, $orderId): \Retailys\Model\OrderModel
```

Paid order by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderPaidPatchRequest = new \Retailys\Model\OrderPaidPatchRequest(); // \Retailys\Model\OrderPaidPatchRequest | Update Order status
$orderId = 56; // int | Order ID

try {
    $result = $apiInstance->patchOrderPaid($orderPaidPatchRequest, $orderId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemOrdersApi->patchOrderPaid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderPaidPatchRequest** | [**\Retailys\Model\OrderPaidPatchRequest**](../Model/OrderPaidPatchRequest.md)| Update Order status |
 **orderId** | **int**| Order ID |

### Return type

[**\Retailys\Model\OrderModel**](../Model/OrderModel.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchOrderSent()`

```php
patchOrderSent($orderId): \Retailys\Model\OrderModel
```

Set flag sent on order by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderId = 56; // int | Order ID

try {
    $result = $apiInstance->patchOrderSent($orderId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemOrdersApi->patchOrderSent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **int**| Order ID |

### Return type

[**\Retailys\Model\OrderModel**](../Model/OrderModel.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchOrderStatus()`

```php
patchOrderStatus($orderStatusPatchRequest, $orderId): \Retailys\Model\OrderModel
```

Finish order by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderStatusPatchRequest = new \Retailys\Model\OrderStatusPatchRequest(); // \Retailys\Model\OrderStatusPatchRequest | Update Order status
$orderId = 56; // int | Order ID

try {
    $result = $apiInstance->patchOrderStatus($orderStatusPatchRequest, $orderId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemOrdersApi->patchOrderStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderStatusPatchRequest** | [**\Retailys\Model\OrderStatusPatchRequest**](../Model/OrderStatusPatchRequest.md)| Update Order status |
 **orderId** | **int**| Order ID |

### Return type

[**\Retailys\Model\OrderModel**](../Model/OrderModel.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postOrder()`

```php
postOrder($orderPostRequest): \Retailys\Model\IdModel
```

Create new Order in system

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderPostRequest = new \Retailys\Model\OrderPostRequest(); // \Retailys\Model\OrderPostRequest | Create Order in Retailys System

try {
    $result = $apiInstance->postOrder($orderPostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemOrdersApi->postOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderPostRequest** | [**\Retailys\Model\OrderPostRequest**](../Model/OrderPostRequest.md)| Create Order in Retailys System |

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

## `postOrderHistory()`

```php
postOrderHistory($historyPostRequest, $orderId): \Retailys\Model\IdModel
```

Create new record in Order History by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$historyPostRequest = new \Retailys\Model\HistoryPostRequest(); // \Retailys\Model\HistoryPostRequest | Create History record in Retailys System
$orderId = 56; // int | Order ID

try {
    $result = $apiInstance->postOrderHistory($historyPostRequest, $orderId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemOrdersApi->postOrderHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **historyPostRequest** | [**\Retailys\Model\HistoryPostRequest**](../Model/HistoryPostRequest.md)| Create History record in Retailys System |
 **orderId** | **int**| Order ID |

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

## `postOrderItem()`

```php
postOrderItem($orderPostRequest, $orderId): \Retailys\Model\IdModel
```

Create new item in Order by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderPostRequest = new \Retailys\Model\OrderPostRequest(); // \Retailys\Model\OrderPostRequest | Create Order in Retailys System
$orderId = 56; // int | Order ID

try {
    $result = $apiInstance->postOrderItem($orderPostRequest, $orderId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemOrdersApi->postOrderItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderPostRequest** | [**\Retailys\Model\OrderPostRequest**](../Model/OrderPostRequest.md)| Create Order in Retailys System |
 **orderId** | **int**| Order ID |

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

## `postOrderTracking()`

```php
postOrderTracking($trackingPostRequest, $orderId): \Retailys\Model\IdModel
```

Add tracking number in Order by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$trackingPostRequest = new \Retailys\Model\TrackingPostRequest(); // \Retailys\Model\TrackingPostRequest | Create Tracking Number in Order
$orderId = 56; // int | Order ID

try {
    $result = $apiInstance->postOrderTracking($trackingPostRequest, $orderId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemOrdersApi->postOrderTracking: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **trackingPostRequest** | [**\Retailys\Model\TrackingPostRequest**](../Model/TrackingPostRequest.md)| Create Tracking Number in Order |
 **orderId** | **int**| Order ID |

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

## `putOrder()`

```php
putOrder($orderPutRequest): \Retailys\Model\IdModel
```

Update Order system (only delivery address)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderPutRequest = new \Retailys\Model\OrderPutRequest(); // \Retailys\Model\OrderPutRequest | Update Order in Retailys System

try {
    $result = $apiInstance->putOrder($orderPutRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemOrdersApi->putOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderPutRequest** | [**\Retailys\Model\OrderPutRequest**](../Model/OrderPutRequest.md)| Update Order in Retailys System |

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

## `putOrderItem()`

```php
putOrderItem($orderPostRequest, $orderId): \Retailys\Model\IdModel
```

Update item in Order by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderPostRequest = new \Retailys\Model\OrderPostRequest(); // \Retailys\Model\OrderPostRequest | Create Order in Retailys System
$orderId = 56; // int | Order ID

try {
    $result = $apiInstance->putOrderItem($orderPostRequest, $orderId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemOrdersApi->putOrderItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderPostRequest** | [**\Retailys\Model\OrderPostRequest**](../Model/OrderPostRequest.md)| Create Order in Retailys System |
 **orderId** | **int**| Order ID |

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
