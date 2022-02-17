# # ArticleModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | ID. | [optional]
**parent** | [**OneOfNonExpandedModelArticleModel**](OneOfNonExpandedModelArticleModel.md) | Parent Article. | [optional]
**master** | **bool** | Is Master Article. | [optional]
**defaultName** | **string** | Article default name. | [optional]
**state** | **string** | Article state. | [optional]
**countryOfOrigin** | **string** | Article country of origin. | [optional]
**vat** | **float** | Article vat. | [optional]
**user** | [**AnyOfNonExpandedModelUserModel**](AnyOfNonExpandedModelUserModel.md) | User. | [optional]
**date** | **\DateTime** | Date of article creation. | [optional]
**manufacturerName** | **string** | Manufacturer&#39;s name. | [optional]
**manufacturerCatalogid** | **string** | Manufacturer&#39;s article identifier. | [optional]
**note** | **string** | Article note. | [optional]
**family** | [**OneOfNonExpandedModelFamilyModel**](OneOfNonExpandedModelFamilyModel.md) | Family of the article. | [optional]
**idents** | [**\Retailys\Model\IdentModel[]**](IdentModel.md) |  | [optional]
**thumbnail** | **string** | Article thumbnail. | [optional]
**weight** | **float** | Article weight in kilogram. | [optional]
**sourceImages** | [**\Retailys\Model\ArticleModelSourceImages[]**](ArticleModelSourceImages.md) | Article source images. | [optional]
**variant** | [**\Retailys\Model\ArticleModelVariant[]**](ArticleModelVariant.md) | Article Variant Set and Value. | [optional]
**multidata** | [**\Retailys\Model\MultiDataModel[]**](MultiDataModel.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
