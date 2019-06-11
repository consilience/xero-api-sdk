# # Contact

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contactID** | **string** | Xero identifier | [optional] 
**contactNumber** | **string** | This can be updated via the API only i.e. This field is read only on the Xero contact screen, used to identify contacts in external systems (max length &#x3D; 50). If the Contact Number is used, this is displayed as Contact Code in the Contacts UI in Xero. | [optional] 
**accountNumber** | **string** | A user defined account number. This can be updated via the API and the Xero UI (max length &#x3D; 50) | [optional] 
**contactStatus** | **string** | Current status of a contact – see contact status types | [optional] 
**name** | **string** | Full name of contact/organisation (max length &#x3D; 255) | [optional] 
**firstName** | **string** | First name of contact person (max length &#x3D; 255) | [optional] 
**lastName** | **string** | Last name of contact person (max length &#x3D; 255) | [optional] 
**emailAddress** | **string** | Email address of contact person (umlauts not supported) (max length  &#x3D; 255) | [optional] 
**skypeUserName** | **string** | Skype user name of contact | [optional] 
**contactPersons** | [**\Consilience\XeroAccounting\Sdk\Model\ContactPerson[]**](ContactPerson.md) | See contact persons | [optional] 
**bankAccountDetails** | **string** | Bank account number of contact | [optional] 
**taxNumber** | **string** | Tax number of contact – this is also known as the ABN (Australia), GST Number (New Zealand), VAT Number (UK) or Tax ID Number (US and global) in the Xero UI depending on which regionalized version of Xero you are using (max length &#x3D; 50) | [optional] 
**accountsReceivableTaxType** | **string** | The tax type from TaxRates | [optional] 
**accountsPayableTaxType** | **string** | The tax type from TaxRates | [optional] 
**addresses** | [**\Consilience\XeroAccounting\Sdk\Model\Address[]**](Address.md) | Store certain address types for a contact – see address types | [optional] 
**phones** | [**\Consilience\XeroAccounting\Sdk\Model\Phone[]**](Phone.md) | Store certain phone types for a contact – see phone types | [optional] 
**isSupplier** | **bool** | true or false – Boolean that describes if a contact that has any AP  invoices entered against them. Cannot be set via PUT or POST – it is automatically set when an accounts payable invoice is generated against this contact. | [optional] 
**isCustomer** | **bool** | true or false – Boolean that describes if a contact has any AR invoices entered against them. Cannot be set via PUT or POST – it is automatically set when an accounts receivable invoice is generated against this contact. | [optional] 
**defaultCurrency** | [**\Consilience\XeroAccounting\Sdk\Model\CurrencyCode**](CurrencyCode.md) |  | [optional] 
**xeroNetworkKey** | **string** | Store XeroNetworkKey for contacts. | [optional] 
**salesDefaultAccountCode** | **string** | The default sales account code for contacts | [optional] 
**purchasesDefaultAccountCode** | **string** | The default purchases account code for contacts | [optional] 
**salesTrackingCategories** | [**\Consilience\XeroAccounting\Sdk\Model\TrackingCategory[]**](TrackingCategory.md) | The default sales tracking categories for contacts | [optional] 
**purchasesTrackingCategories** | [**\Consilience\XeroAccounting\Sdk\Model\TrackingCategory[]**](TrackingCategory.md) | The default purchases tracking categories for contacts | [optional] 
**trackingCategoryName** | **string** | The name of the Tracking Category assigned to the contact under SalesTrackingCategories and PurchasesTrackingCategories | [optional] 
**trackingCategoryOption** | **string** | The name of the Tracking Option assigned to the contact under SalesTrackingCategories and PurchasesTrackingCategories | [optional] 
**paymentTerms** | [**\Consilience\XeroAccounting\Sdk\Model\PaymentTerm**](PaymentTerm.md) |  | [optional] 
**updatedDateUTC** | [**\DateTime**](\DateTime.md) | UTC timestamp of last update to contact | [optional] 
**contactGroups** | [**\Consilience\XeroAccounting\Sdk\Model\ContactGroup[]**](ContactGroup.md) | Displays which contact groups a contact is included in | [optional] 
**website** | **string** | Website address for contact (read only) | [optional] 
**brandingTheme** | [**\Consilience\XeroAccounting\Sdk\Model\BrandingTheme**](BrandingTheme.md) |  | [optional] 
**batchPayments** | [**\Consilience\XeroAccounting\Sdk\Model\BatchPaymentDetails**](BatchPaymentDetails.md) |  | [optional] 
**discount** | **double** | The default discount rate for the contact (read only) | [optional] 
**balances** | [**\Consilience\XeroAccounting\Sdk\Model\Balances**](Balances.md) |  | [optional] 
**attachments** | [**\Consilience\XeroAccounting\Sdk\Model\Attachment[]**](Attachment.md) | Displays array of attachments from the API | [optional] 
**hasAttachments** | **bool** | A boolean to indicate if a contact has an attachment | [optional] 
**validationErrors** | [**\Consilience\XeroAccounting\Sdk\Model\ValidationError[]**](ValidationError.md) | Displays validation errors returned from the API | [optional] 
**hasValidationErrors** | **bool** | A boolean to indicate if a contact has an validation errors | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


