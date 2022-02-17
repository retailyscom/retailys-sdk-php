# Retailys\SystemContentCategoriesApi

All URIs are relative to https://api.retailys.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCategories()**](SystemContentCategoriesApi.md#getCategories) | **GET** /System/Content/Categories | Find categories by params
[**getCategory()**](SystemContentCategoriesApi.md#getCategory) | **GET** /System/Content/Categories/{id} | Find category by ID
[**postCategory()**](SystemContentCategoriesApi.md#postCategory) | **POST** /System/Content/Categories | Create new category
[**putCategory()**](SystemContentCategoriesApi.md#putCategory) | **PUT** /System/Content/Categories | Update category


## `getCategories()`

```php
getCategories($channelId, $name, $note, $page, $perPage, $expanded): \Retailys\Model\CategoriesModel
```

Find categories by params

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemContentCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channelId = 56; // int | Channel ID
$name = 'name_example'; // string | Category name
$note = 'note_example'; // string | note
$page = 56; // int | Page
$perPage = 56; // int | Categories per page
$expanded = false; // bool | Data model expanded

try {
    $result = $apiInstance->getCategories($channelId, $name, $note, $page, $perPage, $expanded);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemContentCategoriesApi->getCategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channelId** | **int**| Channel ID | [optional]
 **name** | **string**| Category name | [optional]
 **note** | **string**| note | [optional]
 **page** | **int**| Page | [optional]
 **perPage** | **int**| Categories per page | [optional]
 **expanded** | **bool**| Data model expanded | [optional] [default to false]

### Return type

[**\Retailys\Model\CategoriesModel**](../Model/CategoriesModel.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCategory()`

```php
getCategory($id, $expanded): \Retailys\Model\CategoryModel
```

Find category by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemContentCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Category ID
$expanded = false; // bool | Data model expanded

try {
    $result = $apiInstance->getCategory($id, $expanded);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemContentCategoriesApi->getCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Category ID |
 **expanded** | **bool**| Data model expanded | [optional] [default to false]

### Return type

[**\Retailys\Model\CategoryModel**](../Model/CategoryModel.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCategory()`

```php
postCategory($categoryPostRequest)
```

Create new category

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemContentCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$categoryPostRequest = new \Retailys\Model\CategoryPostRequest(); // \Retailys\Model\CategoryPostRequest | Category object that needs to be added to the retailys

try {
    $apiInstance->postCategory($categoryPostRequest);
} catch (Exception $e) {
    echo 'Exception when calling SystemContentCategoriesApi->postCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **categoryPostRequest** | [**\Retailys\Model\CategoryPostRequest**](../Model/CategoryPostRequest.md)| Category object that needs to be added to the retailys |

### Return type

void (empty response body)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putCategory()`

```php
putCategory($categoryPutRequest)
```

Update category

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemContentCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$categoryPutRequest = new \Retailys\Model\CategoryPutRequest(); // \Retailys\Model\CategoryPutRequest | Category object that needs to be updated to the retailys

try {
    $apiInstance->putCategory($categoryPutRequest);
} catch (Exception $e) {
    echo 'Exception when calling SystemContentCategoriesApi->putCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **categoryPutRequest** | [**\Retailys\Model\CategoryPutRequest**](../Model/CategoryPutRequest.md)| Category object that needs to be updated to the retailys |

### Return type

void (empty response body)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
