# RetailysClient

Communication API restful e-commerce system Retailys. Get access in system at [https://www.retailys.com](https://www.retailys.com)<h1>Introduction</h1>**Retailys API** allows to create an amazing ecosystem of e-commerce services and help to develop robust webshops and other e-commerce solutions. Thanks to many built-in omnichannel and multichannel principles, every developer has possibility tu use **Retailys API** for creating vast global e-commerce applications easily and effectively.

For more information, please visit [https://www.retailys.com](https://www.retailys.com).

## Installation & Usage

### Requirements

PHP 7.3 and later.
Should also work with PHP 8.0 but has not been tested.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/retailyscom/retailys-sdk-php.git"
    }
  ],
  "require": {
    "retailyscom/retailys-sdk-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/RetailysClient/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *https://api.retailys.com/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*SystemChannelsApi* | [**getChannel**](docs/Api/SystemChannelsApi.md#getchannel) | **GET** /System/Channels/{id} | Find sale channel by ID
*SystemChannelsApi* | [**getChannels**](docs/Api/SystemChannelsApi.md#getchannels) | **GET** /System/Channels | Returns sales channels list in the instance.
*SystemChannelsApi* | [**postChannelFeeds**](docs/Api/SystemChannelsApi.md#postchannelfeeds) | **POST** /System/Channels/{channelId}/feeds | Create Feeds for Channel by ID
*SystemChannelsApi* | [**postChannels**](docs/Api/SystemChannelsApi.md#postchannels) | **POST** /System/Channels | Create Channel
*SystemChannelsDomainsApi* | [**getDomain**](docs/Api/SystemChannelsDomainsApi.md#getdomain) | **GET** /System/Channels/Domains/{domainId} | Find domain by ID
*SystemChannelsDomainsApi* | [**getDomains**](docs/Api/SystemChannelsDomainsApi.md#getdomains) | **GET** /System/Channels/Domains | Returns domains list in the instance.
*SystemChannelsPaymentsApi* | [**getChannelsPayment**](docs/Api/SystemChannelsPaymentsApi.md#getchannelspayment) | **GET** /System/Channels/Payments/{paymentId} | Find Payment by ID
*SystemChannelsPaymentsApi* | [**getChannelsPayments**](docs/Api/SystemChannelsPaymentsApi.md#getchannelspayments) | **GET** /System/Channels/Payments | Returns list of Payments for sales channels
*SystemChannelsShippingsApi* | [**getShipping**](docs/Api/SystemChannelsShippingsApi.md#getshipping) | **GET** /System/Channels/Shippings/{shippingId} | Find shippings by ID
*SystemChannelsShippingsApi* | [**getShippings**](docs/Api/SystemChannelsShippingsApi.md#getshippings) | **GET** /System/Channels/Shippings | Returns list of shippings
*SystemChannelsShippingsApi* | [**putShippings**](docs/Api/SystemChannelsShippingsApi.md#putshippings) | **PUT** /System/Channels/Shippings | Update shipping
*SystemCompaniesApi* | [**getCompanies**](docs/Api/SystemCompaniesApi.md#getcompanies) | **GET** /System/Companies | Returns companies list in the system.
*SystemCompaniesApi* | [**getCompany**](docs/Api/SystemCompaniesApi.md#getcompany) | **GET** /System/Companies/{company-id} | Find company by ID
*SystemContentArticlesApi* | [**getArticle**](docs/Api/SystemContentArticlesApi.md#getarticle) | **GET** /System/Content/Articles/{id} | Find article by ID
*SystemContentArticlesApi* | [**getArticles**](docs/Api/SystemContentArticlesApi.md#getarticles) | **GET** /System/Content/Articles | Find articles by params
*SystemContentArticlesApi* | [**postArticle**](docs/Api/SystemContentArticlesApi.md#postarticle) | **POST** /System/Content/Articles | Create new article
*SystemContentArticlesApi* | [**postArticleAddVariant**](docs/Api/SystemContentArticlesApi.md#postarticleaddvariant) | **POST** /System/Content/Articles/{id}/variants | Add Variant for Article by ID on Channel by ID
*SystemContentArticlesApi* | [**postArticleImages**](docs/Api/SystemContentArticlesApi.md#postarticleimages) | **POST** /System/Content/Articles/{id}/images | Add Images for Article by ID
*SystemContentArticlesApi* | [**putArticle**](docs/Api/SystemContentArticlesApi.md#putarticle) | **PUT** /System/Content/Articles | Update article
*SystemContentCategoriesApi* | [**getCategories**](docs/Api/SystemContentCategoriesApi.md#getcategories) | **GET** /System/Content/Categories | Find categories by params
*SystemContentCategoriesApi* | [**getCategory**](docs/Api/SystemContentCategoriesApi.md#getcategory) | **GET** /System/Content/Categories/{id} | Find category by ID
*SystemContentCategoriesApi* | [**postCategory**](docs/Api/SystemContentCategoriesApi.md#postcategory) | **POST** /System/Content/Categories | Create new category
*SystemContentCategoriesApi* | [**putCategory**](docs/Api/SystemContentCategoriesApi.md#putcategory) | **PUT** /System/Content/Categories | Update category
*SystemContentFamiliesApi* | [**getFamilies**](docs/Api/SystemContentFamiliesApi.md#getfamilies) | **GET** /System/Content/Families | Find families by params
*SystemContentFamiliesApi* | [**getFamily**](docs/Api/SystemContentFamiliesApi.md#getfamily) | **GET** /System/Content/Families/{id} | Find family by ID
*SystemContentFamiliesApi* | [**postFamily**](docs/Api/SystemContentFamiliesApi.md#postfamily) | **POST** /System/Content/Families | Create family
*SystemContentFamiliesApi* | [**putFamily**](docs/Api/SystemContentFamiliesApi.md#putfamily) | **PUT** /System/Content/Families | Update family
*SystemContentVariantsApi* | [**getVariant**](docs/Api/SystemContentVariantsApi.md#getvariant) | **GET** /System/Content/Variants/{id} | Find variant by ID
*SystemContentVariantsApi* | [**getVariants**](docs/Api/SystemContentVariantsApi.md#getvariants) | **GET** /System/Content/Variants | Get list of Variants
*SystemContentVariantsApi* | [**postVariants**](docs/Api/SystemContentVariantsApi.md#postvariants) | **POST** /System/Content/Variants | Create new set variants
*SystemContentVariantsApi* | [**postVariantsIdValues**](docs/Api/SystemContentVariantsApi.md#postvariantsidvalues) | **POST** /System/Content/Variants/{id}/values | Create new value in set variants by ID
*SystemEventsApi* | [**deleteEvent**](docs/Api/SystemEventsApi.md#deleteevent) | **DELETE** /System/Events/{id} | Delete Event by ID
*SystemEventsApi* | [**getEvent**](docs/Api/SystemEventsApi.md#getevent) | **GET** /System/Events/{id} | Get Event by ID
*SystemEventsApi* | [**getEvents**](docs/Api/SystemEventsApi.md#getevents) | **GET** /System/Events | Find Events by params
*SystemEventsApi* | [**postEvents**](docs/Api/SystemEventsApi.md#postevents) | **POST** /System/Events | Creates a callback based on an event
*SystemEventsApi* | [**putEvents**](docs/Api/SystemEventsApi.md#putevents) | **PUT** /System/Events | Update a callback based on an event
*SystemLayoutsAdminApi* | [**deleteAdminContentArticlesEditChannelsTab**](docs/Api/SystemLayoutsAdminApi.md#deleteadmincontentarticleseditchannelstab) | **DELETE** /System/Layouts/Admin/Content/Articles/Edit/Channels/Tabs/{id} | Delete Tab on System -&gt; Content -&gt; Articles -&gt; Edit -&gt; Channels by ID
*SystemLayoutsAdminApi* | [**deleteAdminContentCategoriesEditDynamicSnippet**](docs/Api/SystemLayoutsAdminApi.md#deleteadmincontentcategorieseditdynamicsnippet) | **DELETE** /System/Layouts/Admin/Content/Categories/Edit/DynamicSnippets/{id} | Delete Dynamic Snippet by ID
*SystemLayoutsAdminApi* | [**deleteAdminContentCategoriesEditStaticSnippet**](docs/Api/SystemLayoutsAdminApi.md#deleteadmincontentcategorieseditstaticsnippet) | **DELETE** /System/Layouts/Admin/Content/Categories/Edit/StaticSnippets/{id} | Delete Static Snippet by ID
*SystemLayoutsAdminApi* | [**deleteApplicationsConfigTab**](docs/Api/SystemLayoutsAdminApi.md#deleteapplicationsconfigtab) | **DELETE** /System/Layouts/Admin/Applications/Config/Tabs/{id} | Delete Applications Config Tab by ID
*SystemLayoutsAdminApi* | [**deleteChannelsEditTab**](docs/Api/SystemLayoutsAdminApi.md#deletechannelsedittab) | **DELETE** /System/Layouts/Admin/Channels/Edit/Tabs/{id} | Delete Applications Config Tab by ID
*SystemLayoutsAdminApi* | [**deleteDashboardBlock**](docs/Api/SystemLayoutsAdminApi.md#deletedashboardblock) | **DELETE** /System/Layouts/Admin/Dashboard/Blocks/{id} | Delete Block on System Dashboard by ID
*SystemLayoutsAdminApi* | [**deleteOrdersNotificationsBlock**](docs/Api/SystemLayoutsAdminApi.md#deleteordersnotificationsblock) | **DELETE** /System/Layouts/Admin/Orders/Notifications/Blocks/{id} | Delete Block on System Orders Notifications by ID
*SystemLayoutsAdminApi* | [**deleteOrdersOverviewAction**](docs/Api/SystemLayoutsAdminApi.md#deleteordersoverviewaction) | **DELETE** /System/Layouts/Admin/Orders/Overview/Actions/{id} | Delete Action by ID
*SystemLayoutsAdminApi* | [**deleteOrdersOverviewBlock**](docs/Api/SystemLayoutsAdminApi.md#deleteordersoverviewblock) | **DELETE** /System/Layouts/Admin/Orders/Overview/Blocks/{id} | Delete Block on System Orders Overview by ID
*SystemLayoutsAdminApi* | [**getAdminContentArticlesEditChannelsTab**](docs/Api/SystemLayoutsAdminApi.md#getadmincontentarticleseditchannelstab) | **GET** /System/Layouts/Admin/Content/Articles/Edit/Channels/Tabs/{id} | Find Tab on System -&gt; Content -&gt; Articles -&gt; Edit -&gt; Channels by ID
*SystemLayoutsAdminApi* | [**getAdminContentArticlesEditChannelsTabs**](docs/Api/SystemLayoutsAdminApi.md#getadmincontentarticleseditchannelstabs) | **GET** /System/Layouts/Admin/Content/Articles/Edit/Channels/Tabs | Find Tab on System -&gt; Content -&gt; Articles -&gt; Edit -&gt; Channels by parameters
*SystemLayoutsAdminApi* | [**getAdminContentCategoriesEditDynamicSnippet**](docs/Api/SystemLayoutsAdminApi.md#getadmincontentcategorieseditdynamicsnippet) | **GET** /System/Layouts/Admin/Content/Categories/Edit/DynamicSnippets/{id} | Get Dynamic Snippet by ID
*SystemLayoutsAdminApi* | [**getAdminContentCategoriesEditDynamicSnippets**](docs/Api/SystemLayoutsAdminApi.md#getadmincontentcategorieseditdynamicsnippets) | **GET** /System/Layouts/Admin/Content/Categories/Edit/DynamicSnippets | Find Dynamic Snippet by params
*SystemLayoutsAdminApi* | [**getAdminContentCategoriesEditStaticSnippet**](docs/Api/SystemLayoutsAdminApi.md#getadmincontentcategorieseditstaticsnippet) | **GET** /System/Layouts/Admin/Content/Categories/Edit/StaticSnippets/{id} | Get Static Snippet by ID
*SystemLayoutsAdminApi* | [**getAdminContentCategoriesEditStaticSnippets**](docs/Api/SystemLayoutsAdminApi.md#getadmincontentcategorieseditstaticsnippets) | **GET** /System/Layouts/Admin/Content/Categories/Edit/StaticSnippets | Find Static Snippet by params
*SystemLayoutsAdminApi* | [**getApplicationsConfigTab**](docs/Api/SystemLayoutsAdminApi.md#getapplicationsconfigtab) | **GET** /System/Layouts/Admin/Applications/Config/Tabs/{id} | Find Applications Config Tab by ID
*SystemLayoutsAdminApi* | [**getApplicationsConfigTabs**](docs/Api/SystemLayoutsAdminApi.md#getapplicationsconfigtabs) | **GET** /System/Layouts/Admin/Applications/Config/Tabs | Find Applications Config Tab by params
*SystemLayoutsAdminApi* | [**getChannelsEditTab**](docs/Api/SystemLayoutsAdminApi.md#getchannelsedittab) | **GET** /System/Layouts/Admin/Channels/Edit/Tabs/{id} | Find Applications Config Tab by ID
*SystemLayoutsAdminApi* | [**getChannelsEditTabs**](docs/Api/SystemLayoutsAdminApi.md#getchannelsedittabs) | **GET** /System/Layouts/Admin/Channels/Edit/Tabs | Find Applications Config Tab by params
*SystemLayoutsAdminApi* | [**getDashboardBlock**](docs/Api/SystemLayoutsAdminApi.md#getdashboardblock) | **GET** /System/Layouts/Admin/Dashboard/Blocks/{id} | Find Block on System Dashboard by ID
*SystemLayoutsAdminApi* | [**getDashboardBlocks**](docs/Api/SystemLayoutsAdminApi.md#getdashboardblocks) | **GET** /System/Layouts/Admin/Dashboard/Blocks | Find Block on System Dashboard by parameters
*SystemLayoutsAdminApi* | [**getOrdersNotificationsBlock**](docs/Api/SystemLayoutsAdminApi.md#getordersnotificationsblock) | **GET** /System/Layouts/Admin/Orders/Notifications/Blocks/{id} | Find Block on System Dashboard by ID
*SystemLayoutsAdminApi* | [**getOrdersNotificationsBlocks**](docs/Api/SystemLayoutsAdminApi.md#getordersnotificationsblocks) | **GET** /System/Layouts/Admin/Orders/Notifications/Blocks | Find Block on System Orders Notifications by parameters
*SystemLayoutsAdminApi* | [**getOrdersOverviewAction**](docs/Api/SystemLayoutsAdminApi.md#getordersoverviewaction) | **GET** /System/Layouts/Admin/Orders/Overview/Actions/{id} | Get Action by ID
*SystemLayoutsAdminApi* | [**getOrdersOverviewActions**](docs/Api/SystemLayoutsAdminApi.md#getordersoverviewactions) | **GET** /System/Layouts/Admin/Orders/Overview/Actions | Find Actions by params
*SystemLayoutsAdminApi* | [**getOrdersOverviewBlock**](docs/Api/SystemLayoutsAdminApi.md#getordersoverviewblock) | **GET** /System/Layouts/Admin/Orders/Overview/Blocks/{id} | Find Block on System Dashboard by ID
*SystemLayoutsAdminApi* | [**getOrdersOverviewBlocks**](docs/Api/SystemLayoutsAdminApi.md#getordersoverviewblocks) | **GET** /System/Layouts/Admin/Orders/Overview/Blocks | Find Block on System Orders Overview by parameters
*SystemLayoutsAdminApi* | [**postAdminContentArticlesEditChannelsTabs**](docs/Api/SystemLayoutsAdminApi.md#postadmincontentarticleseditchannelstabs) | **POST** /System/Layouts/Admin/Content/Articles/Edit/Channels/Tabs | Create Tab on System -&gt; Content -&gt; Articles -&gt; Edit -&gt; Channels
*SystemLayoutsAdminApi* | [**postAdminContentCategoriesEditDynamicSnippets**](docs/Api/SystemLayoutsAdminApi.md#postadmincontentcategorieseditdynamicsnippets) | **POST** /System/Layouts/Admin/Content/Categories/Edit/DynamicSnippets | Create Dynamic Snippet in Administration Category Edit
*SystemLayoutsAdminApi* | [**postAdminContentCategoriesEditDynamicSnippets_0**](docs/Api/SystemLayoutsAdminApi.md#postadmincontentcategorieseditdynamicsnippets_0) | **POST** /System/Layouts/Admin/Content/Categories/Edit/DynamicSnippets | Create Dynamic Snippet in Administration Category Edit
*SystemLayoutsAdminApi* | [**postAdminContentCategoriesEditStaticSnippets**](docs/Api/SystemLayoutsAdminApi.md#postadmincontentcategorieseditstaticsnippets) | **POST** /System/Layouts/Admin/Content/Categories/Edit/StaticSnippets | Create Static Snippet in Administration Category Edit
*SystemLayoutsAdminApi* | [**postAdminContentCategoriesEditStaticSnippets_0**](docs/Api/SystemLayoutsAdminApi.md#postadmincontentcategorieseditstaticsnippets_0) | **POST** /System/Layouts/Admin/Content/Categories/Edit/StaticSnippets | Create Static Snippet in Administration Category Edit
*SystemLayoutsAdminApi* | [**postApplicationsConfigTabs**](docs/Api/SystemLayoutsAdminApi.md#postapplicationsconfigtabs) | **POST** /System/Layouts/Admin/Applications/Config/Tabs | Create tab on Applications Configuration
*SystemLayoutsAdminApi* | [**postChannelsEditTabs**](docs/Api/SystemLayoutsAdminApi.md#postchannelsedittabs) | **POST** /System/Layouts/Admin/Channels/Edit/Tabs | Create tab on Channels Configuration
*SystemLayoutsAdminApi* | [**postDashboardBlocks**](docs/Api/SystemLayoutsAdminApi.md#postdashboardblocks) | **POST** /System/Layouts/Admin/Dashboard/Blocks | Create Block on System Dashboard
*SystemLayoutsAdminApi* | [**postDashboardBlocks_0**](docs/Api/SystemLayoutsAdminApi.md#postdashboardblocks_0) | **POST** /System/Layouts/Admin/Dashboard/Blocks | Create Block on System Dashboard
*SystemLayoutsAdminApi* | [**postOrdersNotificationsBlocks**](docs/Api/SystemLayoutsAdminApi.md#postordersnotificationsblocks) | **POST** /System/Layouts/Admin/Orders/Notifications/Blocks | Create Block on System Orders Notifications
*SystemLayoutsAdminApi* | [**postOrdersOverviewActions**](docs/Api/SystemLayoutsAdminApi.md#postordersoverviewactions) | **POST** /System/Layouts/Admin/Orders/Overview/Actions | Create Action in Administratin Orders Overview
*SystemLayoutsAdminApi* | [**postOrdersOverviewBlocks**](docs/Api/SystemLayoutsAdminApi.md#postordersoverviewblocks) | **POST** /System/Layouts/Admin/Orders/Overview/Blocks | Create Block on System Orders Overview
*SystemLayoutsAdminApi* | [**putAdminContentArticlesEditChannelsTabs**](docs/Api/SystemLayoutsAdminApi.md#putadmincontentarticleseditchannelstabs) | **PUT** /System/Layouts/Admin/Content/Articles/Edit/Channels/Tabs | Update Tab on System -&gt; Content -&gt; Articles -&gt; Edit -&gt; Channels
*SystemLayoutsAdminApi* | [**putAdminContentCategoriesEditDynamicSnippets**](docs/Api/SystemLayoutsAdminApi.md#putadmincontentcategorieseditdynamicsnippets) | **PUT** /System/Layouts/Admin/Content/Categories/Edit/DynamicSnippets | Update Dynamic Snippet in Administration Category Edit
*SystemLayoutsAdminApi* | [**putAdminContentCategoriesEditStaticSnippets**](docs/Api/SystemLayoutsAdminApi.md#putadmincontentcategorieseditstaticsnippets) | **PUT** /System/Layouts/Admin/Content/Categories/Edit/StaticSnippets | Update Static Snippet in Administration Category Edit
*SystemLayoutsAdminApi* | [**putApplicationsConfigTabs**](docs/Api/SystemLayoutsAdminApi.md#putapplicationsconfigtabs) | **PUT** /System/Layouts/Admin/Applications/Config/Tabs | Update Tab on Applications Configuration
*SystemLayoutsAdminApi* | [**putChannelsEditTabs**](docs/Api/SystemLayoutsAdminApi.md#putchannelsedittabs) | **PUT** /System/Layouts/Admin/Channels/Edit/Tabs | Update Tab on Applications Configuration
*SystemLayoutsAdminApi* | [**putDashboardBlocks**](docs/Api/SystemLayoutsAdminApi.md#putdashboardblocks) | **PUT** /System/Layouts/Admin/Dashboard/Blocks | Update Block on system dashboard
*SystemLayoutsAdminApi* | [**putOrdersNotificationsBlocks**](docs/Api/SystemLayoutsAdminApi.md#putordersnotificationsblocks) | **PUT** /System/Layouts/Admin/Orders/Notifications/Blocks | Update Block on system Orders Notifications
*SystemLayoutsAdminApi* | [**putOrdersOverviewActions**](docs/Api/SystemLayoutsAdminApi.md#putordersoverviewactions) | **PUT** /System/Layouts/Admin/Orders/Overview/Actions | Update Action in Administratin Orders Overview
*SystemLayoutsAdminApi* | [**putOrdersOverviewBlocks**](docs/Api/SystemLayoutsAdminApi.md#putordersoverviewblocks) | **PUT** /System/Layouts/Admin/Orders/Overview/Blocks | Update Block on system Orders Overview
*SystemLayoutsEshopApi* | [**deleteEshopLayoutStaticSnippet**](docs/Api/SystemLayoutsEshopApi.md#deleteeshoplayoutstaticsnippet) | **DELETE** /System/Layouts/Eshop/Layout/StaticSnippets/{id} | Delete Static Snippet by ID
*SystemLayoutsEshopApi* | [**deleteEshopShoppingCartCheckoutCallback**](docs/Api/SystemLayoutsEshopApi.md#deleteeshopshoppingcartcheckoutcallback) | **DELETE** /System/Layouts/Eshop/ShoppingCart/Checkout/Callbacks/{id} | Delete Callback by ID
*SystemLayoutsEshopApi* | [**deleteEshopShoppingCartCheckoutStaticSnippet**](docs/Api/SystemLayoutsEshopApi.md#deleteeshopshoppingcartcheckoutstaticsnippet) | **DELETE** /System/Layouts/Eshop/ShoppingCart/Checkout/StaticSnippets/{id} | Delete Static Snippet by ID
*SystemLayoutsEshopApi* | [**deleteEshopShoppingCartMenuItem**](docs/Api/SystemLayoutsEshopApi.md#deleteeshopshoppingcartmenuitem) | **DELETE** /System/Layouts/Eshop/ShoppingCart/MenuItems/{id} | Delete Static Snippet by ID
*SystemLayoutsEshopApi* | [**deleteEshopShoppingCartStaticSnippet**](docs/Api/SystemLayoutsEshopApi.md#deleteeshopshoppingcartstaticsnippet) | **DELETE** /System/Layouts/Eshop/ShoppingCart/StaticSnippets/{id} | Delete Static Snippet by ID
*SystemLayoutsEshopApi* | [**deleteEshopShoppingCartThankyouDynamicSnippet**](docs/Api/SystemLayoutsEshopApi.md#deleteeshopshoppingcartthankyoudynamicsnippet) | **DELETE** /System/Layouts/Eshop/ShoppingCart/Thankyou/DynamicSnippets/{id} | Delete Dynamic Snippet by ID
*SystemLayoutsEshopApi* | [**deleteEshopShoppingCartThankyouStaticSnippet**](docs/Api/SystemLayoutsEshopApi.md#deleteeshopshoppingcartthankyoustaticsnippet) | **DELETE** /System/Layouts/Eshop/ShoppingCart/Thankyou/StaticSnippets/{id} | Delete Static Snippet by ID
*SystemLayoutsEshopApi* | [**eshopLayoutStaticSnippet**](docs/Api/SystemLayoutsEshopApi.md#eshoplayoutstaticsnippet) | **GET** /System/Layouts/Eshop/Layout/StaticSnippets/{id} | Get Static Snippet by ID
*SystemLayoutsEshopApi* | [**getEshopLayoutStaticSnippets**](docs/Api/SystemLayoutsEshopApi.md#geteshoplayoutstaticsnippets) | **GET** /System/Layouts/Eshop/Layout/StaticSnippets | Find Static Snippet by params
*SystemLayoutsEshopApi* | [**getEshopShoppingCartCheckoutCallback**](docs/Api/SystemLayoutsEshopApi.md#geteshopshoppingcartcheckoutcallback) | **GET** /System/Layouts/Eshop/ShoppingCart/Checkout/Callbacks/{id} | Get Callback by ID
*SystemLayoutsEshopApi* | [**getEshopShoppingCartCheckoutCallbacks**](docs/Api/SystemLayoutsEshopApi.md#geteshopshoppingcartcheckoutcallbacks) | **GET** /System/Layouts/Eshop/ShoppingCart/Checkout/Callbacks | Find Callbacks by params
*SystemLayoutsEshopApi* | [**getEshopShoppingCartCheckoutStaticSnippet**](docs/Api/SystemLayoutsEshopApi.md#geteshopshoppingcartcheckoutstaticsnippet) | **GET** /System/Layouts/Eshop/ShoppingCart/Checkout/StaticSnippets/{id} | Get Static Snippet by ID
*SystemLayoutsEshopApi* | [**getEshopShoppingCartCheckoutStaticSnippets**](docs/Api/SystemLayoutsEshopApi.md#geteshopshoppingcartcheckoutstaticsnippets) | **GET** /System/Layouts/Eshop/ShoppingCart/Checkout/StaticSnippets | Find Static Snippet by params
*SystemLayoutsEshopApi* | [**getEshopShoppingCartMenuItem**](docs/Api/SystemLayoutsEshopApi.md#geteshopshoppingcartmenuitem) | **GET** /System/Layouts/Eshop/ShoppingCart/MenuItems/{id} | Get Menu Item append by ID
*SystemLayoutsEshopApi* | [**getEshopShoppingCartMenuItems**](docs/Api/SystemLayoutsEshopApi.md#geteshopshoppingcartmenuitems) | **GET** /System/Layouts/Eshop/ShoppingCart/MenuItems | Find Menu Items by params
*SystemLayoutsEshopApi* | [**getEshopShoppingCartStaticSnippet**](docs/Api/SystemLayoutsEshopApi.md#geteshopshoppingcartstaticsnippet) | **GET** /System/Layouts/Eshop/ShoppingCart/StaticSnippets/{id} | Get Static Snippet by ID
*SystemLayoutsEshopApi* | [**getEshopShoppingCartStaticSnippets**](docs/Api/SystemLayoutsEshopApi.md#geteshopshoppingcartstaticsnippets) | **GET** /System/Layouts/Eshop/ShoppingCart/StaticSnippets | Find Static Snippet by params
*SystemLayoutsEshopApi* | [**getEshopShoppingCartThankyouDynamicSnippet**](docs/Api/SystemLayoutsEshopApi.md#geteshopshoppingcartthankyoudynamicsnippet) | **GET** /System/Layouts/Eshop/ShoppingCart/Thankyou/DynamicSnippets/{id} | Get Dynamic Snippet by ID
*SystemLayoutsEshopApi* | [**getEshopShoppingCartThankyouDynamicSnippets**](docs/Api/SystemLayoutsEshopApi.md#geteshopshoppingcartthankyoudynamicsnippets) | **GET** /System/Layouts/Eshop/ShoppingCart/Thankyou/DynamicSnippets | Find Dynamic Snippet by params
*SystemLayoutsEshopApi* | [**getEshopShoppingCartThankyouStaticSnippet**](docs/Api/SystemLayoutsEshopApi.md#geteshopshoppingcartthankyoustaticsnippet) | **GET** /System/Layouts/Eshop/ShoppingCart/Thankyou/StaticSnippets/{id} | Get Static Snippet by ID
*SystemLayoutsEshopApi* | [**getEshopShoppingCartThankyouStaticSnippets**](docs/Api/SystemLayoutsEshopApi.md#geteshopshoppingcartthankyoustaticsnippets) | **GET** /System/Layouts/Eshop/ShoppingCart/Thankyou/StaticSnippets | Find Static Snippet by params
*SystemLayoutsEshopApi* | [**postEshopLayoutStaticSnippets**](docs/Api/SystemLayoutsEshopApi.md#posteshoplayoutstaticsnippets) | **POST** /System/Layouts/Eshop/Layout/StaticSnippets | Create Static Snippet in Eshop Layout
*SystemLayoutsEshopApi* | [**postEshopShoppingCartCheckoutCallbacks**](docs/Api/SystemLayoutsEshopApi.md#posteshopshoppingcartcheckoutcallbacks) | **POST** /System/Layouts/Eshop/ShoppingCart/Checkout/Callbacks | Create Callback in Eshop Shopping Cart Checkout
*SystemLayoutsEshopApi* | [**postEshopShoppingCartCheckoutStaticSnippets**](docs/Api/SystemLayoutsEshopApi.md#posteshopshoppingcartcheckoutstaticsnippets) | **POST** /System/Layouts/Eshop/ShoppingCart/Checkout/StaticSnippets | Create Static Snippet in Eshop Shopping Cart
*SystemLayoutsEshopApi* | [**postEshopShoppingCartMenuItems**](docs/Api/SystemLayoutsEshopApi.md#posteshopshoppingcartmenuitems) | **POST** /System/Layouts/Eshop/ShoppingCart/MenuItems | Create Menu Item append in Eshop Shopping Cart
*SystemLayoutsEshopApi* | [**postEshopShoppingCartStaticSnippets**](docs/Api/SystemLayoutsEshopApi.md#posteshopshoppingcartstaticsnippets) | **POST** /System/Layouts/Eshop/ShoppingCart/StaticSnippets | Create Static Snippet in Eshop Shopping Cart
*SystemLayoutsEshopApi* | [**postEshopShoppingCartThankyouDynamicSnippets**](docs/Api/SystemLayoutsEshopApi.md#posteshopshoppingcartthankyoudynamicsnippets) | **POST** /System/Layouts/Eshop/ShoppingCart/Thankyou/DynamicSnippets | Create Dynamic Snippet in Eshop Shopping Cart
*SystemLayoutsEshopApi* | [**postEshopShoppingCartThankyouStaticSnippets**](docs/Api/SystemLayoutsEshopApi.md#posteshopshoppingcartthankyoustaticsnippets) | **POST** /System/Layouts/Eshop/ShoppingCart/Thankyou/StaticSnippets | Create Static Snippet in Eshop Shopping Cart
*SystemLayoutsEshopApi* | [**putEshopLayoutStaticSnippets**](docs/Api/SystemLayoutsEshopApi.md#puteshoplayoutstaticsnippets) | **PUT** /System/Layouts/Eshop/Layout/StaticSnippets | Update Static Snippet in Eshop Layout
*SystemLayoutsEshopApi* | [**putEshopShoppingCartCheckoutCallbacks**](docs/Api/SystemLayoutsEshopApi.md#puteshopshoppingcartcheckoutcallbacks) | **PUT** /System/Layouts/Eshop/ShoppingCart/Checkout/Callbacks | Update Callback in Eshop Shopping Cart Checkout
*SystemLayoutsEshopApi* | [**putEshopShoppingCartCheckoutStaticSnippets**](docs/Api/SystemLayoutsEshopApi.md#puteshopshoppingcartcheckoutstaticsnippets) | **PUT** /System/Layouts/Eshop/ShoppingCart/Checkout/StaticSnippets | Update Static Snippet in Eshop Shopping Cart
*SystemLayoutsEshopApi* | [**putEshopShoppingCartMenuItems**](docs/Api/SystemLayoutsEshopApi.md#puteshopshoppingcartmenuitems) | **PUT** /System/Layouts/Eshop/ShoppingCart/MenuItems | Update Menu Item append in Eshop Shopping Cart
*SystemLayoutsEshopApi* | [**putEshopShoppingCartStaticSnippets**](docs/Api/SystemLayoutsEshopApi.md#puteshopshoppingcartstaticsnippets) | **PUT** /System/Layouts/Eshop/ShoppingCart/StaticSnippets | Update Static Snippet in Eshop Shopping Cart
*SystemLayoutsEshopApi* | [**putEshopShoppingCartThankyouDynamicSnippets**](docs/Api/SystemLayoutsEshopApi.md#puteshopshoppingcartthankyoudynamicsnippets) | **PUT** /System/Layouts/Eshop/ShoppingCart/Thankyou/DynamicSnippets | Update Dynamic Snippet in Eshop Shopping Cart
*SystemLayoutsEshopApi* | [**putEshopShoppingCartThankyouStaticSnippets**](docs/Api/SystemLayoutsEshopApi.md#puteshopshoppingcartthankyoustaticsnippets) | **PUT** /System/Layouts/Eshop/ShoppingCart/Thankyou/StaticSnippets | Update Static Snippet in Eshop Shopping Cart
*SystemListsApi* | [**getCountries**](docs/Api/SystemListsApi.md#getcountries) | **GET** /System/Lists/Countries | Returns countries list in the system.
*SystemListsApi* | [**getCurrencies**](docs/Api/SystemListsApi.md#getcurrencies) | **GET** /System/Lists/Currencies | Returns currencies list in the system.
*SystemListsApi* | [**getLanguages**](docs/Api/SystemListsApi.md#getlanguages) | **GET** /System/Lists/Languages | Returns languages list in the system.
*SystemListsApi* | [**getPaymentsProvider**](docs/Api/SystemListsApi.md#getpaymentsprovider) | **GET** /System/Lists/PaymentsProviders/{id} | Find Payments Provider by ID
*SystemListsApi* | [**getPaymentsProviders**](docs/Api/SystemListsApi.md#getpaymentsproviders) | **GET** /System/Lists/PaymentsProviders | Returns Payments Providers list in the system.
*SystemListsApi* | [**getShipper**](docs/Api/SystemListsApi.md#getshipper) | **GET** /System/Lists/Shippers/{id} | Find shipper by ID
*SystemListsApi* | [**getShippers**](docs/Api/SystemListsApi.md#getshippers) | **GET** /System/Lists/Shippers | Returns shippers list in the system.
*SystemListsApi* | [**getStoresProvider**](docs/Api/SystemListsApi.md#getstoresprovider) | **GET** /System/Lists/StoresProviders/{id} | Find Stores Provider by ID
*SystemListsApi* | [**getStoresProviders**](docs/Api/SystemListsApi.md#getstoresproviders) | **GET** /System/Lists/StoresProviders | Returns Stores Providers list in the system.
*SystemMeApi* | [**getMe**](docs/Api/SystemMeApi.md#getme) | **GET** /System/Me | About actual logged user.
*SystemOrdersApi* | [**deleteOrderItem**](docs/Api/SystemOrdersApi.md#deleteorderitem) | **DELETE** /System/Orders/{order-id}/item/{order-item-id} | Delete item in Order by ID
*SystemOrdersApi* | [**getOrder**](docs/Api/SystemOrdersApi.md#getorder) | **GET** /System/Orders/{order-id} | Find order by ID
*SystemOrdersApi* | [**getOrders**](docs/Api/SystemOrdersApi.md#getorders) | **GET** /System/Orders | Find orders by params
*SystemOrdersApi* | [**getOrdersStauses**](docs/Api/SystemOrdersApi.md#getordersstauses) | **GET** /System/Orders/Statuses | Get All Oreder Statuses
*SystemOrdersApi* | [**patchOrderCancel**](docs/Api/SystemOrdersApi.md#patchordercancel) | **PATCH** /System/Orders/{order-id}/cancel | Cancel order by ID
*SystemOrdersApi* | [**patchOrderDelivered**](docs/Api/SystemOrdersApi.md#patchorderdelivered) | **PATCH** /System/Orders/{order-id}/delivered | Set flag delivered on order by ID
*SystemOrdersApi* | [**patchOrderDone**](docs/Api/SystemOrdersApi.md#patchorderdone) | **PATCH** /System/Orders/{order-id}/done | Finish order by ID
*SystemOrdersApi* | [**patchOrderPaid**](docs/Api/SystemOrdersApi.md#patchorderpaid) | **PATCH** /System/Orders/{order-id}/paid | Paid order by ID
*SystemOrdersApi* | [**patchOrderSent**](docs/Api/SystemOrdersApi.md#patchordersent) | **PATCH** /System/Orders/{order-id}/sent | Set flag sent on order by ID
*SystemOrdersApi* | [**patchOrderStatus**](docs/Api/SystemOrdersApi.md#patchorderstatus) | **PATCH** /System/Orders/{order-id}/status | Finish order by ID
*SystemOrdersApi* | [**postOrder**](docs/Api/SystemOrdersApi.md#postorder) | **POST** /System/Orders | Create new Order in system
*SystemOrdersApi* | [**postOrderHistory**](docs/Api/SystemOrdersApi.md#postorderhistory) | **POST** /System/Orders/{order-id}/history | Create new record in Order History by ID
*SystemOrdersApi* | [**postOrderItem**](docs/Api/SystemOrdersApi.md#postorderitem) | **POST** /System/Orders/{order-id}/item | Create new item in Order by ID
*SystemOrdersApi* | [**postOrderTracking**](docs/Api/SystemOrdersApi.md#postordertracking) | **POST** /System/Orders/{order-id}/tracking | Add tracking number in Order by ID
*SystemOrdersApi* | [**putOrder**](docs/Api/SystemOrdersApi.md#putorder) | **PUT** /System/Orders | Update Order system (only delivery address)
*SystemOrdersApi* | [**putOrderItem**](docs/Api/SystemOrdersApi.md#putorderitem) | **PUT** /System/Orders/{order-id}/item | Update item in Order by ID
*SystemPeopleApi* | [**getAllPeople**](docs/Api/SystemPeopleApi.md#getallpeople) | **GET** /System/People | Return list of customer in system instance
*SystemPeopleApi* | [**getPeople**](docs/Api/SystemPeopleApi.md#getpeople) | **GET** /System/People/{id} | Return customer information by ID
*SystemPeopleApi* | [**getPeopleOrders**](docs/Api/SystemPeopleApi.md#getpeopleorders) | **GET** /System/People/{id}/Orders | Returns list of Orders for People by specified ID.
*SystemPeopleApi* | [**postPeople**](docs/Api/SystemPeopleApi.md#postpeople) | **POST** /System/People | Create new user or return ID existing user in sales channel
*SystemStoresApi* | [**getStore**](docs/Api/SystemStoresApi.md#getstore) | **GET** /System/Stores/{id} | Find store by ID
*SystemStoresApi* | [**getStores**](docs/Api/SystemStoresApi.md#getstores) | **GET** /System/Stores | Returns stores list in the system.
*SystemSuppliersApi* | [**getSupplier**](docs/Api/SystemSuppliersApi.md#getsupplier) | **GET** /System/Suppliers/{id} | Find Supplier by ID
*SystemSuppliersApi* | [**getSuppliers**](docs/Api/SystemSuppliersApi.md#getsuppliers) | **GET** /System/Suppliers | Returns list of Suppliers in the instance.

## Models

- [ActionModel](docs/Model/ActionModel.md)
- [ActionModelParams](docs/Model/ActionModelParams.md)
- [ActionModelTitle](docs/Model/ActionModelTitle.md)
- [ActionPostRequest](docs/Model/ActionPostRequest.md)
- [ActionPostRequestParameters](docs/Model/ActionPostRequestParameters.md)
- [ActionPutRequest](docs/Model/ActionPutRequest.md)
- [ActionsModel](docs/Model/ActionsModel.md)
- [ArticleAddVariantPostRequest](docs/Model/ArticleAddVariantPostRequest.md)
- [ArticleAddVariantPostRequestVariant1](docs/Model/ArticleAddVariantPostRequestVariant1.md)
- [ArticleAddVariantPostRequestVariant2](docs/Model/ArticleAddVariantPostRequestVariant2.md)
- [ArticleAddVariantPostRequestVariant3](docs/Model/ArticleAddVariantPostRequestVariant3.md)
- [ArticleImagesPostRequest](docs/Model/ArticleImagesPostRequest.md)
- [ArticleImagesPostRequestImages](docs/Model/ArticleImagesPostRequestImages.md)
- [ArticleModel](docs/Model/ArticleModel.md)
- [ArticleModelSourceImages](docs/Model/ArticleModelSourceImages.md)
- [ArticleModelVariant](docs/Model/ArticleModelVariant.md)
- [ArticlePostRequest](docs/Model/ArticlePostRequest.md)
- [ArticlePostRequestMultidata](docs/Model/ArticlePostRequestMultidata.md)
- [ArticlePutRequest](docs/Model/ArticlePutRequest.md)
- [ArticlePutRequestAlternativeValues](docs/Model/ArticlePutRequestAlternativeValues.md)
- [ArticlePutRequestMultidata](docs/Model/ArticlePutRequestMultidata.md)
- [ArticlePutRequestParameters](docs/Model/ArticlePutRequestParameters.md)
- [ArticlesModel](docs/Model/ArticlesModel.md)
- [BlockModel](docs/Model/BlockModel.md)
- [BlockPostRequest](docs/Model/BlockPostRequest.md)
- [BlockPostRequestParameters](docs/Model/BlockPostRequestParameters.md)
- [BlockPostRequestSubtitle](docs/Model/BlockPostRequestSubtitle.md)
- [BlockPutRequest](docs/Model/BlockPutRequest.md)
- [BlocksModel](docs/Model/BlocksModel.md)
- [CallbackModel](docs/Model/CallbackModel.md)
- [CallbackModelParams](docs/Model/CallbackModelParams.md)
- [CallbackPostRequest](docs/Model/CallbackPostRequest.md)
- [CallbackPutRequest](docs/Model/CallbackPutRequest.md)
- [CallbacksModel](docs/Model/CallbacksModel.md)
- [CategoriesModel](docs/Model/CategoriesModel.md)
- [CategoryModel](docs/Model/CategoryModel.md)
- [CategoryPostRequest](docs/Model/CategoryPostRequest.md)
- [CategoryPutRequest](docs/Model/CategoryPutRequest.md)
- [ChannelFeedsRequest](docs/Model/ChannelFeedsRequest.md)
- [ChannelFeedsRequestFeeds](docs/Model/ChannelFeedsRequestFeeds.md)
- [ChannelModel](docs/Model/ChannelModel.md)
- [ChannelModelFeeds](docs/Model/ChannelModelFeeds.md)
- [ChannelPostRequest](docs/Model/ChannelPostRequest.md)
- [ChannelsModel](docs/Model/ChannelsModel.md)
- [CompaniesModel](docs/Model/CompaniesModel.md)
- [CompanyModel](docs/Model/CompanyModel.md)
- [CompanyModelBankAccounts](docs/Model/CompanyModelBankAccounts.md)
- [CompanyModelCompanyVats](docs/Model/CompanyModelCompanyVats.md)
- [CountriesModel](docs/Model/CountriesModel.md)
- [CountryModel](docs/Model/CountryModel.md)
- [CurrenciesModel](docs/Model/CurrenciesModel.md)
- [CurrencyModel](docs/Model/CurrencyModel.md)
- [DomainModel](docs/Model/DomainModel.md)
- [DomainsModel](docs/Model/DomainsModel.md)
- [DynamicSnippetCallbackPostRequest](docs/Model/DynamicSnippetCallbackPostRequest.md)
- [DynamicSnippetCallbackPutRequest](docs/Model/DynamicSnippetCallbackPutRequest.md)
- [DynamicSnippetModel](docs/Model/DynamicSnippetModel.md)
- [DynamicSnippetTemplatePostRequest](docs/Model/DynamicSnippetTemplatePostRequest.md)
- [DynamicSnippetTemplatePutRequest](docs/Model/DynamicSnippetTemplatePutRequest.md)
- [DynamicSnippetsModel](docs/Model/DynamicSnippetsModel.md)
- [ErrorModel](docs/Model/ErrorModel.md)
- [EventModel](docs/Model/EventModel.md)
- [EventPostRequest](docs/Model/EventPostRequest.md)
- [EventPostRequestParameters](docs/Model/EventPostRequestParameters.md)
- [EventPutRequest](docs/Model/EventPutRequest.md)
- [EventsModel](docs/Model/EventsModel.md)
- [FamiliesModel](docs/Model/FamiliesModel.md)
- [FamilyModel](docs/Model/FamilyModel.md)
- [FamilyModelNames](docs/Model/FamilyModelNames.md)
- [FamilyModelParameters](docs/Model/FamilyModelParameters.md)
- [FamilyModelValues](docs/Model/FamilyModelValues.md)
- [FamilyModelValues1](docs/Model/FamilyModelValues1.md)
- [FamilyPostRequest](docs/Model/FamilyPostRequest.md)
- [FamilyPostRequestParameters](docs/Model/FamilyPostRequestParameters.md)
- [FamilyPostRequestParamsArticles](docs/Model/FamilyPostRequestParamsArticles.md)
- [FamilyPostRequestParamsArticlesMultidata](docs/Model/FamilyPostRequestParamsArticlesMultidata.md)
- [FamilyPutRequest](docs/Model/FamilyPutRequest.md)
- [FamilyPutRequestParameters](docs/Model/FamilyPutRequestParameters.md)
- [HistoryPostRequest](docs/Model/HistoryPostRequest.md)
- [HistoryPostRequestRecord](docs/Model/HistoryPostRequestRecord.md)
- [IdModel](docs/Model/IdModel.md)
- [IdMultidataModel](docs/Model/IdMultidataModel.md)
- [IdMultidataModelMultidata](docs/Model/IdMultidataModelMultidata.md)
- [IdentModel](docs/Model/IdentModel.md)
- [LanguageModel](docs/Model/LanguageModel.md)
- [LanguagesModel](docs/Model/LanguagesModel.md)
- [MeModel](docs/Model/MeModel.md)
- [MenuItemModel](docs/Model/MenuItemModel.md)
- [MenuItemPostRequest](docs/Model/MenuItemPostRequest.md)
- [MenuItemPutRequest](docs/Model/MenuItemPutRequest.md)
- [MenuItemsModel](docs/Model/MenuItemsModel.md)
- [MultiDataModel](docs/Model/MultiDataModel.md)
- [MultiDataModelImages](docs/Model/MultiDataModelImages.md)
- [MultiDataModelParameters](docs/Model/MultiDataModelParameters.md)
- [MultiDataModelStores](docs/Model/MultiDataModelStores.md)
- [NonExpandedModel](docs/Model/NonExpandedModel.md)
- [OrderModel](docs/Model/OrderModel.md)
- [OrderModelItems](docs/Model/OrderModelItems.md)
- [OrderModelTrackings](docs/Model/OrderModelTrackings.md)
- [OrderPaidPatchRequest](docs/Model/OrderPaidPatchRequest.md)
- [OrderPostRequest](docs/Model/OrderPostRequest.md)
- [OrderPutRequest](docs/Model/OrderPutRequest.md)
- [OrderStatusModel](docs/Model/OrderStatusModel.md)
- [OrderStatusPatchRequest](docs/Model/OrderStatusPatchRequest.md)
- [OrderStatusesModel](docs/Model/OrderStatusesModel.md)
- [OrdersModel](docs/Model/OrdersModel.md)
- [PaginatorModel](docs/Model/PaginatorModel.md)
- [PaymentModel](docs/Model/PaymentModel.md)
- [PaymentsModel](docs/Model/PaymentsModel.md)
- [PaymentsProviderModel](docs/Model/PaymentsProviderModel.md)
- [PaymentsProvidersModel](docs/Model/PaymentsProvidersModel.md)
- [PriceModel](docs/Model/PriceModel.md)
- [ShipperModel](docs/Model/ShipperModel.md)
- [ShippersModel](docs/Model/ShippersModel.md)
- [ShippingModel](docs/Model/ShippingModel.md)
- [ShippingPutRequest](docs/Model/ShippingPutRequest.md)
- [ShippingsModel](docs/Model/ShippingsModel.md)
- [StaticSnippetModel](docs/Model/StaticSnippetModel.md)
- [StaticSnippetPostRequest](docs/Model/StaticSnippetPostRequest.md)
- [StaticSnippetPutRequest](docs/Model/StaticSnippetPutRequest.md)
- [StaticSnippetsModel](docs/Model/StaticSnippetsModel.md)
- [StoreModel](docs/Model/StoreModel.md)
- [StoresModel](docs/Model/StoresModel.md)
- [StoresProviderModel](docs/Model/StoresProviderModel.md)
- [StoresProvidersModel](docs/Model/StoresProvidersModel.md)
- [SupplierModel](docs/Model/SupplierModel.md)
- [SuppliersModel](docs/Model/SuppliersModel.md)
- [TabModel](docs/Model/TabModel.md)
- [TabModelParameters](docs/Model/TabModelParameters.md)
- [TabModelTitle](docs/Model/TabModelTitle.md)
- [TabPostRequest](docs/Model/TabPostRequest.md)
- [TabPutRequest](docs/Model/TabPutRequest.md)
- [TabsModel](docs/Model/TabsModel.md)
- [TrackingPostRequest](docs/Model/TrackingPostRequest.md)
- [UserModel](docs/Model/UserModel.md)
- [UserModelChannel](docs/Model/UserModelChannel.md)
- [UserModelChannelChannel](docs/Model/UserModelChannelChannel.md)
- [UserPostRequest](docs/Model/UserPostRequest.md)
- [UsersModel](docs/Model/UsersModel.md)
- [VariantIdValuePostRequest](docs/Model/VariantIdValuePostRequest.md)
- [VariantIdValuePostRequestValues](docs/Model/VariantIdValuePostRequestValues.md)
- [VariantModel](docs/Model/VariantModel.md)
- [VariantModelNames](docs/Model/VariantModelNames.md)
- [VariantModelValues](docs/Model/VariantModelValues.md)
- [VariantPostRequest](docs/Model/VariantPostRequest.md)
- [VariantPostRequestValues](docs/Model/VariantPostRequestValues.md)
- [VariantsModel](docs/Model/VariantsModel.md)

## Authorization

### token

- **Type**: API key
- **API key parameter name**: token
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

helpdesk@retailys.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.1.02`
    - Package version: `0.1-beta`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
