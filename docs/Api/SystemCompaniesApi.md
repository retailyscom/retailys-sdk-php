# Retailys\SystemCompaniesApi

All URIs are relative to https://api.retailys.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCompanies()**](SystemCompaniesApi.md#getCompanies) | **GET** /System/Companies | Returns companies list in the system.
[**getCompany()**](SystemCompaniesApi.md#getCompany) | **GET** /System/Companies/{company-id} | Find company by ID


## `getCompanies()`

```php
getCompanies($page, $perPage): \Retailys\Model\CompaniesModel
```

Returns companies list in the system.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemCompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page
$perPage = 10; // int | Companies per page

try {
    $result = $apiInstance->getCompanies($page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemCompaniesApi->getCompanies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page | [optional] [default to 1]
 **perPage** | **int**| Companies per page | [optional] [default to 10]

### Return type

[**\Retailys\Model\CompaniesModel**](../Model/CompaniesModel.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCompany()`

```php
getCompany($companyId): \Retailys\Model\CompanyModel
```

Find company by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemCompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$companyId = 56; // int | Company ID

try {
    $result = $apiInstance->getCompany($companyId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemCompaniesApi->getCompany: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **companyId** | **int**| Company ID |

### Return type

[**\Retailys\Model\CompanyModel**](../Model/CompanyModel.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
