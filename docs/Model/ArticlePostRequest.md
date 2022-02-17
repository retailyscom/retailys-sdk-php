# # ArticlePostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**defaultName** | **string** | Article default name. |
**state** | **string** | Article state. | [default to 'new']
**vat** | **float** | Article vat. | [default to 21]
**date** | **\DateTime** | Date of article creation. | [optional]
**manufacturerName** | **string** | Manufacturer&#39;s name. | [optional]
**manufacturerCatalogid** | **string** | Manufacturer&#39;s article identifier. | [optional]
**familyId** | **int** | Family ID. |
**measureId** | **int** | The ID of the user who created the product. | [optional]
**ean** | **string** | EAN. | [optional]
**asin** | **string** | ASIN. | [optional]
**isbn** | **string** | ISBN. | [optional]
**internalCatalogid** | **string** | Internal catalog ID. | [optional]
**weight** | **float** | Weight in kilograms | [optional]
**stockId** | **int** | Stock ID. | [optional]
**quantity** | **int** | Quantity. | [optional]
**multidata** | [**\Retailys\Model\ArticlePostRequestMultidata[]**](ArticlePostRequestMultidata.md) | Article multidata. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
