# Retailys\SystemContentFamiliesApi

All URIs are relative to https://api.retailys.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getFamilies()**](SystemContentFamiliesApi.md#getFamilies) | **GET** /System/Content/Families | Find families by params
[**getFamily()**](SystemContentFamiliesApi.md#getFamily) | **GET** /System/Content/Families/{id} | Find family by ID
[**postFamily()**](SystemContentFamiliesApi.md#postFamily) | **POST** /System/Content/Families | Create family
[**putFamily()**](SystemContentFamiliesApi.md#putFamily) | **PUT** /System/Content/Families | Update family


## `getFamilies()`

```php
getFamilies($page, $perPage): \Retailys\Model\FamiliesModel
```

Find families by params

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemContentFamiliesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | Page
$perPage = 56; // int | Articles per page

try {
    $result = $apiInstance->getFamilies($page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemContentFamiliesApi->getFamilies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page | [optional]
 **perPage** | **int**| Articles per page | [optional]

### Return type

[**\Retailys\Model\FamiliesModel**](../Model/FamiliesModel.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFamily()`

```php
getFamily($id): \Retailys\Model\FamilyModel
```

Find family by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemContentFamiliesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Family ID

try {
    $result = $apiInstance->getFamily($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemContentFamiliesApi->getFamily: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Family ID |

### Return type

[**\Retailys\Model\FamilyModel**](../Model/FamilyModel.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postFamily()`

```php
postFamily($familyPostRequest): \Retailys\Model\IdModel
```

Create family

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemContentFamiliesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$familyPostRequest = new \Retailys\Model\FamilyPostRequest(); // \Retailys\Model\FamilyPostRequest | Family object that needs to be added to the retailys

try {
    $result = $apiInstance->postFamily($familyPostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemContentFamiliesApi->postFamily: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **familyPostRequest** | [**\Retailys\Model\FamilyPostRequest**](../Model/FamilyPostRequest.md)| Family object that needs to be added to the retailys |

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

## `putFamily()`

```php
putFamily($familyPutRequest): \Retailys\Model\IdModel
```

Update family

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemContentFamiliesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$familyPutRequest = new \Retailys\Model\FamilyPutRequest(); // \Retailys\Model\FamilyPutRequest | Family object that needs to be updated to the retailys

try {
    $result = $apiInstance->putFamily($familyPutRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemContentFamiliesApi->putFamily: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **familyPutRequest** | [**\Retailys\Model\FamilyPutRequest**](../Model/FamilyPutRequest.md)| Family object that needs to be updated to the retailys |

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
