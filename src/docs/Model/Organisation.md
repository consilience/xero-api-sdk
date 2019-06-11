# # Organisation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**organisationID** | **string** | Unique Xero identifier | [optional] 
**aPIKey** | **string** | Display a unique key used for Xero-to-Xero transactions | [optional] 
**name** | **string** | Display name of organisation shown in Xero | [optional] 
**legalName** | **string** | Organisation name shown on Reports | [optional] 
**paysTax** | **bool** | Boolean to describe if organisation is registered with a local tax authority i.e. true, false | [optional] 
**version** | **string** | See Version Types | [optional] 
**organisationType** | **string** | Organisation Type | [optional] 
**baseCurrency** | [**\Consilience\XeroAccounting\Sdk\Model\CurrencyCode**](CurrencyCode.md) |  | [optional] 
**countryCode** | [**\Consilience\XeroAccounting\Sdk\Model\CountryCode**](CountryCode.md) |  | [optional] 
**isDemoCompany** | **bool** | Boolean to describe if organisation is a demo company. | [optional] 
**organisationStatus** | **string** | Will be set to ACTIVE if you can connect to organisation via the Xero API | [optional] 
**registrationNumber** | **string** | Shows for New Zealand, Australian and UK organisations | [optional] 
**taxNumber** | **string** | Shown if set. Displays in the Xero UI as Tax File Number (AU), GST Number (NZ), VAT Number (UK) and Tax ID Number (US &amp; Global). | [optional] 
**financialYearEndDay** | **int** | Calendar day e.g. 0-31 | [optional] 
**financialYearEndMonth** | **int** | Calendar Month e.g. 1-12 | [optional] 
**salesTaxBasis** | **string** | The accounting basis used for tax returns. See Sales Tax Basis | [optional] 
**salesTaxPeriod** | **string** | The frequency with which tax returns are processed. See Sales Tax Period | [optional] 
**defaultSalesTax** | **string** | The default for LineAmountTypes on sales transactions | [optional] 
**defaultPurchasesTax** | **string** | The default for LineAmountTypes on purchase transactions | [optional] 
**periodLockDate** | [**\DateTime**](\DateTime.md) | Shown if set. See lock dates | [optional] 
**endOfYearLockDate** | [**\DateTime**](\DateTime.md) | Shown if set. See lock dates | [optional] 
**createdDateUTC** | [**\DateTime**](\DateTime.md) | Timestamp when the organisation was created in Xero | [optional] 
**timezone** | [**\Consilience\XeroAccounting\Sdk\Model\TimeZone**](TimeZone.md) |  | [optional] 
**organisationEntityType** | **string** | Organisation Type | [optional] 
**shortCode** | **string** | A unique identifier for the organisation. Potential uses. | [optional] 
**class** | **string** | Organisation Classes describe which plan the Xero organisation is on (e.g. DEMO, TRIAL, PREMIUM) | [optional] 
**edition** | **string** | BUSINESS or PARTNER. Partner edition organisations are sold exclusively through accounting partners and have restricted functionality (e.g. no access to invoicing) | [optional] 
**lineOfBusiness** | **string** | Description of business type as defined in Organisation settings | [optional] 
**addresses** | [**\Consilience\XeroAccounting\Sdk\Model\Address[]**](Address.md) | Address details for organisation – see Addresses | [optional] 
**phones** | [**\Consilience\XeroAccounting\Sdk\Model\Phone[]**](Phone.md) | Phones details for organisation – see Phones | [optional] 
**externalLinks** | [**\Consilience\XeroAccounting\Sdk\Model\ExternalLink[]**](ExternalLink.md) | Organisation profile links for popular services such as Facebook,Twitter, GooglePlus and LinkedIn. You can also add link to your website here. Shown if Organisation settings  is updated in Xero. See ExternalLinks below | [optional] 
**paymentTerms** | [**\Consilience\XeroAccounting\Sdk\Model\PaymentTerm**](PaymentTerm.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


