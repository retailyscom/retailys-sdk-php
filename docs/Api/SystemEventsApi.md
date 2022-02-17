# Retailys\SystemEventsApi

All URIs are relative to https://api.retailys.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteEvent()**](SystemEventsApi.md#deleteEvent) | **DELETE** /System/Events/{id} | Delete Event by ID
[**getEvent()**](SystemEventsApi.md#getEvent) | **GET** /System/Events/{id} | Get Event by ID
[**getEvents()**](SystemEventsApi.md#getEvents) | **GET** /System/Events | Find Events by params
[**postEvents()**](SystemEventsApi.md#postEvents) | **POST** /System/Events | Creates a callback based on an event
[**putEvents()**](SystemEventsApi.md#putEvents) | **PUT** /System/Events | Update a callback based on an event


## `deleteEvent()`

```php
deleteEvent($id): \Retailys\Model\IdModel
```

Delete Event by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Event ID

try {
    $result = $apiInstance->deleteEvent($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemEventsApi->deleteEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Event ID |

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

## `getEvent()`

```php
getEvent($id): \Retailys\Model\EventModel
```

Get Event by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Event ID

try {
    $result = $apiInstance->getEvent($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemEventsApi->getEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Event ID |

### Return type

[**\Retailys\Model\EventModel**](../Model/EventModel.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEvents()`

```php
getEvents($page, $perPage, $path): \Retailys\Model\EventsModel
```

Find Events by params

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page
$perPage = 10; // int | Articles per page
$path = callback/order/new; // string | Event callback path

try {
    $result = $apiInstance->getEvents($page, $perPage, $path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemEventsApi->getEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page | [optional] [default to 1]
 **perPage** | **int**| Articles per page | [optional] [default to 10]
 **path** | **string**| Event callback path | [optional]

### Return type

[**\Retailys\Model\EventsModel**](../Model/EventsModel.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEvents()`

```php
postEvents($eventPostRequest): \Retailys\Model\IdModel
```

Creates a callback based on an event

<h3>Acceptable events:</h3><hr/> <table>     <thead>         <tr>             <th>Event</th>             <th>Right</th>             <th>Variables for condition</th>             <th>Variables for parameters</th>         </tr>     </thead>     <tbody>         <tr>             <td><b>article-change-availability</b></td>             <td><i>System.Content.Articles - EXECUTE</i></td>             <td>                 <ul>                     <li><b>%channelId%</b> - channel ID</li>                 </ul>             </td>             <td>                 <ul>                     <li><b>%articleId%</b> - article ID</li>                     <li><b>%channelId%</b> - channel ID</li>                 </ul>             </td>         </tr>         <tr>             <td><b>order-new</b></td>             <td><i>System.Orders.Overview - EXECUTE</i></td>             <td>                 <ul>                     <li><b>%channelId%</b> - channel ID</li>                 </ul>             </td>             <td>                 <ul>                     <li><b>%orderId%</b> - order ID</li>                     <li><b>%channelId%</b> - channel ID</li>                 </ul>             </td>         </tr>         <tr>             <td><b>order-change-status</b></td>             <td><i>System.Orders.Overview - EXECUTE</i></td>             <td>                 <ul>                     <li><b>%channelId%</b> - channel ID</li>                 </ul>             </td>             <td>                 <ul>                     <li><b>%orderId%</b> - order ID</li>                     <li><b>%statusId%</b> - order status ID</li>                     <li><b>%channelId%</b> - channel ID</li>                 </ul>             </td>         </tr>     <tr>         <td><b>user-registred</b></td>         <td><i>System.People.Overview - EXECUTE</i></td>         <td>             <ul>                 <li><b>%channelId%</b> - channel ID</li>             </ul>         </td>         <td>             <ul>                 <li><b>%userId%</b> - user ID</li>                 <li><b>%login%</b> - user login</li>                 <li><b>%link%</b> - activation link</li>                 <li><b>%channelId%</b> - channel ID</li>             </ul>         </td>     </tr>     <tr>         <td><b>user-registration-confirmed</b></td>         <td><i>System.People.Overview - EXECUTE</i></td>         <td>             <ul>                 <li><b>%channelId%</b> - channel ID</li>             </ul>         </td>         <td>             <ul>                 <li><b>%userId%</b> - user ID</li>                 <li><b>%login%</b> - user login</li>                 <li><b>%channelId%</b> - channel ID</li>             </ul>         </td>     </tr>     <tr>         <td><b>user-reset-password</b></td>         <td><i>System.People.Overview - EXECUTE</i></td>         <td>             <ul>                 <li><b>%channelId%</b> - channel ID</li>             </ul>         </td>         <td>             <ul>                 <li><b>%userId%</b> - user ID</li>                 <li><b>%login%</b> - user login</li>                 <li><b>%link%</b> - reset password link</li>                 <li><b>%channelId%</b> - channel ID</li>             </ul>         </td>     </tr>  </tbody> </table>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$eventPostRequest = new \Retailys\Model\EventPostRequest(); // \Retailys\Model\EventPostRequest | Create a callback based on an event

try {
    $result = $apiInstance->postEvents($eventPostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemEventsApi->postEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **eventPostRequest** | [**\Retailys\Model\EventPostRequest**](../Model/EventPostRequest.md)| Create a callback based on an event |

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

## `putEvents()`

```php
putEvents($eventPutRequest): \Retailys\Model\IdModel
```

Update a callback based on an event

<h3>Acceptable events:</h3><hr/>     <table>         <thead>             <tr>                 <th>Event</th>                 <th>Right</th>                 <th>Variables for condition</th>                 <th>Variables for parameters</th>             </tr>         </thead>         <tbody>             <tr>                 <td><b>article-change-availability</b></td>                 <td><i>System.Content.Articles - EXECUTE</i></td>                 <td>                     <ul>                         <li><b>%channelId%</b> - channel ID</li>                     </ul>                 </td>                 <td>                     <ul>                         <li><b>%articleId%</b> - article ID</li>                         <li><b>%channelId%</b> - channel ID</li>                     </ul>                 </td>             </tr>             <tr>                 <td><b>order-new</b></td>                 <td><i>System.Orders.Overview - EXECUTE</i></td>                 <td>                     <ul>                         <li><b>%channelId%</b> - channel ID</li>                     </ul>                 </td>                 <td>                     <ul>                         <li><b>%orderId%</b> - order ID</li>                         <li><b>%channelId%</b> - channel ID</li>                     </ul>                 </td>             </tr>             <tr>                 <td><b>order-change-status</b></td>                 <td><i>System.Orders.Overview - EXECUTE</i></td>                 <td>                     <ul>                         <li><b>%channelId%</b> - channel ID</li>                     </ul>                 </td>                 <td>                     <ul>                         <li><b>%orderId%</b> - order ID</li>                         <li><b>%statusId%</b> - order status ID</li>                         <li><b>%channelId%</b> - channel ID</li>                     </ul>                 </td>             </tr>             <tr>                 <td><b>user-registred</b></td>                 <td><i>System.People.Overview - EXECUTE</i></td>                 <td>                     <ul>                         <li><b>%channelId%</b> - channel ID</li>                     </ul>                 </td>                 <td>                     <ul>                         <li><b>%userId%</b> - user ID</li>                         <li><b>%login%</b> - user login</li>                         <li><b>%link%</b> - activation link</li>                         <li><b>%channelId%</b> - channel ID</li>                     </ul>                 </td>             </tr>             <tr>                 <td><b>user-registration-confirmed</b></td>                 <td><i>System.People.Overview - EXECUTE</i></td>                 <td>                     <ul>                         <li><b>%channelId%</b> - channel ID</li>                     </ul>                 </td>                 <td>                     <ul>                         <li><b>%userId%</b> - user ID</li>                         <li><b>%login%</b> - user login</li>                         <li><b>%channelId%</b> - channel ID</li>                     </ul>                 </td>             </tr>             <tr>                 <td><b>user-reset-password</b></td>                 <td><i>System.People.Overview - EXECUTE</i></td>                 <td>                     <ul>                         <li><b>%channelId%</b> - channel ID</li>                     </ul>                 </td>                 <td>                     <ul>                         <li><b>%userId%</b> - user ID</li>                         <li><b>%login%</b> - user login</li>                         <li><b>%link%</b> - reset password link</li>                         <li><b>%channelId%</b> - channel ID</li>                     </ul>                 </td>             </tr>         </tbody>     </table>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$eventPutRequest = new \Retailys\Model\EventPutRequest(); // \Retailys\Model\EventPutRequest | Update a callback based on an event

try {
    $result = $apiInstance->putEvents($eventPutRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemEventsApi->putEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **eventPutRequest** | [**\Retailys\Model\EventPutRequest**](../Model/EventPutRequest.md)| Update a callback based on an event |

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
