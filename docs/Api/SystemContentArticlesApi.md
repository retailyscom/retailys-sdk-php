# Retailys\SystemContentArticlesApi

All URIs are relative to https://api.retailys.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getArticle()**](SystemContentArticlesApi.md#getArticle) | **GET** /System/Content/Articles/{id} | Find article by ID
[**getArticles()**](SystemContentArticlesApi.md#getArticles) | **GET** /System/Content/Articles | Find articles by params
[**postArticle()**](SystemContentArticlesApi.md#postArticle) | **POST** /System/Content/Articles | Create new article
[**postArticleAddVariant()**](SystemContentArticlesApi.md#postArticleAddVariant) | **POST** /System/Content/Articles/{id}/variants | Add Variant for Article by ID on Channel by ID
[**postArticleImages()**](SystemContentArticlesApi.md#postArticleImages) | **POST** /System/Content/Articles/{id}/images | Add Images for Article by ID
[**putArticle()**](SystemContentArticlesApi.md#putArticle) | **PUT** /System/Content/Articles | Update article


## `getArticle()`

```php
getArticle($id, $channelId, $expanded): \Retailys\Model\ArticleModel
```

Find article by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemContentArticlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Article ID
$channelId = 56; // int | Channel ID
$expanded = false; // bool | Data model expanded

try {
    $result = $apiInstance->getArticle($id, $channelId, $expanded);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemContentArticlesApi->getArticle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Article ID |
 **channelId** | **int**| Channel ID | [optional]
 **expanded** | **bool**| Data model expanded | [optional] [default to false]

### Return type

[**\Retailys\Model\ArticleModel**](../Model/ArticleModel.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getArticles()`

```php
getArticles($channelId, $familyId, $ean, $asin, $isbn, $internalCatalogId, $manufacturerCatalogId, $parentId, $note, $page, $perPage, $expanded): \Retailys\Model\ArticlesModel
```

Find articles by params

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemContentArticlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channelId = 56; // int | Channel ID
$familyId = 56; // int | Family ID
$ean = 'ean_example'; // string | EAN code
$asin = 'asin_example'; // string | ASIN code
$isbn = 'isbn_example'; // string | ISBN code
$internalCatalogId = 'internalCatalogId_example'; // string | Internal catalog ID
$manufacturerCatalogId = 'manufacturerCatalogId_example'; // string | Manufacture catalog ID
$parentId = 56; // int | Article parent ID
$note = 'note_example'; // string | note
$page = 1; // int | Page
$perPage = 10; // int | Articles per page
$expanded = false; // bool | Data model expanded

try {
    $result = $apiInstance->getArticles($channelId, $familyId, $ean, $asin, $isbn, $internalCatalogId, $manufacturerCatalogId, $parentId, $note, $page, $perPage, $expanded);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemContentArticlesApi->getArticles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channelId** | **int**| Channel ID | [optional]
 **familyId** | **int**| Family ID | [optional]
 **ean** | **string**| EAN code | [optional]
 **asin** | **string**| ASIN code | [optional]
 **isbn** | **string**| ISBN code | [optional]
 **internalCatalogId** | **string**| Internal catalog ID | [optional]
 **manufacturerCatalogId** | **string**| Manufacture catalog ID | [optional]
 **parentId** | **int**| Article parent ID | [optional]
 **note** | **string**| note | [optional]
 **page** | **int**| Page | [optional] [default to 1]
 **perPage** | **int**| Articles per page | [optional] [default to 10]
 **expanded** | **bool**| Data model expanded | [optional] [default to false]

### Return type

[**\Retailys\Model\ArticlesModel**](../Model/ArticlesModel.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postArticle()`

```php
postArticle($articlePostRequest): \Retailys\Model\IdMultidataModel
```

Create new article

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemContentArticlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$articlePostRequest = new \Retailys\Model\ArticlePostRequest(); // \Retailys\Model\ArticlePostRequest | Article object that needs to be added to the retailys

try {
    $result = $apiInstance->postArticle($articlePostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemContentArticlesApi->postArticle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **articlePostRequest** | [**\Retailys\Model\ArticlePostRequest**](../Model/ArticlePostRequest.md)| Article object that needs to be added to the retailys |

### Return type

[**\Retailys\Model\IdMultidataModel**](../Model/IdMultidataModel.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postArticleAddVariant()`

```php
postArticleAddVariant($articleAddVariantPostRequest, $id): \Retailys\Model\IdModel
```

Add Variant for Article by ID on Channel by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemContentArticlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$articleAddVariantPostRequest = new \Retailys\Model\ArticleAddVariantPostRequest(); // \Retailys\Model\ArticleAddVariantPostRequest | Add variant for Article
$id = 56; // int | Article ID

try {
    $result = $apiInstance->postArticleAddVariant($articleAddVariantPostRequest, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemContentArticlesApi->postArticleAddVariant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **articleAddVariantPostRequest** | [**\Retailys\Model\ArticleAddVariantPostRequest**](../Model/ArticleAddVariantPostRequest.md)| Add variant for Article |
 **id** | **int**| Article ID |

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

## `postArticleImages()`

```php
postArticleImages($articleImagesPostRequest, $id): \Retailys\Model\IdModel
```

Add Images for Article by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemContentArticlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$articleImagesPostRequest = new \Retailys\Model\ArticleImagesPostRequest(); // \Retailys\Model\ArticleImagesPostRequest | Add image for Article
$id = 56; // int | Article ID

try {
    $result = $apiInstance->postArticleImages($articleImagesPostRequest, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemContentArticlesApi->postArticleImages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **articleImagesPostRequest** | [**\Retailys\Model\ArticleImagesPostRequest**](../Model/ArticleImagesPostRequest.md)| Add image for Article |
 **id** | **int**| Article ID |

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

## `putArticle()`

```php
putArticle($articlePutRequest)
```

Update article

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = Retailys\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Retailys\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Retailys\Api\SystemContentArticlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$articlePutRequest = new \Retailys\Model\ArticlePutRequest(); // \Retailys\Model\ArticlePutRequest | Article object that needs to be updated to the retailys

try {
    $apiInstance->putArticle($articlePutRequest);
} catch (Exception $e) {
    echo 'Exception when calling SystemContentArticlesApi->putArticle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **articlePutRequest** | [**\Retailys\Model\ArticlePutRequest**](../Model/ArticlePutRequest.md)| Article object that needs to be updated to the retailys |

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
