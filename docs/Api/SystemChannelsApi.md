# Retailys\SystemChannelsApi

All URIs are relative to https://api.retailys.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getChannel()**](SystemChannelsApi.md#getChannel) | **GET** /System/Channels/{id} | Find sale channel by ID
[**getChannels()**](SystemChannelsApi.md#getChannels) | **GET** /System/Channels | Returns sales channels list in the instance.
[**postChannelFeeds()**](SystemChannelsApi.md#postChannelFeeds) | **POST** /System/Channels/{channelId}/feeds | Create Feeds for Channel by ID
[**postChannels()**](SystemChannelsApi.md#postChannels) | **POST** /System/Channels | Create Channel


## `getChannel()`

```php
getChannel($id, $expanded): \Retailys\Model\ChannelModel
```

Find sale channel by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Channel ID
$expanded = false; // bool | Expanded data model

try {
    $result = $apiInstance->getChannel($id, $expanded);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemChannelsApi->getChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Channel ID |
 **expanded** | **bool**| Expanded data model | [optional] [default to false]

### Return type

[**\Retailys\Model\ChannelModel**](../Model/ChannelModel.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChannels()`

```php
getChannels($active, $type, $page, $perPage, $expanded): \Retailys\Model\ChannelsModel
```

Returns sales channels list in the instance.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$active = True; // bool | Active channels
$type = 'type_example'; // string | Type of Channel
$page = 1; // int | Page
$perPage = 10; // int | Channels per page (min: 10, max: 250)
$expanded = false; // bool | Expanded data model

try {
    $result = $apiInstance->getChannels($active, $type, $page, $perPage, $expanded);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemChannelsApi->getChannels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **active** | **bool**| Active channels | [optional]
 **type** | **string**| Type of Channel | [optional]
 **page** | **int**| Page | [optional] [default to 1]
 **perPage** | **int**| Channels per page (min: 10, max: 250) | [optional] [default to 10]
 **expanded** | **bool**| Expanded data model | [optional] [default to false]

### Return type

[**\Retailys\Model\ChannelsModel**](../Model/ChannelsModel.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postChannelFeeds()`

```php
postChannelFeeds($channelFeedsRequest, $channelId): \Retailys\Model\IdModel
```

Create Feeds for Channel by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channelFeedsRequest = new \Retailys\Model\ChannelFeedsRequest(); // \Retailys\Model\ChannelFeedsRequest | Create feeds for Channel
$channelId = 56; // int | Channel ID

try {
    $result = $apiInstance->postChannelFeeds($channelFeedsRequest, $channelId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemChannelsApi->postChannelFeeds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channelFeedsRequest** | [**\Retailys\Model\ChannelFeedsRequest**](../Model/ChannelFeedsRequest.md)| Create feeds for Channel |
 **channelId** | **int**| Channel ID |

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

## `postChannels()`

```php
postChannels($channelPostRequest): \Retailys\Model\IdModel
```

Create Channel

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channelPostRequest = new \Retailys\Model\ChannelPostRequest(); // \Retailys\Model\ChannelPostRequest | Create Channel

try {
    $result = $apiInstance->postChannels($channelPostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemChannelsApi->postChannels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channelPostRequest** | [**\Retailys\Model\ChannelPostRequest**](../Model/ChannelPostRequest.md)| Create Channel |

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
