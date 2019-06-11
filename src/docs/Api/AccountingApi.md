# Consilience\XeroAccounting\Sdk\AccountingApi

All URIs are relative to *https://api.xero.com/api.xro/2.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAccount**](AccountingApi.md#createAccount) | **PUT** /Accounts | Allows you to create a new chart of accounts
[**createAccountAttachmentByFileName**](AccountingApi.md#createAccountAttachmentByFileName) | **PUT** /Accounts/{AccountID}/Attachments/{FileName} | Allows you to create Attachment on Account
[**createBankTransaction**](AccountingApi.md#createBankTransaction) | **PUT** /BankTransactions | Allows you to create a spend or receive money transaction
[**createBankTransactionAttachmentByFileName**](AccountingApi.md#createBankTransactionAttachmentByFileName) | **PUT** /BankTransactions/{BankTransactionID}/Attachments/{FileName} | Allows you to createa an Attachment on BankTransaction by Filename
[**createBankTransactionHistoryRecord**](AccountingApi.md#createBankTransactionHistoryRecord) | **PUT** /BankTransactions/{BankTransactionID}/History | Allows you to create history record for a bank transactions
[**createBankTransfer**](AccountingApi.md#createBankTransfer) | **PUT** /BankTransfers | Allows you to create a bank transfers
[**createBankTransferAttachmentByFileName**](AccountingApi.md#createBankTransferAttachmentByFileName) | **PUT** /BankTransfers/{BankTransferID}/Attachments/{FileName} | 
[**createBankTransferHistoryRecord**](AccountingApi.md#createBankTransferHistoryRecord) | **PUT** /BankTransfers/{BankTransferID}/History | 
[**createBatchPayment**](AccountingApi.md#createBatchPayment) | **PUT** /BatchPayments | Create one or many BatchPayments for invoices
[**createBatchPaymentHistoryRecord**](AccountingApi.md#createBatchPaymentHistoryRecord) | **PUT** /BatchPayments/{BatchPaymentID}/History | Allows you to create a history record for a Batch Payment
[**createBrandingThemePaymentServices**](AccountingApi.md#createBrandingThemePaymentServices) | **POST** /BrandingThemes/{BrandingThemeID}/PaymentServices | Allow for the creation of new custom payment service for specified Branding Theme
[**createContact**](AccountingApi.md#createContact) | **PUT** /Contacts | 
[**createContactAttachmentByFileName**](AccountingApi.md#createContactAttachmentByFileName) | **PUT** /Contacts/{ContactID}/Attachments/{FileName} | 
[**createContactGroup**](AccountingApi.md#createContactGroup) | **PUT** /ContactGroups | Allows you to create a contact group
[**createContactGroupContacts**](AccountingApi.md#createContactGroupContacts) | **PUT** /ContactGroups/{ContactGroupID}/Contacts | Allows you to add Contacts to a Contract Group
[**createContactHistory**](AccountingApi.md#createContactHistory) | **PUT** /Contacts/{ContactID}/History | Allows you to retrieve a history records of an Contact
[**createCreditNote**](AccountingApi.md#createCreditNote) | **PUT** /CreditNotes | Allows you to create a credit note
[**createCreditNoteAllocation**](AccountingApi.md#createCreditNoteAllocation) | **PUT** /CreditNotes/{CreditNoteID}/Allocations | Allows you to create Allocation on CreditNote
[**createCreditNoteAttachmentByFileName**](AccountingApi.md#createCreditNoteAttachmentByFileName) | **PUT** /CreditNotes/{CreditNoteID}/Attachments/{FileName} | Allows you to create Attachments on CreditNote by file name
[**createCreditNoteHistory**](AccountingApi.md#createCreditNoteHistory) | **PUT** /CreditNotes/{CreditNoteID}/History | Allows you to retrieve a history records of an CreditNote
[**createCurrency**](AccountingApi.md#createCurrency) | **PUT** /Currencies | 
[**createEmployee**](AccountingApi.md#createEmployee) | **PUT** /Employees | Allows you to create new employees used in Xero payrun
[**createExpenseClaim**](AccountingApi.md#createExpenseClaim) | **PUT** /ExpenseClaims | Allows you to retrieve expense claims
[**createExpenseClaimHistory**](AccountingApi.md#createExpenseClaimHistory) | **PUT** /ExpenseClaims/{ExpenseClaimID}/History | Allows you to create a history records of an ExpenseClaim
[**createInvoice**](AccountingApi.md#createInvoice) | **PUT** /Invoices | Allows you to create any sales invoices or purchase bills
[**createInvoiceAttachmentByFileName**](AccountingApi.md#createInvoiceAttachmentByFileName) | **PUT** /Invoices/{InvoiceID}/Attachments/{FileName} | Allows you to create an Attachment on invoices or purchase bills by it&#39;s filename
[**createInvoiceHistory**](AccountingApi.md#createInvoiceHistory) | **PUT** /Invoices/{InvoiceID}/History | Allows you to retrieve a history records of an invoice
[**createItem**](AccountingApi.md#createItem) | **PUT** /Items | Allows you to create an item
[**createItemHistory**](AccountingApi.md#createItemHistory) | **PUT** /Items/{ItemID}/History | Allows you to create a history record for items
[**createLinkedTransaction**](AccountingApi.md#createLinkedTransaction) | **PUT** /LinkedTransactions | Allows you to create linked transactions (billable expenses)
[**createManualJournal**](AccountingApi.md#createManualJournal) | **PUT** /ManualJournals | Allows you to create a manual journal
[**createManualJournalAttachmentByFileName**](AccountingApi.md#createManualJournalAttachmentByFileName) | **PUT** /ManualJournals/{ManualJournalID}/Attachments/{FileName} | Allows you to create a specified Attachment on ManualJournal by file name
[**createOverpaymentAllocation**](AccountingApi.md#createOverpaymentAllocation) | **PUT** /Overpayments/{OverpaymentID}/Allocations | Allows you to retrieve Allocations for overpayments
[**createOverpaymentHistory**](AccountingApi.md#createOverpaymentHistory) | **PUT** /Overpayments/{OverpaymentID}/History | Allows you to create history records of an Overpayment
[**createPayment**](AccountingApi.md#createPayment) | **PUT** /Payments | Allows you to create payments for invoices and credit notes
[**createPaymentHistory**](AccountingApi.md#createPaymentHistory) | **PUT** /Payments/{PaymentID}/History | Allows you to create a history record for a payment
[**createPaymentService**](AccountingApi.md#createPaymentService) | **PUT** /PaymentServices | Allows you to create payment services
[**createPrepaymentAllocation**](AccountingApi.md#createPrepaymentAllocation) | **PUT** /Prepayments/{PrepaymentID}/Allocations | Allows you to create an Allocation for prepayments
[**createPrepaymentHistory**](AccountingApi.md#createPrepaymentHistory) | **PUT** /Prepayments/{PrepaymentID}/History | Allows you to create a history record for an Prepayment
[**createPurchaseOrder**](AccountingApi.md#createPurchaseOrder) | **PUT** /PurchaseOrders | Allows you to create purchase orders
[**createPurchaseOrderHistory**](AccountingApi.md#createPurchaseOrderHistory) | **PUT** /PurchaseOrders/{PurchaseOrderID}/History | Allows you to create HistoryRecord for purchase orders
[**createReceipt**](AccountingApi.md#createReceipt) | **PUT** /Receipts | Allows you to create draft expense claim receipts for any user
[**createReceiptAttachmentByFileName**](AccountingApi.md#createReceiptAttachmentByFileName) | **PUT** /Receipts/{ReceiptID}/Attachments/{FileName} | Allows you to create Attachment on expense claim receipts by file name
[**createReceiptHistory**](AccountingApi.md#createReceiptHistory) | **PUT** /Receipts/{ReceiptID}/History | Allows you to retrieve a history records of an Receipt
[**createRepeatingInvoiceAttachmentByFileName**](AccountingApi.md#createRepeatingInvoiceAttachmentByFileName) | **PUT** /RepeatingInvoices/{RepeatingInvoiceID}/Attachments/{FileName} | Allows you to create attachment on repeating invoices by file name
[**createRepeatingInvoiceHistory**](AccountingApi.md#createRepeatingInvoiceHistory) | **PUT** /RepeatingInvoices/{RepeatingInvoiceID}/History | Allows you to create history for a repeating invoice
[**createTaxRate**](AccountingApi.md#createTaxRate) | **PUT** /TaxRates | Allows you to create Tax Rates
[**createTrackingCategory**](AccountingApi.md#createTrackingCategory) | **PUT** /TrackingCategories | Allows you to create tracking categories
[**createTrackingOptions**](AccountingApi.md#createTrackingOptions) | **PUT** /TrackingCategories/{TrackingCategoryID}/Options | Allows you to create options for a specified tracking category
[**deleteAccount**](AccountingApi.md#deleteAccount) | **DELETE** /Accounts/{AccountID} | Allows you to delete a chart of accounts
[**deleteContactGroupContact**](AccountingApi.md#deleteContactGroupContact) | **DELETE** /ContactGroups/{ContactGroupID}/Contacts/{ContactID} | Allows you to delete a specific Contact from a Contract Group
[**deleteContactGroupContacts**](AccountingApi.md#deleteContactGroupContacts) | **DELETE** /ContactGroups/{ContactGroupID}/Contacts | Allows you to delete  all Contacts from a Contract Group
[**deleteItem**](AccountingApi.md#deleteItem) | **DELETE** /Items/{ItemID} | Allows you to delete a specified item
[**deleteLinkedTransaction**](AccountingApi.md#deleteLinkedTransaction) | **DELETE** /LinkedTransactions/{LinkedTransactionID} | Allows you to delete a specified linked transactions (billable expenses)
[**deletePayment**](AccountingApi.md#deletePayment) | **POST** /Payments/{PaymentID} | Allows you to update a specified payment for invoices and credit notes
[**deleteTrackingCategory**](AccountingApi.md#deleteTrackingCategory) | **DELETE** /TrackingCategories/{TrackingCategoryID} | Allows you to delete tracking categories
[**deleteTrackingOptions**](AccountingApi.md#deleteTrackingOptions) | **DELETE** /TrackingCategories/{TrackingCategoryID}/Options/{TrackingOptionID} | Allows you to delete a specified option for a specified tracking category
[**emailInvoice**](AccountingApi.md#emailInvoice) | **POST** /Invoices/{InvoiceID}/Email | Allows you to email a copy of invoice to related Contact
[**getAccount**](AccountingApi.md#getAccount) | **GET** /Accounts/{AccountID} | Allows you to retrieve a single chart of accounts
[**getAccountAttachmentByFileName**](AccountingApi.md#getAccountAttachmentByFileName) | **GET** /Accounts/{AccountID}/Attachments/{FileName} | Allows you to retrieve Attachment on Account by Filename
[**getAccountAttachmentById**](AccountingApi.md#getAccountAttachmentById) | **GET** /Accounts/{AccountID}/Attachments/{AttachmentID} | Allows you to retrieve specific Attachment on Account
[**getAccountAttachments**](AccountingApi.md#getAccountAttachments) | **GET** /Accounts/{AccountID}/Attachments | Allows you to retrieve Attachments for accounts
[**getAccounts**](AccountingApi.md#getAccounts) | **GET** /Accounts | Allows you to retrieve the full chart of accounts
[**getBankTransaction**](AccountingApi.md#getBankTransaction) | **GET** /BankTransactions/{BankTransactionID} | Allows you to retrieve a single spend or receive money transaction
[**getBankTransactionAttachmentByFileName**](AccountingApi.md#getBankTransactionAttachmentByFileName) | **GET** /BankTransactions/{BankTransactionID}/Attachments/{FileName} | Allows you to retrieve Attachments on BankTransaction by Filename
[**getBankTransactionAttachmentById**](AccountingApi.md#getBankTransactionAttachmentById) | **GET** /BankTransactions/{BankTransactionID}/Attachments/{AttachmentID} | Allows you to retrieve Attachments on a specific BankTransaction
[**getBankTransactionAttachments**](AccountingApi.md#getBankTransactionAttachments) | **GET** /BankTransactions/{BankTransactionID}/Attachments | Allows you to retrieve any attachments to bank transactions
[**getBankTransactions**](AccountingApi.md#getBankTransactions) | **GET** /BankTransactions | Allows you to retrieve any spend or receive money transactions
[**getBankTransactionsHistory**](AccountingApi.md#getBankTransactionsHistory) | **GET** /BankTransactions/{BankTransactionID}/History | Allows you to retrieve history from a bank transactions
[**getBankTransfer**](AccountingApi.md#getBankTransfer) | **GET** /BankTransfers/{BankTransferID} | Allows you to retrieve any bank transfers
[**getBankTransferAttachmentByFileName**](AccountingApi.md#getBankTransferAttachmentByFileName) | **GET** /BankTransfers/{BankTransferID}/Attachments/{FileName} | Allows you to retrieve Attachments on BankTransfer by file name
[**getBankTransferAttachmentById**](AccountingApi.md#getBankTransferAttachmentById) | **GET** /BankTransfers/{BankTransferID}/Attachments/{AttachmentID} | Allows you to retrieve Attachments on BankTransfer
[**getBankTransferAttachments**](AccountingApi.md#getBankTransferAttachments) | **GET** /BankTransfers/{BankTransferID}/Attachments | Allows you to retrieve Attachments from  bank transfers
[**getBankTransferHistory**](AccountingApi.md#getBankTransferHistory) | **GET** /BankTransfers/{BankTransferID}/History | Allows you to retrieve history from a bank transfers
[**getBankTransfers**](AccountingApi.md#getBankTransfers) | **GET** /BankTransfers | Allows you to retrieve all bank transfers
[**getBatchPaymentHistory**](AccountingApi.md#getBatchPaymentHistory) | **GET** /BatchPayments/{BatchPaymentID}/History | Allows you to retrieve history from a Batch Payment
[**getBatchPayments**](AccountingApi.md#getBatchPayments) | **GET** /BatchPayments | Retrieve either one or many BatchPayments for invoices
[**getBrandingTheme**](AccountingApi.md#getBrandingTheme) | **GET** /BrandingThemes/{BrandingThemeID} | Allows you to retrieve a specific BrandingThemes
[**getBrandingThemePaymentServices**](AccountingApi.md#getBrandingThemePaymentServices) | **GET** /BrandingThemes/{BrandingThemeID}/PaymentServices | Allows you to retrieve the Payment services for a Branding Theme
[**getBrandingThemes**](AccountingApi.md#getBrandingThemes) | **GET** /BrandingThemes | Allows you to retrieve all the BrandingThemes
[**getContact**](AccountingApi.md#getContact) | **GET** /Contacts/{ContactID} | Allows you to retrieve, add and update contacts in a Xero organisation
[**getContactAttachmentByFileName**](AccountingApi.md#getContactAttachmentByFileName) | **GET** /Contacts/{ContactID}/Attachments/{FileName} | Allows you to retrieve Attachments on Contacts by file name
[**getContactAttachmentById**](AccountingApi.md#getContactAttachmentById) | **GET** /Contacts/{ContactID}/Attachments/{AttachmentID} | Allows you to retrieve Attachments on Contacts
[**getContactAttachments**](AccountingApi.md#getContactAttachments) | **GET** /Contacts/{ContactID}/Attachments | Allows you to retrieve, add and update contacts in a Xero organisation
[**getContactCISSettings**](AccountingApi.md#getContactCISSettings) | **GET** /Contacts/{ContactID}/CISSettings | Allows you to retrieve CISSettings for a contact in a Xero organisation
[**getContactGroup**](AccountingApi.md#getContactGroup) | **GET** /ContactGroups/{ContactGroupID} | Allows you to retrieve a unique Contract Group by ID
[**getContactGroups**](AccountingApi.md#getContactGroups) | **GET** /ContactGroups | Allows you to retrieve the ContactID and Name of all the contacts in a contact group
[**getContactHistory**](AccountingApi.md#getContactHistory) | **GET** /Contacts/{ContactID}/History | Allows you to retrieve a history records of an Contact
[**getContacts**](AccountingApi.md#getContacts) | **GET** /Contacts | Allows you to retrieve, add and update contacts in a Xero organisation
[**getCreditNote**](AccountingApi.md#getCreditNote) | **GET** /CreditNotes/{CreditNoteID} | Allows you to retrieve a specific credit note
[**getCreditNoteAsPdf**](AccountingApi.md#getCreditNoteAsPdf) | **GET** /CreditNotes/{CreditNoteID}/pdf | Allows you to retrieve Credit Note as PDF files
[**getCreditNoteAttachmentByFileName**](AccountingApi.md#getCreditNoteAttachmentByFileName) | **GET** /CreditNotes/{CreditNoteID}/Attachments/{FileName} | Allows you to retrieve Attachments on CreditNote by file name
[**getCreditNoteAttachmentById**](AccountingApi.md#getCreditNoteAttachmentById) | **GET** /CreditNotes/{CreditNoteID}/Attachments/{AttachmentID} | Allows you to retrieve Attachments on CreditNote
[**getCreditNoteAttachments**](AccountingApi.md#getCreditNoteAttachments) | **GET** /CreditNotes/{CreditNoteID}/Attachments | Allows you to retrieve Attachments for credit notes
[**getCreditNoteHistory**](AccountingApi.md#getCreditNoteHistory) | **GET** /CreditNotes/{CreditNoteID}/History | Allows you to retrieve a history records of an CreditNote
[**getCreditNotes**](AccountingApi.md#getCreditNotes) | **GET** /CreditNotes | Allows you to retrieve any credit notes
[**getCurrencies**](AccountingApi.md#getCurrencies) | **GET** /Currencies | Allows you to retrieve currencies for your organisation
[**getEmployee**](AccountingApi.md#getEmployee) | **GET** /Employees/{EmployeeID} | Allows you to retrieve a specific employee used in Xero payrun
[**getEmployees**](AccountingApi.md#getEmployees) | **GET** /Employees | Allows you to retrieve employees used in Xero payrun
[**getExpenseClaim**](AccountingApi.md#getExpenseClaim) | **GET** /ExpenseClaims/{ExpenseClaimID} | Allows you to retrieve a specified expense claim
[**getExpenseClaimHistory**](AccountingApi.md#getExpenseClaimHistory) | **GET** /ExpenseClaims/{ExpenseClaimID}/History | Allows you to retrieve a history records of an ExpenseClaim
[**getExpenseClaims**](AccountingApi.md#getExpenseClaims) | **GET** /ExpenseClaims | Allows you to retrieve expense claims
[**getInvoice**](AccountingApi.md#getInvoice) | **GET** /Invoices/{InvoiceID} | Allows you to retrieve a specified sales invoice or purchase bill
[**getInvoiceAsPdf**](AccountingApi.md#getInvoiceAsPdf) | **GET** /Invoices/{InvoiceID}/pdf | Allows you to retrieve invoices or purchase bills as PDF files
[**getInvoiceAttachmentByFileName**](AccountingApi.md#getInvoiceAttachmentByFileName) | **GET** /Invoices/{InvoiceID}/Attachments/{FileName} | Allows you to retrieve Attachment on invoices or purchase bills by it&#39;s filename
[**getInvoiceAttachmentById**](AccountingApi.md#getInvoiceAttachmentById) | **GET** /Invoices/{InvoiceID}/Attachments/{AttachmentID} | Allows you to retrieve a specified Attachment on invoices or purchase bills by it&#39;s ID
[**getInvoiceAttachments**](AccountingApi.md#getInvoiceAttachments) | **GET** /Invoices/{InvoiceID}/Attachments | Allows you to retrieve Attachments on invoices or purchase bills
[**getInvoiceHistory**](AccountingApi.md#getInvoiceHistory) | **GET** /Invoices/{InvoiceID}/History | Allows you to retrieve a history records of an invoice
[**getInvoiceReminders**](AccountingApi.md#getInvoiceReminders) | **GET** /InvoiceReminders/Settings | Allows you to retrieve invoice reminder settings
[**getInvoices**](AccountingApi.md#getInvoices) | **GET** /Invoices | Allows you to retrieve any sales invoices or purchase bills
[**getItem**](AccountingApi.md#getItem) | **GET** /Items/{ItemID} | Allows you to retrieve a specified item
[**getItemHistory**](AccountingApi.md#getItemHistory) | **GET** /Items/{ItemID}/History | Allows you to retrieve history for items
[**getItems**](AccountingApi.md#getItems) | **GET** /Items | Allows you to retrieve any items
[**getJournal**](AccountingApi.md#getJournal) | **GET** /Journals/{JournalID} | Allows you to retrieve a specified journals.
[**getJournals**](AccountingApi.md#getJournals) | **GET** /Journals | Allows you to retrieve any journals.
[**getLinkedTransaction**](AccountingApi.md#getLinkedTransaction) | **GET** /LinkedTransactions/{LinkedTransactionID} | Allows you to retrieve a specified linked transactions (billable expenses)
[**getLinkedTransactions**](AccountingApi.md#getLinkedTransactions) | **GET** /LinkedTransactions | Retrieve linked transactions (billable expenses)
[**getManualJournal**](AccountingApi.md#getManualJournal) | **GET** /ManualJournals/{ManualJournalID} | Allows you to retrieve a specified manual journals
[**getManualJournalAttachmentByFileName**](AccountingApi.md#getManualJournalAttachmentByFileName) | **GET** /ManualJournals/{ManualJournalID}/Attachments/{FileName} | Allows you to retrieve specified Attachment on ManualJournal by file name
[**getManualJournalAttachmentById**](AccountingApi.md#getManualJournalAttachmentById) | **GET** /ManualJournals/{ManualJournalID}/Attachments/{AttachmentID} | Allows you to retrieve specified Attachment on ManualJournals
[**getManualJournalAttachments**](AccountingApi.md#getManualJournalAttachments) | **GET** /ManualJournals/{ManualJournalID}/Attachments | Allows you to retrieve Attachment for manual journals
[**getManualJournals**](AccountingApi.md#getManualJournals) | **GET** /ManualJournals | Allows you to retrieve any manual journals
[**getOnlineInvoice**](AccountingApi.md#getOnlineInvoice) | **GET** /Invoices/{InvoiceID}/OnlineInvoice | Allows you to retrieve a URL to an online invoice
[**getOrganisationCISSettings**](AccountingApi.md#getOrganisationCISSettings) | **GET** /Organisation/{OrganisationID}/CISSettings | Allows you To verify if an organisation is using contruction industry scheme, you can retrieve the CIS settings for the organistaion.
[**getOrganisations**](AccountingApi.md#getOrganisations) | **GET** /Organisation | Allows you to retrieve Organisation details
[**getOverpayment**](AccountingApi.md#getOverpayment) | **GET** /Overpayments/{OverpaymentID} | Allows you to retrieve a specified overpayments
[**getOverpaymentHistory**](AccountingApi.md#getOverpaymentHistory) | **GET** /Overpayments/{OverpaymentID}/History | Allows you to retrieve a history records of an Overpayment
[**getOverpayments**](AccountingApi.md#getOverpayments) | **GET** /Overpayments | Allows you to retrieve overpayments
[**getPayment**](AccountingApi.md#getPayment) | **GET** /Payments/{PaymentID} | Allows you to retrieve a specified payment for invoices and credit notes
[**getPaymentHistory**](AccountingApi.md#getPaymentHistory) | **GET** /Payments/{PaymentID}/History | Allows you to retrieve history records of a payment
[**getPaymentServices**](AccountingApi.md#getPaymentServices) | **GET** /PaymentServices | Allows you to retrieve payment services
[**getPayments**](AccountingApi.md#getPayments) | **GET** /Payments | Allows you to retrieve payments for invoices and credit notes
[**getPrepayment**](AccountingApi.md#getPrepayment) | **GET** /Prepayments/{PrepaymentID} | Allows you to retrieve a specified prepayments
[**getPrepaymentHistory**](AccountingApi.md#getPrepaymentHistory) | **GET** /Prepayments/{PrepaymentID}/History | Allows you to retrieve a history records of an Prepayment
[**getPrepayments**](AccountingApi.md#getPrepayments) | **GET** /Prepayments | Allows you to retrieve prepayments
[**getPurchaseOrder**](AccountingApi.md#getPurchaseOrder) | **GET** /PurchaseOrders/{PurchaseOrderID} | Allows you to retrieve a specified purchase orders
[**getPurchaseOrderHistory**](AccountingApi.md#getPurchaseOrderHistory) | **GET** /PurchaseOrders/{PurchaseOrderID}/History | Allows you to retrieve history for PurchaseOrder
[**getPurchaseOrders**](AccountingApi.md#getPurchaseOrders) | **GET** /PurchaseOrders | Allows you to retrieve purchase orders
[**getReceipt**](AccountingApi.md#getReceipt) | **GET** /Receipts/{ReceiptID} | Allows you to retrieve a specified draft expense claim receipts
[**getReceiptAttachmentByFileName**](AccountingApi.md#getReceiptAttachmentByFileName) | **GET** /Receipts/{ReceiptID}/Attachments/{FileName} | Allows you to retrieve Attachments on expense claim receipts by file name
[**getReceiptAttachmentById**](AccountingApi.md#getReceiptAttachmentById) | **GET** /Receipts/{ReceiptID}/Attachments/{AttachmentID} | Allows you to retrieve Attachments on expense claim receipts by ID
[**getReceiptAttachments**](AccountingApi.md#getReceiptAttachments) | **GET** /Receipts/{ReceiptID}/Attachments | Allows you to retrieve Attachments for expense claim receipts
[**getReceiptHistory**](AccountingApi.md#getReceiptHistory) | **GET** /Receipts/{ReceiptID}/History | Allows you to retrieve a history records of an Receipt
[**getReceipts**](AccountingApi.md#getReceipts) | **GET** /Receipts | Allows you to retrieve draft expense claim receipts for any user
[**getRepeatingInvoice**](AccountingApi.md#getRepeatingInvoice) | **GET** /RepeatingInvoices/{RepeatingInvoiceID} | Allows you to retrieve a specified repeating invoice
[**getRepeatingInvoiceAttachmentByFileName**](AccountingApi.md#getRepeatingInvoiceAttachmentByFileName) | **GET** /RepeatingInvoices/{RepeatingInvoiceID}/Attachments/{FileName} | Allows you to retrieve specified attachment on repeating invoices by file name
[**getRepeatingInvoiceAttachmentById**](AccountingApi.md#getRepeatingInvoiceAttachmentById) | **GET** /RepeatingInvoices/{RepeatingInvoiceID}/Attachments/{AttachmentID} | Allows you to retrieve a specified Attachments on repeating invoices
[**getRepeatingInvoiceAttachments**](AccountingApi.md#getRepeatingInvoiceAttachments) | **GET** /RepeatingInvoices/{RepeatingInvoiceID}/Attachments | Allows you to retrieve Attachments on repeating invoice
[**getRepeatingInvoiceHistory**](AccountingApi.md#getRepeatingInvoiceHistory) | **GET** /RepeatingInvoices/{RepeatingInvoiceID}/History | Allows you to retrieve history for a repeating invoice
[**getRepeatingInvoices**](AccountingApi.md#getRepeatingInvoices) | **GET** /RepeatingInvoices | Allows you to retrieve any repeating invoices
[**getReportAgedPayablesByContact**](AccountingApi.md#getReportAgedPayablesByContact) | **GET** /Reports/AgedPayablesByContact | Allows you to retrieve report for AgedPayablesByContact
[**getReportAgedReceivablesByContact**](AccountingApi.md#getReportAgedReceivablesByContact) | **GET** /Reports/AgedReceivablesByContact | Allows you to retrieve report for AgedReceivablesByContact
[**getReportBASorGST**](AccountingApi.md#getReportBASorGST) | **GET** /Reports/{ReportID} | Allows you to retrieve report for BAS only valid for AU orgs
[**getReportBASorGSTList**](AccountingApi.md#getReportBASorGSTList) | **GET** /Reports | Allows you to retrieve report for BAS only valid for AU orgs
[**getReportBalanceSheet**](AccountingApi.md#getReportBalanceSheet) | **GET** /Reports/BalanceSheet | Allows you to retrieve report for BalanceSheet
[**getReportBankSummary**](AccountingApi.md#getReportBankSummary) | **GET** /Reports/BankSummary | Allows you to retrieve report for BankSummary
[**getReportBudgetSummary**](AccountingApi.md#getReportBudgetSummary) | **GET** /Reports/BudgetSummary | Allows you to retrieve report for Budget Summary
[**getReportExecutiveSummary**](AccountingApi.md#getReportExecutiveSummary) | **GET** /Reports/ExecutiveSummary | Allows you to retrieve report for ExecutiveSummary
[**getReportProfitAndLoss**](AccountingApi.md#getReportProfitAndLoss) | **GET** /Reports/ProfitAndLoss | Allows you to retrieve report for ProfitAndLoss
[**getReportTenNinetyNine**](AccountingApi.md#getReportTenNinetyNine) | **GET** /Reports/TenNinetyNine | Allows you to retrieve report for TenNinetyNine
[**getReportTrialBalance**](AccountingApi.md#getReportTrialBalance) | **GET** /Reports/TrialBalance | Allows you to retrieve report for TrialBalance
[**getTaxRates**](AccountingApi.md#getTaxRates) | **GET** /TaxRates | Allows you to retrieve Tax Rates
[**getTrackingCategories**](AccountingApi.md#getTrackingCategories) | **GET** /TrackingCategories | Allows you to retrieve tracking categories and options
[**getTrackingCategory**](AccountingApi.md#getTrackingCategory) | **GET** /TrackingCategories/{TrackingCategoryID} | Allows you to retrieve tracking categories and options for specified category
[**getUser**](AccountingApi.md#getUser) | **GET** /Users/{UserID} | Allows you to retrieve a specified user
[**getUsers**](AccountingApi.md#getUsers) | **GET** /Users | Allows you to retrieve users
[**updateAccount**](AccountingApi.md#updateAccount) | **POST** /Accounts/{AccountID} | Allows you to update a chart of accounts
[**updateAccountAttachmentByFileName**](AccountingApi.md#updateAccountAttachmentByFileName) | **POST** /Accounts/{AccountID}/Attachments/{FileName} | Allows you to update Attachment on Account by Filename
[**updateBankTransaction**](AccountingApi.md#updateBankTransaction) | **POST** /BankTransactions/{BankTransactionID} | Allows you to update a single spend or receive money transaction
[**updateBankTransactionAttachmentByFileName**](AccountingApi.md#updateBankTransactionAttachmentByFileName) | **POST** /BankTransactions/{BankTransactionID}/Attachments/{FileName} | Allows you to update an Attachment on BankTransaction by Filename
[**updateBankTransferAttachmentByFileName**](AccountingApi.md#updateBankTransferAttachmentByFileName) | **POST** /BankTransfers/{BankTransferID}/Attachments/{FileName} | 
[**updateContact**](AccountingApi.md#updateContact) | **POST** /Contacts/{ContactID} | 
[**updateContactAttachmentByFileName**](AccountingApi.md#updateContactAttachmentByFileName) | **POST** /Contacts/{ContactID}/Attachments/{FileName} | 
[**updateContactGroup**](AccountingApi.md#updateContactGroup) | **POST** /ContactGroups/{ContactGroupID} | Allows you to update a Contract Group
[**updateCreditNote**](AccountingApi.md#updateCreditNote) | **POST** /CreditNotes/{CreditNoteID} | Allows you to update a specific credit note
[**updateCreditNoteAttachmentByFileName**](AccountingApi.md#updateCreditNoteAttachmentByFileName) | **POST** /CreditNotes/{CreditNoteID}/Attachments/{FileName} | Allows you to update Attachments on CreditNote by file name
[**updateEmployee**](AccountingApi.md#updateEmployee) | **POST** /Employees/{EmployeeID} | Allows you to update a specific employee used in Xero payrun
[**updateExpenseClaim**](AccountingApi.md#updateExpenseClaim) | **POST** /ExpenseClaims/{ExpenseClaimID} | Allows you to update specified expense claims
[**updateInvoice**](AccountingApi.md#updateInvoice) | **POST** /Invoices/{InvoiceID} | Allows you to update a specified sales invoices or purchase bills
[**updateInvoiceAttachmentByFileName**](AccountingApi.md#updateInvoiceAttachmentByFileName) | **POST** /Invoices/{InvoiceID}/Attachments/{FileName} | Allows you to update Attachment on invoices or purchase bills by it&#39;s filename
[**updateItem**](AccountingApi.md#updateItem) | **POST** /Items/{ItemID} | Allows you to udpate a specified item
[**updateLinkedTransaction**](AccountingApi.md#updateLinkedTransaction) | **POST** /LinkedTransactions/{LinkedTransactionID} | Allows you to update a specified linked transactions (billable expenses)
[**updateManualJournal**](AccountingApi.md#updateManualJournal) | **POST** /ManualJournals/{ManualJournalID} | Allows you to update a specified manual journal
[**updateManualJournalAttachmentByFileName**](AccountingApi.md#updateManualJournalAttachmentByFileName) | **POST** /ManualJournals/{ManualJournalID}/Attachments/{FileName} | Allows you to update a specified Attachment on ManualJournal by file name
[**updatePurchaseOrder**](AccountingApi.md#updatePurchaseOrder) | **POST** /PurchaseOrders/{PurchaseOrderID} | Allows you to update a specified purchase order
[**updateReceipt**](AccountingApi.md#updateReceipt) | **POST** /Receipts/{ReceiptID} | Allows you to retrieve a specified draft expense claim receipts
[**updateReceiptAttachmentByFileName**](AccountingApi.md#updateReceiptAttachmentByFileName) | **POST** /Receipts/{ReceiptID}/Attachments/{FileName} | Allows you to update Attachment on expense claim receipts by file name
[**updateRepeatingInvoiceAttachmentByFileName**](AccountingApi.md#updateRepeatingInvoiceAttachmentByFileName) | **POST** /RepeatingInvoices/{RepeatingInvoiceID}/Attachments/{FileName} | Allows you to update specified attachment on repeating invoices by file name
[**updateTaxRate**](AccountingApi.md#updateTaxRate) | **POST** /TaxRates | Allows you to update Tax Rates
[**updateTrackingCategory**](AccountingApi.md#updateTrackingCategory) | **POST** /TrackingCategories/{TrackingCategoryID} | Allows you to update tracking categories



## createAccount

> \Consilience\XeroAccounting\Sdk\Model\Accounts createAccount($account)

Allows you to create a new chart of accounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account = { "Code":"123456", "Name":"Foobar", "Type":"EXPENSE", "Description":"Hello World" }; // \Consilience\XeroAccounting\Sdk\Model\Account | Request of type Account

try {
    $result = $apiInstance->createAccount($account);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account** | [**\Consilience\XeroAccounting\Sdk\Model\Account**](../Model/Account.md)| Request of type Account |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Accounts**](../Model/Accounts.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createAccountAttachmentByFileName

> \Consilience\XeroAccounting\Sdk\Model\Attachments createAccountAttachmentByFileName($accountID, $fileName, $body)

Allows you to create Attachment on Account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountID = 'accountID_example'; // string | Unique identifier for Account object
$fileName = 'fileName_example'; // string | Name of the attachment
$body = 'body_example'; // string | Byte array of file in body of request

try {
    $result = $apiInstance->createAccountAttachmentByFileName($accountID, $fileName, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createAccountAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountID** | [**string**](../Model/.md)| Unique identifier for Account object |
 **fileName** | **string**| Name of the attachment |
 **body** | **string**| Byte array of file in body of request |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Attachments**](../Model/Attachments.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/octet-stream
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createBankTransaction

> \Consilience\XeroAccounting\Sdk\Model\BankTransactions createBankTransaction($bankTransactions, $summarizeErrors)

Allows you to create a spend or receive money transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bankTransactions = { "BankTransactions":[ { "Type":"SPEND", "Contact":{ "ContactID":"5cc8cf28-567e-4d43-b287-687cfcaec47c" }, "Lineitems":[ { "Description":"Foobar", "Quantity":1.0, "UnitAmount":20.0, "AccountCode":"400" } ], "BankAccount":{ "Code":"088" } } ] }; // \Consilience\XeroAccounting\Sdk\Model\BankTransactions | 
$summarizeErrors = True; // bool | response format that shows validation errors for each bank transaction

try {
    $result = $apiInstance->createBankTransaction($bankTransactions, $summarizeErrors);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createBankTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bankTransactions** | [**\Consilience\XeroAccounting\Sdk\Model\BankTransactions**](../Model/BankTransactions.md)|  |
 **summarizeErrors** | **bool**| response format that shows validation errors for each bank transaction | [optional]

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\BankTransactions**](../Model/BankTransactions.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createBankTransactionAttachmentByFileName

> \Consilience\XeroAccounting\Sdk\Model\Attachments createBankTransactionAttachmentByFileName($bankTransactionID, $fileName, $body)

Allows you to createa an Attachment on BankTransaction by Filename

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bankTransactionID = 'bankTransactionID_example'; // string | Xero generated unique identifier for a bank transaction
$fileName = 'fileName_example'; // string | The name of the file being attached
$body = 'body_example'; // string | Byte array of file in body of request

try {
    $result = $apiInstance->createBankTransactionAttachmentByFileName($bankTransactionID, $fileName, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createBankTransactionAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bankTransactionID** | [**string**](../Model/.md)| Xero generated unique identifier for a bank transaction |
 **fileName** | **string**| The name of the file being attached |
 **body** | **string**| Byte array of file in body of request |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Attachments**](../Model/Attachments.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/octet-stream
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createBankTransactionHistoryRecord

> \Consilience\XeroAccounting\Sdk\Model\HistoryRecords createBankTransactionHistoryRecord($bankTransactionID, $historyRecords)

Allows you to create history record for a bank transactions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bankTransactionID = 'bankTransactionID_example'; // string | Xero generated unique identifier for a bank transaction
$historyRecords = new \Consilience\XeroAccounting\Sdk\Model\HistoryRecords(); // \Consilience\XeroAccounting\Sdk\Model\HistoryRecords | 

try {
    $result = $apiInstance->createBankTransactionHistoryRecord($bankTransactionID, $historyRecords);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createBankTransactionHistoryRecord: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bankTransactionID** | [**string**](../Model/.md)| Xero generated unique identifier for a bank transaction |
 **historyRecords** | [**\Consilience\XeroAccounting\Sdk\Model\HistoryRecords**](../Model/HistoryRecords.md)|  |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createBankTransfer

> \Consilience\XeroAccounting\Sdk\Model\BankTransfers createBankTransfer($bankTransfers)

Allows you to create a bank transfers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bankTransfers = { "BankTransfers":[ { "FromBankAccount":{ "Code":"090", "Name":"My Savings", "AccountID":"7e5e243b-9fcd-4aef-8e3a-c70be1e39bfa", "Type":"BANK", "BankAccountNumber":"123455", "Status":"ACTIVE", "BankAccountType":"BANK", "CurrencyCode":"USD", "TaxType":"NONE", "EnablePaymentsToAccount":false, "ShowInExpenseClaims":false, "Class":"ASSET", "ReportingCode":"ASS", "ReportingCodeName":"Assets", "HasAttachments":false, "UpdatedDateUTC":"2016-10-17T13:45:33.993-07:00" }, "ToBankAccount":{ "Code":"088", "Name":"Business Wells Fargo", "AccountID":"6f7594f2-f059-4d56-9e67-47ac9733bfe9", "Type":"BANK", "BankAccountNumber":"123455", "Status":"ACTIVE", "BankAccountType":"BANK", "CurrencyCode":"USD", "TaxType":"NONE", "EnablePaymentsToAccount":false, "ShowInExpenseClaims":false, "Class":"ASSET", "ReportingCode":"ASS", "ReportingCodeName":"Assets", "HasAttachments":false, "UpdatedDateUTC":"2016-06-03T08:31:14.517-07:00" }, "Amount":"50.00" } ] }; // \Consilience\XeroAccounting\Sdk\Model\BankTransfers | 

try {
    $result = $apiInstance->createBankTransfer($bankTransfers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createBankTransfer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bankTransfers** | [**\Consilience\XeroAccounting\Sdk\Model\BankTransfers**](../Model/BankTransfers.md)|  |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\BankTransfers**](../Model/BankTransfers.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createBankTransferAttachmentByFileName

> \Consilience\XeroAccounting\Sdk\Model\Attachments createBankTransferAttachmentByFileName($bankTransferID, $fileName, $body)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bankTransferID = 'bankTransferID_example'; // string | Xero generated unique identifier for a bank transfer
$fileName = 'fileName_example'; // string | The name of the file being attached to a Bank Transfer
$body = 'body_example'; // string | Byte array of file in body of request

try {
    $result = $apiInstance->createBankTransferAttachmentByFileName($bankTransferID, $fileName, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createBankTransferAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bankTransferID** | [**string**](../Model/.md)| Xero generated unique identifier for a bank transfer |
 **fileName** | **string**| The name of the file being attached to a Bank Transfer |
 **body** | **string**| Byte array of file in body of request |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Attachments**](../Model/Attachments.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/octet-stream
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createBankTransferHistoryRecord

> \Consilience\XeroAccounting\Sdk\Model\HistoryRecords createBankTransferHistoryRecord($bankTransferID, $historyRecords)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bankTransferID = 'bankTransferID_example'; // string | Xero generated unique identifier for a bank transfer
$historyRecords = new \Consilience\XeroAccounting\Sdk\Model\HistoryRecords(); // \Consilience\XeroAccounting\Sdk\Model\HistoryRecords | 

try {
    $result = $apiInstance->createBankTransferHistoryRecord($bankTransferID, $historyRecords);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createBankTransferHistoryRecord: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bankTransferID** | [**string**](../Model/.md)| Xero generated unique identifier for a bank transfer |
 **historyRecords** | [**\Consilience\XeroAccounting\Sdk\Model\HistoryRecords**](../Model/HistoryRecords.md)|  |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createBatchPayment

> \Consilience\XeroAccounting\Sdk\Model\BatchPayments createBatchPayment($batchPayments)

Create one or many BatchPayments for invoices

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$batchPayments = { "BatchPayments":[ { "Account":{ "AccountID":"5ec2f302-cd60-4f8b-a915-9229dd45e6fa" }, "Reference":"Foobar38515", "Date":"2019-02-22", "Amount":3.0, "Payments":[ { "Invoice":{ "LineItems":[
], "InvoiceID":"e6039672-b161-40cd-b07b-a0178e7186ad" }, "Account":{ "AccountID":"5ec2f302-cd60-4f8b-a915-9229dd45e6fa" }, "Date":"2019-02-22", "Amount":1.0 }, { "Invoice":{ "LineItems":[
], "InvoiceID":"e4abafb4-1f5b-4d9f-80b3-9a7b815bc302" }, "Account":{ "AccountID":"5ec2f302-cd60-4f8b-a915-9229dd45e6fa" }, "Date":"2019-02-22", "Amount":1.0 }, { "Invoice":{ "LineItems":[
], "InvoiceID":"3323652c-155e-433b-8a73-4dde7cfbf410" }, "Account":{ "AccountID":"5ec2f302-cd60-4f8b-a915-9229dd45e6fa" }, "Date":"2019-02-22", "Amount":1.0 } ] } ] }; // \Consilience\XeroAccounting\Sdk\Model\BatchPayments | Request of type BatchPayments containing a Payments array with one or more Payment objects

try {
    $result = $apiInstance->createBatchPayment($batchPayments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createBatchPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batchPayments** | [**\Consilience\XeroAccounting\Sdk\Model\BatchPayments**](../Model/BatchPayments.md)| Request of type BatchPayments containing a Payments array with one or more Payment objects |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\BatchPayments**](../Model/BatchPayments.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createBatchPaymentHistoryRecord

> \Consilience\XeroAccounting\Sdk\Model\HistoryRecords createBatchPaymentHistoryRecord($batchPaymentID, $historyRecords)

Allows you to create a history record for a Batch Payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$batchPaymentID = 'batchPaymentID_example'; // string | Unique identifier for BatchPayment
$historyRecords = { "HistoryRecords":[ { "Details":"Hello World" } ] }; // \Consilience\XeroAccounting\Sdk\Model\HistoryRecords | 

try {
    $result = $apiInstance->createBatchPaymentHistoryRecord($batchPaymentID, $historyRecords);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createBatchPaymentHistoryRecord: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batchPaymentID** | [**string**](../Model/.md)| Unique identifier for BatchPayment |
 **historyRecords** | [**\Consilience\XeroAccounting\Sdk\Model\HistoryRecords**](../Model/HistoryRecords.md)|  |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createBrandingThemePaymentServices

> \Consilience\XeroAccounting\Sdk\Model\PaymentServices createBrandingThemePaymentServices($brandingThemeID, $paymentService)

Allow for the creation of new custom payment service for specified Branding Theme

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$brandingThemeID = 'brandingThemeID_example'; // string | Unique identifier for a Branding Theme
$paymentService = { "PaymentServiceID":"dede7858-14e3-4a46-bf95-4d4cc491e645", "PaymentServiceName":"ACME Payments", "PaymentServiceUrl":"https://www.payupnow.com/", "PayNowText":"Pay Now" }; // \Consilience\XeroAccounting\Sdk\Model\PaymentService | 

try {
    $result = $apiInstance->createBrandingThemePaymentServices($brandingThemeID, $paymentService);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createBrandingThemePaymentServices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **brandingThemeID** | [**string**](../Model/.md)| Unique identifier for a Branding Theme |
 **paymentService** | [**\Consilience\XeroAccounting\Sdk\Model\PaymentService**](../Model/PaymentService.md)|  |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\PaymentServices**](../Model/PaymentServices.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createContact

> \Consilience\XeroAccounting\Sdk\Model\Contacts createContact($contact)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contact = { "Name":"Foo9987", "EmailAddress":"sid32476@blah.com", "Phones":[ { "PhoneType":"MOBILE", "PhoneNumber":"555-1212", "PhoneAreaCode":"415" } ], "PaymentTerms":{ "Bills":{ "Day":15, "Type":"OFCURRENTMONTH" }, "Sales":{ "Day":10, "Type":"DAYSAFTERBILLMONTH" } } }; // \Consilience\XeroAccounting\Sdk\Model\Contact | 

try {
    $result = $apiInstance->createContact($contact);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact** | [**\Consilience\XeroAccounting\Sdk\Model\Contact**](../Model/Contact.md)|  |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Contacts**](../Model/Contacts.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createContactAttachmentByFileName

> \Consilience\XeroAccounting\Sdk\Model\Attachments createContactAttachmentByFileName($contactID, $fileName, $body)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contactID = 'contactID_example'; // string | Unique identifier for a Contact
$fileName = 'fileName_example'; // string | Name for the file you are attaching
$body = 'body_example'; // string | Byte array of file in body of request

try {
    $result = $apiInstance->createContactAttachmentByFileName($contactID, $fileName, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createContactAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactID** | [**string**](../Model/.md)| Unique identifier for a Contact |
 **fileName** | **string**| Name for the file you are attaching |
 **body** | **string**| Byte array of file in body of request |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Attachments**](../Model/Attachments.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/octet-stream
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createContactGroup

> \Consilience\XeroAccounting\Sdk\Model\ContactGroups createContactGroup($contactGroups)

Allows you to create a contact group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contactGroups = { "ContactGroups":[ { "Name":"Suppliers" } ] }; // \Consilience\XeroAccounting\Sdk\Model\ContactGroups | 

try {
    $result = $apiInstance->createContactGroup($contactGroups);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createContactGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactGroups** | [**\Consilience\XeroAccounting\Sdk\Model\ContactGroups**](../Model/ContactGroups.md)|  | [optional]

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\ContactGroups**](../Model/ContactGroups.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createContactGroupContacts

> \Consilience\XeroAccounting\Sdk\Model\Contacts createContactGroupContacts($contactGroupID, $contacts)

Allows you to add Contacts to a Contract Group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contactGroupID = 'contactGroupID_example'; // string | Unique identifier for a Contact Group
$contacts = { "Contacts":[ { "ContactID":"a3675fc4-f8dd-4f03-ba5b-f1870566bcd7" }, { "ContactID":"4e1753b9-018a-4775-b6aa-1bc7871cfee3" } ] }; // \Consilience\XeroAccounting\Sdk\Model\Contacts | 

try {
    $result = $apiInstance->createContactGroupContacts($contactGroupID, $contacts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createContactGroupContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactGroupID** | [**string**](../Model/.md)| Unique identifier for a Contact Group |
 **contacts** | [**\Consilience\XeroAccounting\Sdk\Model\Contacts**](../Model/Contacts.md)|  | [optional]

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Contacts**](../Model/Contacts.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createContactHistory

> \Consilience\XeroAccounting\Sdk\Model\HistoryRecords createContactHistory($contactID, $historyRecords)

Allows you to retrieve a history records of an Contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contactID = 'contactID_example'; // string | Unique identifier for a Contact
$historyRecords = { "HistoryRecords":[ { "Details":"Hello World" } ] }; // \Consilience\XeroAccounting\Sdk\Model\HistoryRecords | 

try {
    $result = $apiInstance->createContactHistory($contactID, $historyRecords);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createContactHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactID** | [**string**](../Model/.md)| Unique identifier for a Contact |
 **historyRecords** | [**\Consilience\XeroAccounting\Sdk\Model\HistoryRecords**](../Model/HistoryRecords.md)|  |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createCreditNote

> \Consilience\XeroAccounting\Sdk\Model\CreditNotes createCreditNote($summarizeErrors, $creditNotes)

Allows you to create a credit note

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$summarizeErrors = True; // bool | shows validation errors for each credit note
$creditNotes = { "CreditNotes":[ { "Type":"ACCPAYCREDIT", "Contact":{ "ContactID":"430fa14a-f945-44d3-9f97-5df5e28441b8" }, "Date":"2019-01-05", "LineItems":[ { "Description":"Foobar", "Quantity":2.0, "UnitAmount":20.0, "AccountCode":"400" } ] } ] }; // \Consilience\XeroAccounting\Sdk\Model\CreditNotes | 

try {
    $result = $apiInstance->createCreditNote($summarizeErrors, $creditNotes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createCreditNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **summarizeErrors** | **bool**| shows validation errors for each credit note | [optional]
 **creditNotes** | [**\Consilience\XeroAccounting\Sdk\Model\CreditNotes**](../Model/CreditNotes.md)|  | [optional]

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\CreditNotes**](../Model/CreditNotes.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createCreditNoteAllocation

> \Consilience\XeroAccounting\Sdk\Model\Allocations createCreditNoteAllocation($creditNoteID, $allocations)

Allows you to create Allocation on CreditNote

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$creditNoteID = 'creditNoteID_example'; // string | Unique identifier for a Credit Note
$allocations = { "Allocations":[ { "Invoice":{ "LineItems":[
], "InvoiceID":"c45720a1-ade3-4a38-a064-d15489be6841" }, "Amount":1.0, "Date":"2019-03-05" } ] }; // \Consilience\XeroAccounting\Sdk\Model\Allocations | 

try {
    $result = $apiInstance->createCreditNoteAllocation($creditNoteID, $allocations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createCreditNoteAllocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **creditNoteID** | [**string**](../Model/.md)| Unique identifier for a Credit Note |
 **allocations** | [**\Consilience\XeroAccounting\Sdk\Model\Allocations**](../Model/Allocations.md)|  | [optional]

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Allocations**](../Model/Allocations.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createCreditNoteAttachmentByFileName

> \Consilience\XeroAccounting\Sdk\Model\Attachments createCreditNoteAttachmentByFileName($creditNoteID, $fileName, $body)

Allows you to create Attachments on CreditNote by file name

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$creditNoteID = 'creditNoteID_example'; // string | Unique identifier for a Credit Note
$fileName = 'fileName_example'; // string | Name of the file you are attaching to Credit Note
$body = 'body_example'; // string | Byte array of file in body of request

try {
    $result = $apiInstance->createCreditNoteAttachmentByFileName($creditNoteID, $fileName, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createCreditNoteAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **creditNoteID** | [**string**](../Model/.md)| Unique identifier for a Credit Note |
 **fileName** | **string**| Name of the file you are attaching to Credit Note |
 **body** | **string**| Byte array of file in body of request |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Attachments**](../Model/Attachments.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/octet-stream
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createCreditNoteHistory

> \Consilience\XeroAccounting\Sdk\Model\HistoryRecords createCreditNoteHistory($creditNoteID, $historyRecords)

Allows you to retrieve a history records of an CreditNote

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$creditNoteID = 'creditNoteID_example'; // string | Unique identifier for a Credit Note
$historyRecords = { "HistoryRecords":[ { "Details":"Hello World" } ] }; // \Consilience\XeroAccounting\Sdk\Model\HistoryRecords | 

try {
    $result = $apiInstance->createCreditNoteHistory($creditNoteID, $historyRecords);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createCreditNoteHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **creditNoteID** | [**string**](../Model/.md)| Unique identifier for a Credit Note |
 **historyRecords** | [**\Consilience\XeroAccounting\Sdk\Model\HistoryRecords**](../Model/HistoryRecords.md)|  |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createCurrency

> \Consilience\XeroAccounting\Sdk\Model\Currencies createCurrency($currencies)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$currencies = { "Currencies":[ { "Code":"USD", "Description":"United States Dollar" } ] }; // \Consilience\XeroAccounting\Sdk\Model\Currencies | 

try {
    $result = $apiInstance->createCurrency($currencies);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createCurrency: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currencies** | [**\Consilience\XeroAccounting\Sdk\Model\Currencies**](../Model/Currencies.md)|  |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Currencies**](../Model/Currencies.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createEmployee

> \Consilience\XeroAccounting\Sdk\Model\Employees createEmployee($employees)

Allows you to create new employees used in Xero payrun

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$employees = { "Employees":[ { "FirstName":"Nick", "LastName":"Fury", "ExternalLink":{ "Url":"http://twitter.com/#!/search/Nick+Fury" } } ] }; // \Consilience\XeroAccounting\Sdk\Model\Employees | 

try {
    $result = $apiInstance->createEmployee($employees);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createEmployee: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **employees** | [**\Consilience\XeroAccounting\Sdk\Model\Employees**](../Model/Employees.md)|  |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Employees**](../Model/Employees.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createExpenseClaim

> \Consilience\XeroAccounting\Sdk\Model\ExpenseClaims createExpenseClaim($expenseClaims, $summarizeErrors)

Allows you to retrieve expense claims

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$expenseClaims = { "ExpenseClaims":[ { "Status":"SUBMITTED", "User":{ "UserID":"d1164823-0ac1-41ad-987b-b4e30fe0b273" }, "Receipts":[ { "Lineitems":[
], "ReceiptID":"dc1c7f6d-0a4c-402f-acac-551d62ce5816" } ] } ] }; // \Consilience\XeroAccounting\Sdk\Model\ExpenseClaims | 
$summarizeErrors = True; // bool | shows validation errors for each expense claim

try {
    $result = $apiInstance->createExpenseClaim($expenseClaims, $summarizeErrors);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createExpenseClaim: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **expenseClaims** | [**\Consilience\XeroAccounting\Sdk\Model\ExpenseClaims**](../Model/ExpenseClaims.md)|  |
 **summarizeErrors** | **bool**| shows validation errors for each expense claim | [optional]

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\ExpenseClaims**](../Model/ExpenseClaims.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createExpenseClaimHistory

> \Consilience\XeroAccounting\Sdk\Model\HistoryRecords createExpenseClaimHistory($expenseClaimID, $historyRecords)

Allows you to create a history records of an ExpenseClaim

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$expenseClaimID = 'expenseClaimID_example'; // string | Unique identifier for a ExpenseClaim
$historyRecords = { "HistoryRecords":[ { "Details":"Hello World" } ] }; // \Consilience\XeroAccounting\Sdk\Model\HistoryRecords | 

try {
    $result = $apiInstance->createExpenseClaimHistory($expenseClaimID, $historyRecords);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createExpenseClaimHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **expenseClaimID** | [**string**](../Model/.md)| Unique identifier for a ExpenseClaim |
 **historyRecords** | [**\Consilience\XeroAccounting\Sdk\Model\HistoryRecords**](../Model/HistoryRecords.md)|  |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createInvoice

> \Consilience\XeroAccounting\Sdk\Model\Invoices createInvoice($invoices, $summarizeErrors)

Allows you to create any sales invoices or purchase bills

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invoices = { "Invoices":[ { "Type":"ACCREC", "Contact":{ "ContactID":"430fa14a-f945-44d3-9f97-5df5e28441b8" }, "LineItems":[ { "Description":"Acme Tires", "Quantity":2.0, "UnitAmount":20.0, "AccountCode":"200", "TaxType":"NONE", "LineAmount":40.0 } ], "Date":"2019-03-11", "DueDate":"2018-12-10", "Reference":"Website Design", "Status":"AUTHORISED" } ] }; // \Consilience\XeroAccounting\Sdk\Model\Invoices | 
$summarizeErrors = True; // bool | shows validation errors for each invoice

try {
    $result = $apiInstance->createInvoice($invoices, $summarizeErrors);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoices** | [**\Consilience\XeroAccounting\Sdk\Model\Invoices**](../Model/Invoices.md)|  |
 **summarizeErrors** | **bool**| shows validation errors for each invoice | [optional]

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Invoices**](../Model/Invoices.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createInvoiceAttachmentByFileName

> \Consilience\XeroAccounting\Sdk\Model\Attachments createInvoiceAttachmentByFileName($invoiceID, $fileName, $body)

Allows you to create an Attachment on invoices or purchase bills by it's filename

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invoiceID = 'invoiceID_example'; // string | Unique identifier for an Invoice
$fileName = 'fileName_example'; // string | Name of the file you are attaching
$body = 'body_example'; // string | Byte array of file in body of request

try {
    $result = $apiInstance->createInvoiceAttachmentByFileName($invoiceID, $fileName, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createInvoiceAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoiceID** | [**string**](../Model/.md)| Unique identifier for an Invoice |
 **fileName** | **string**| Name of the file you are attaching |
 **body** | **string**| Byte array of file in body of request |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Attachments**](../Model/Attachments.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/octet-stream
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createInvoiceHistory

> \Consilience\XeroAccounting\Sdk\Model\HistoryRecords createInvoiceHistory($invoiceID, $historyRecords)

Allows you to retrieve a history records of an invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invoiceID = 'invoiceID_example'; // string | Unique identifier for an Invoice
$historyRecords = { "HistoryRecords":[ { "Details":"Hello World" } ] }; // \Consilience\XeroAccounting\Sdk\Model\HistoryRecords | 

try {
    $result = $apiInstance->createInvoiceHistory($invoiceID, $historyRecords);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createInvoiceHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoiceID** | [**string**](../Model/.md)| Unique identifier for an Invoice |
 **historyRecords** | [**\Consilience\XeroAccounting\Sdk\Model\HistoryRecords**](../Model/HistoryRecords.md)|  |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createItem

> \Consilience\XeroAccounting\Sdk\Model\Items createItem($items)

Allows you to create an item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$items = { "Items":[ { "Code":"abc65591", "Name":"Hello11350", "Description":"foobar" } ] }; // \Consilience\XeroAccounting\Sdk\Model\Items | 

try {
    $result = $apiInstance->createItem($items);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **items** | [**\Consilience\XeroAccounting\Sdk\Model\Items**](../Model/Items.md)|  |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Items**](../Model/Items.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createItemHistory

> \Consilience\XeroAccounting\Sdk\Model\HistoryRecords createItemHistory($itemID, $historyRecords)

Allows you to create a history record for items

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$itemID = 'itemID_example'; // string | Unique identifier for an Item
$historyRecords = { "HistoryRecords":[ { "Details":"Hello World" } ] }; // \Consilience\XeroAccounting\Sdk\Model\HistoryRecords | 

try {
    $result = $apiInstance->createItemHistory($itemID, $historyRecords);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createItemHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **itemID** | [**string**](../Model/.md)| Unique identifier for an Item |
 **historyRecords** | [**\Consilience\XeroAccounting\Sdk\Model\HistoryRecords**](../Model/HistoryRecords.md)|  |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createLinkedTransaction

> \Consilience\XeroAccounting\Sdk\Model\LinkedTransactions createLinkedTransaction($linkedTransactions)

Allows you to create linked transactions (billable expenses)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$linkedTransactions = { "LinkedTransactions":[ { "SourceTransactionID":"a848644a-f20f-4630-98c3-386bd7505631", "SourceLineItemID":"b0df260d-3cc8-4ced-9bd6-41924f624ed3" } ] }; // \Consilience\XeroAccounting\Sdk\Model\LinkedTransactions | 

try {
    $result = $apiInstance->createLinkedTransaction($linkedTransactions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createLinkedTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **linkedTransactions** | [**\Consilience\XeroAccounting\Sdk\Model\LinkedTransactions**](../Model/LinkedTransactions.md)|  |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\LinkedTransactions**](../Model/LinkedTransactions.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createManualJournal

> \Consilience\XeroAccounting\Sdk\Model\ManualJournals createManualJournal($manualJournals)

Allows you to create a manual journal

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$manualJournals = { "ManualJournals":[ { "Narration":"Foo bar", "JournalLines":[ { "LineAmount":100.0, "AccountCode":"400", "Description":"Hello there" }, { "LineAmount":-100.0, "AccountCode":"400", "Description":"Goodbye", "Tracking":[ { "Name":"Simpsons", "Option":"Bart" } ] } ], "Date":"2019-03-14" } ] }; // \Consilience\XeroAccounting\Sdk\Model\ManualJournals | 

try {
    $result = $apiInstance->createManualJournal($manualJournals);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createManualJournal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manualJournals** | [**\Consilience\XeroAccounting\Sdk\Model\ManualJournals**](../Model/ManualJournals.md)|  |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\ManualJournals**](../Model/ManualJournals.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createManualJournalAttachmentByFileName

> \Consilience\XeroAccounting\Sdk\Model\Attachments createManualJournalAttachmentByFileName($manualJournalID, $fileName, $body)

Allows you to create a specified Attachment on ManualJournal by file name

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$manualJournalID = 'manualJournalID_example'; // string | Unique identifier for a ManualJournal
$fileName = 'fileName_example'; // string | The name of the file being attached to a ManualJournal
$body = 'body_example'; // string | Byte array of file in body of request

try {
    $result = $apiInstance->createManualJournalAttachmentByFileName($manualJournalID, $fileName, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createManualJournalAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manualJournalID** | [**string**](../Model/.md)| Unique identifier for a ManualJournal |
 **fileName** | **string**| The name of the file being attached to a ManualJournal |
 **body** | **string**| Byte array of file in body of request |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Attachments**](../Model/Attachments.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/octet-stream
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createOverpaymentAllocation

> \Consilience\XeroAccounting\Sdk\Model\Allocations createOverpaymentAllocation($overpaymentID, $allocations)

Allows you to retrieve Allocations for overpayments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$overpaymentID = 'overpaymentID_example'; // string | Unique identifier for a Overpayment
$allocations = { "Allocations":[ { "Invoice":{ "LineItems":[
], "InvoiceID":"c45720a1-ade3-4a38-a064-d15489be6841" }, "Amount":1.0, "Date":"2019-03-12" } ] }; // \Consilience\XeroAccounting\Sdk\Model\Allocations | 

try {
    $result = $apiInstance->createOverpaymentAllocation($overpaymentID, $allocations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createOverpaymentAllocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **overpaymentID** | [**string**](../Model/.md)| Unique identifier for a Overpayment |
 **allocations** | [**\Consilience\XeroAccounting\Sdk\Model\Allocations**](../Model/Allocations.md)|  |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Allocations**](../Model/Allocations.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createOverpaymentHistory

> \Consilience\XeroAccounting\Sdk\Model\HistoryRecords createOverpaymentHistory($overpaymentID, $historyRecords)

Allows you to create history records of an Overpayment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$overpaymentID = 'overpaymentID_example'; // string | Unique identifier for a Overpayment
$historyRecords = new \Consilience\XeroAccounting\Sdk\Model\HistoryRecords(); // \Consilience\XeroAccounting\Sdk\Model\HistoryRecords | 

try {
    $result = $apiInstance->createOverpaymentHistory($overpaymentID, $historyRecords);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createOverpaymentHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **overpaymentID** | [**string**](../Model/.md)| Unique identifier for a Overpayment |
 **historyRecords** | [**\Consilience\XeroAccounting\Sdk\Model\HistoryRecords**](../Model/HistoryRecords.md)|  |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createPayment

> \Consilience\XeroAccounting\Sdk\Model\Payments createPayment($payments)

Allows you to create payments for invoices and credit notes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$payments = { "Payments":[ { "Invoice":{ "LineItems":[
], "InvoiceID":"c7c37b83-ac95-45ea-88ba-8ad83a5f22fe" }, "Account":{ "Code":"970" }, "Date":"2019-03-12", "Amount":1.0 } ] }; // \Consilience\XeroAccounting\Sdk\Model\Payments | 

try {
    $result = $apiInstance->createPayment($payments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payments** | [**\Consilience\XeroAccounting\Sdk\Model\Payments**](../Model/Payments.md)|  |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Payments**](../Model/Payments.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createPaymentHistory

> \Consilience\XeroAccounting\Sdk\Model\HistoryRecords createPaymentHistory($paymentID, $historyRecords)

Allows you to create a history record for a payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$paymentID = 'paymentID_example'; // string | Unique identifier for a Payment
$historyRecords = { "HistoryRecords":[ { "Details":"Hello World" } ] }; // \Consilience\XeroAccounting\Sdk\Model\HistoryRecords | 

try {
    $result = $apiInstance->createPaymentHistory($paymentID, $historyRecords);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createPaymentHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paymentID** | [**string**](../Model/.md)| Unique identifier for a Payment |
 **historyRecords** | [**\Consilience\XeroAccounting\Sdk\Model\HistoryRecords**](../Model/HistoryRecords.md)|  |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createPaymentService

> \Consilience\XeroAccounting\Sdk\Model\PaymentServices createPaymentService($paymentServices)

Allows you to create payment services

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$paymentServices = { "PaymentServices":[ { "PaymentServiceName":"PayUpNow", "PaymentServiceUrl":"https://www.payupnow.com/", "PayNowText":"Time To Pay" } ] }; // \Consilience\XeroAccounting\Sdk\Model\PaymentServices | 

try {
    $result = $apiInstance->createPaymentService($paymentServices);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createPaymentService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paymentServices** | [**\Consilience\XeroAccounting\Sdk\Model\PaymentServices**](../Model/PaymentServices.md)|  |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\PaymentServices**](../Model/PaymentServices.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createPrepaymentAllocation

> \Consilience\XeroAccounting\Sdk\Model\Allocations createPrepaymentAllocation($prepaymentID, $allocations)

Allows you to create an Allocation for prepayments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$prepaymentID = 'prepaymentID_example'; // string | 
$allocations = { "Allocations":[ { "Invoice":{ "LineItems":[
], "InvoiceID":"c7c37b83-ac95-45ea-88ba-8ad83a5f22fe" }, "Amount":1.0, "Date":"2019-03-13" } ] }; // \Consilience\XeroAccounting\Sdk\Model\Allocations | 

try {
    $result = $apiInstance->createPrepaymentAllocation($prepaymentID, $allocations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createPrepaymentAllocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **prepaymentID** | [**string**](../Model/.md)|  |
 **allocations** | [**\Consilience\XeroAccounting\Sdk\Model\Allocations**](../Model/Allocations.md)|  |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Allocations**](../Model/Allocations.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createPrepaymentHistory

> \Consilience\XeroAccounting\Sdk\Model\HistoryRecords createPrepaymentHistory($prepaymentID, $historyRecords)

Allows you to create a history record for an Prepayment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$prepaymentID = 'prepaymentID_example'; // string | Unique identifier for a PrePayment
$historyRecords = new \Consilience\XeroAccounting\Sdk\Model\HistoryRecords(); // \Consilience\XeroAccounting\Sdk\Model\HistoryRecords | 

try {
    $result = $apiInstance->createPrepaymentHistory($prepaymentID, $historyRecords);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createPrepaymentHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **prepaymentID** | [**string**](../Model/.md)| Unique identifier for a PrePayment |
 **historyRecords** | [**\Consilience\XeroAccounting\Sdk\Model\HistoryRecords**](../Model/HistoryRecords.md)|  |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createPurchaseOrder

> \Consilience\XeroAccounting\Sdk\Model\PurchaseOrders createPurchaseOrder($purchaseOrders, $summarizeErrors)

Allows you to create purchase orders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$purchaseOrders = { "PurchaseOrders":[ { "Contact":{ "ContactID":"430fa14a-f945-44d3-9f97-5df5e28441b8" }, "LineItems":[ { "Description":"Foobar", "Quantity":1.0, "UnitAmount":20.0, "AccountCode":"710" } ], "Date":"2019-03-13" } ] }; // \Consilience\XeroAccounting\Sdk\Model\PurchaseOrders | 
$summarizeErrors = True; // bool | shows validation errors for each purchase order.

try {
    $result = $apiInstance->createPurchaseOrder($purchaseOrders, $summarizeErrors);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createPurchaseOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **purchaseOrders** | [**\Consilience\XeroAccounting\Sdk\Model\PurchaseOrders**](../Model/PurchaseOrders.md)|  |
 **summarizeErrors** | **bool**| shows validation errors for each purchase order. | [optional]

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\PurchaseOrders**](../Model/PurchaseOrders.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createPurchaseOrderHistory

> \Consilience\XeroAccounting\Sdk\Model\HistoryRecords createPurchaseOrderHistory($purchaseOrderID, $historyRecords)

Allows you to create HistoryRecord for purchase orders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$purchaseOrderID = 'purchaseOrderID_example'; // string | Unique identifier for a PurchaseOrder
$historyRecords = { "HistoryRecords":[ { "Details":"Hello World" } ] }; // \Consilience\XeroAccounting\Sdk\Model\HistoryRecords | 

try {
    $result = $apiInstance->createPurchaseOrderHistory($purchaseOrderID, $historyRecords);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createPurchaseOrderHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **purchaseOrderID** | [**string**](../Model/.md)| Unique identifier for a PurchaseOrder |
 **historyRecords** | [**\Consilience\XeroAccounting\Sdk\Model\HistoryRecords**](../Model/HistoryRecords.md)|  |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createReceipt

> \Consilience\XeroAccounting\Sdk\Model\Receipts createReceipt($receipts)

Allows you to create draft expense claim receipts for any user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$receipts = { "Receipts":[ { "Contact":{ "ContactID":"430fa14a-f945-44d3-9f97-5df5e28441b8" }, "Lineitems":[ { "Description":"Foobar", "Quantity":2.0, "UnitAmount":20.0, "AccountCode":"400", "TaxType":"NONE", "LineAmount":40.0 } ], "User":{ "UserID":"d1164823-0ac1-41ad-987b-b4e30fe0b273" }, "LineAmountTypes":"NoTax", "Status":"DRAFT" } ] }; // \Consilience\XeroAccounting\Sdk\Model\Receipts | 

try {
    $result = $apiInstance->createReceipt($receipts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createReceipt: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receipts** | [**\Consilience\XeroAccounting\Sdk\Model\Receipts**](../Model/Receipts.md)|  |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Receipts**](../Model/Receipts.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createReceiptAttachmentByFileName

> \Consilience\XeroAccounting\Sdk\Model\Attachments createReceiptAttachmentByFileName($receiptID, $fileName, $body)

Allows you to create Attachment on expense claim receipts by file name

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$receiptID = 'receiptID_example'; // string | Unique identifier for a Receipt
$fileName = 'fileName_example'; // string | The name of the file being attached to the Receipt
$body = 'body_example'; // string | Byte array of file in body of request

try {
    $result = $apiInstance->createReceiptAttachmentByFileName($receiptID, $fileName, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createReceiptAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receiptID** | [**string**](../Model/.md)| Unique identifier for a Receipt |
 **fileName** | **string**| The name of the file being attached to the Receipt |
 **body** | **string**| Byte array of file in body of request |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Attachments**](../Model/Attachments.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/octet-stream
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createReceiptHistory

> \Consilience\XeroAccounting\Sdk\Model\HistoryRecords createReceiptHistory($receiptID, $historyRecords)

Allows you to retrieve a history records of an Receipt

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$receiptID = 'receiptID_example'; // string | Unique identifier for a Receipt
$historyRecords = new \Consilience\XeroAccounting\Sdk\Model\HistoryRecords(); // \Consilience\XeroAccounting\Sdk\Model\HistoryRecords | 

try {
    $result = $apiInstance->createReceiptHistory($receiptID, $historyRecords);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createReceiptHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receiptID** | [**string**](../Model/.md)| Unique identifier for a Receipt |
 **historyRecords** | [**\Consilience\XeroAccounting\Sdk\Model\HistoryRecords**](../Model/HistoryRecords.md)|  |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createRepeatingInvoiceAttachmentByFileName

> \Consilience\XeroAccounting\Sdk\Model\Attachments createRepeatingInvoiceAttachmentByFileName($repeatingInvoiceID, $fileName, $body)

Allows you to create attachment on repeating invoices by file name

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repeatingInvoiceID = 'repeatingInvoiceID_example'; // string | Unique identifier for a Repeating Invoice
$fileName = 'fileName_example'; // string | The name of the file being attached to a Repeating Invoice
$body = 'body_example'; // string | Byte array of file in body of request

try {
    $result = $apiInstance->createRepeatingInvoiceAttachmentByFileName($repeatingInvoiceID, $fileName, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createRepeatingInvoiceAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repeatingInvoiceID** | [**string**](../Model/.md)| Unique identifier for a Repeating Invoice |
 **fileName** | **string**| The name of the file being attached to a Repeating Invoice |
 **body** | **string**| Byte array of file in body of request |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Attachments**](../Model/Attachments.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/octet-stream
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createRepeatingInvoiceHistory

> \Consilience\XeroAccounting\Sdk\Model\HistoryRecords createRepeatingInvoiceHistory($repeatingInvoiceID, $historyRecords)

Allows you to create history for a repeating invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repeatingInvoiceID = 'repeatingInvoiceID_example'; // string | Unique identifier for a Repeating Invoice
$historyRecords = new \Consilience\XeroAccounting\Sdk\Model\HistoryRecords(); // \Consilience\XeroAccounting\Sdk\Model\HistoryRecords | 

try {
    $result = $apiInstance->createRepeatingInvoiceHistory($repeatingInvoiceID, $historyRecords);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createRepeatingInvoiceHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repeatingInvoiceID** | [**string**](../Model/.md)| Unique identifier for a Repeating Invoice |
 **historyRecords** | [**\Consilience\XeroAccounting\Sdk\Model\HistoryRecords**](../Model/HistoryRecords.md)|  |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createTaxRate

> \Consilience\XeroAccounting\Sdk\Model\TaxRates createTaxRate($taxRates)

Allows you to create Tax Rates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$taxRates = { "TaxRates":[ { "Name":"SDKTax29067", "TaxComponents":[ { "Name":"State Tax", "Rate":2.25 } ], "ReportTaxType":"INPUT" } ] }; // \Consilience\XeroAccounting\Sdk\Model\TaxRates | 

try {
    $result = $apiInstance->createTaxRate($taxRates);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createTaxRate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **taxRates** | [**\Consilience\XeroAccounting\Sdk\Model\TaxRates**](../Model/TaxRates.md)|  |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\TaxRates**](../Model/TaxRates.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createTrackingCategory

> \Consilience\XeroAccounting\Sdk\Model\TrackingCategories createTrackingCategory($trackingCategory)

Allows you to create tracking categories

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$trackingCategory = { "Name":"FooBar" }; // \Consilience\XeroAccounting\Sdk\Model\TrackingCategory | 

try {
    $result = $apiInstance->createTrackingCategory($trackingCategory);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createTrackingCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **trackingCategory** | [**\Consilience\XeroAccounting\Sdk\Model\TrackingCategory**](../Model/TrackingCategory.md)|  |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\TrackingCategories**](../Model/TrackingCategories.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createTrackingOptions

> \Consilience\XeroAccounting\Sdk\Model\TrackingOptions createTrackingOptions($trackingCategoryID, $trackingOption)

Allows you to create options for a specified tracking category

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$trackingCategoryID = 'trackingCategoryID_example'; // string | Unique identifier for a TrackingCategory
$trackingOption = { "Name":"Bar40423" }; // \Consilience\XeroAccounting\Sdk\Model\TrackingOption | 

try {
    $result = $apiInstance->createTrackingOptions($trackingCategoryID, $trackingOption);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->createTrackingOptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **trackingCategoryID** | [**string**](../Model/.md)| Unique identifier for a TrackingCategory |
 **trackingOption** | [**\Consilience\XeroAccounting\Sdk\Model\TrackingOption**](../Model/TrackingOption.md)|  |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\TrackingOptions**](../Model/TrackingOptions.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteAccount

> \Consilience\XeroAccounting\Sdk\Model\Accounts deleteAccount($accountID)

Allows you to delete a chart of accounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountID = 'accountID_example'; // string | Unique identifier for retrieving single object

try {
    $result = $apiInstance->deleteAccount($accountID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->deleteAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountID** | [**string**](../Model/.md)| Unique identifier for retrieving single object |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Accounts**](../Model/Accounts.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteContactGroupContact

> deleteContactGroupContact($contactGroupID, $contactID)

Allows you to delete a specific Contact from a Contract Group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contactGroupID = 'contactGroupID_example'; // string | Unique identifier for a Contact Group
$contactID = 'contactID_example'; // string | Unique identifier for a Contact

try {
    $apiInstance->deleteContactGroupContact($contactGroupID, $contactID);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->deleteContactGroupContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactGroupID** | [**string**](../Model/.md)| Unique identifier for a Contact Group |
 **contactID** | [**string**](../Model/.md)| Unique identifier for a Contact |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteContactGroupContacts

> deleteContactGroupContacts($contactGroupID)

Allows you to delete  all Contacts from a Contract Group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contactGroupID = 'contactGroupID_example'; // string | Unique identifier for a Contact Group

try {
    $apiInstance->deleteContactGroupContacts($contactGroupID);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->deleteContactGroupContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactGroupID** | [**string**](../Model/.md)| Unique identifier for a Contact Group |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteItem

> deleteItem($itemID)

Allows you to delete a specified item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$itemID = 'itemID_example'; // string | Unique identifier for an Item

try {
    $apiInstance->deleteItem($itemID);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->deleteItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **itemID** | [**string**](../Model/.md)| Unique identifier for an Item |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteLinkedTransaction

> deleteLinkedTransaction($linkedTransactionID)

Allows you to delete a specified linked transactions (billable expenses)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$linkedTransactionID = 'linkedTransactionID_example'; // string | Unique identifier for a LinkedTransaction

try {
    $apiInstance->deleteLinkedTransaction($linkedTransactionID);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->deleteLinkedTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **linkedTransactionID** | [**string**](../Model/.md)| Unique identifier for a LinkedTransaction |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deletePayment

> \Consilience\XeroAccounting\Sdk\Model\Payments deletePayment($paymentID, $payments)

Allows you to update a specified payment for invoices and credit notes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$paymentID = 'paymentID_example'; // string | Unique identifier for a Payment
$payments = { "Payments":[ { "Status":"DELETED" } ] }; // \Consilience\XeroAccounting\Sdk\Model\Payments | 

try {
    $result = $apiInstance->deletePayment($paymentID, $payments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->deletePayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paymentID** | [**string**](../Model/.md)| Unique identifier for a Payment |
 **payments** | [**\Consilience\XeroAccounting\Sdk\Model\Payments**](../Model/Payments.md)|  |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Payments**](../Model/Payments.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteTrackingCategory

> \Consilience\XeroAccounting\Sdk\Model\TrackingCategories deleteTrackingCategory($trackingCategoryID)

Allows you to delete tracking categories

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$trackingCategoryID = 'trackingCategoryID_example'; // string | Unique identifier for a TrackingCategory

try {
    $result = $apiInstance->deleteTrackingCategory($trackingCategoryID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->deleteTrackingCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **trackingCategoryID** | [**string**](../Model/.md)| Unique identifier for a TrackingCategory |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\TrackingCategories**](../Model/TrackingCategories.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteTrackingOptions

> \Consilience\XeroAccounting\Sdk\Model\TrackingOptions deleteTrackingOptions($trackingCategoryID, $trackingOptionID)

Allows you to delete a specified option for a specified tracking category

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$trackingCategoryID = 'trackingCategoryID_example'; // string | Unique identifier for a TrackingCategory
$trackingOptionID = 'trackingOptionID_example'; // string | Unique identifier for a Tracking Option

try {
    $result = $apiInstance->deleteTrackingOptions($trackingCategoryID, $trackingOptionID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->deleteTrackingOptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **trackingCategoryID** | [**string**](../Model/.md)| Unique identifier for a TrackingCategory |
 **trackingOptionID** | [**string**](../Model/.md)| Unique identifier for a Tracking Option |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\TrackingOptions**](../Model/TrackingOptions.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## emailInvoice

> emailInvoice($invoiceID, $requestEmpty)

Allows you to email a copy of invoice to related Contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invoiceID = 'invoiceID_example'; // string | Unique identifier for an Invoice
$requestEmpty = new \Consilience\XeroAccounting\Sdk\Model\RequestEmpty(); // \Consilience\XeroAccounting\Sdk\Model\RequestEmpty | 

try {
    $apiInstance->emailInvoice($invoiceID, $requestEmpty);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->emailInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoiceID** | [**string**](../Model/.md)| Unique identifier for an Invoice |
 **requestEmpty** | [**\Consilience\XeroAccounting\Sdk\Model\RequestEmpty**](../Model/RequestEmpty.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAccount

> \Consilience\XeroAccounting\Sdk\Model\Accounts getAccount($accountID)

Allows you to retrieve a single chart of accounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountID = 'accountID_example'; // string | Unique identifier for retrieving single object

try {
    $result = $apiInstance->getAccount($accountID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountID** | [**string**](../Model/.md)| Unique identifier for retrieving single object |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Accounts**](../Model/Accounts.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAccountAttachmentByFileName

> \SplFileObject getAccountAttachmentByFileName($accountID, $fileName, $contentType)

Allows you to retrieve Attachment on Account by Filename

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountID = 'accountID_example'; // string | Unique identifier for Account object
$fileName = 'fileName_example'; // string | Name of the attachment
$contentType = 'contentType_example'; // string | The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf

try {
    $result = $apiInstance->getAccountAttachmentByFileName($accountID, $fileName, $contentType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getAccountAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountID** | [**string**](../Model/.md)| Unique identifier for Account object |
 **fileName** | **string**| Name of the attachment |
 **contentType** | **string**| The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAccountAttachmentById

> \SplFileObject getAccountAttachmentById($accountID, $attachmentID, $contentType)

Allows you to retrieve specific Attachment on Account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountID = 'accountID_example'; // string | Unique identifier for Account object
$attachmentID = 'attachmentID_example'; // string | Unique identifier for Attachment object
$contentType = 'contentType_example'; // string | The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf

try {
    $result = $apiInstance->getAccountAttachmentById($accountID, $attachmentID, $contentType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getAccountAttachmentById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountID** | [**string**](../Model/.md)| Unique identifier for Account object |
 **attachmentID** | [**string**](../Model/.md)| Unique identifier for Attachment object |
 **contentType** | **string**| The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAccountAttachments

> \Consilience\XeroAccounting\Sdk\Model\Attachments getAccountAttachments($accountID)

Allows you to retrieve Attachments for accounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountID = 'accountID_example'; // string | Unique identifier for Account object

try {
    $result = $apiInstance->getAccountAttachments($accountID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getAccountAttachments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountID** | [**string**](../Model/.md)| Unique identifier for Account object |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Attachments**](../Model/Attachments.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAccounts

> \Consilience\XeroAccounting\Sdk\Model\Accounts getAccounts($ifModifiedSince, $where, $order)

Allows you to retrieve the full chart of accounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ifModifiedSince = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only records created or modified since this timestamp will be returned
$where = 'where_example'; // string | Filter by an any element
$order = 'order_example'; // string | Order by an any element

try {
    $result = $apiInstance->getAccounts($ifModifiedSince, $where, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getAccounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ifModifiedSince** | **\DateTime**| Only records created or modified since this timestamp will be returned | [optional]
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Accounts**](../Model/Accounts.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getBankTransaction

> \Consilience\XeroAccounting\Sdk\Model\BankTransactions getBankTransaction($bankTransactionID)

Allows you to retrieve a single spend or receive money transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bankTransactionID = 'bankTransactionID_example'; // string | Xero generated unique identifier for a bank transaction

try {
    $result = $apiInstance->getBankTransaction($bankTransactionID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getBankTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bankTransactionID** | [**string**](../Model/.md)| Xero generated unique identifier for a bank transaction |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\BankTransactions**](../Model/BankTransactions.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getBankTransactionAttachmentByFileName

> \SplFileObject getBankTransactionAttachmentByFileName($bankTransactionID, $fileName, $contentType)

Allows you to retrieve Attachments on BankTransaction by Filename

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bankTransactionID = 'bankTransactionID_example'; // string | Xero generated unique identifier for a bank transaction
$fileName = 'fileName_example'; // string | The name of the file being attached
$contentType = 'contentType_example'; // string | The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf

try {
    $result = $apiInstance->getBankTransactionAttachmentByFileName($bankTransactionID, $fileName, $contentType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getBankTransactionAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bankTransactionID** | [**string**](../Model/.md)| Xero generated unique identifier for a bank transaction |
 **fileName** | **string**| The name of the file being attached |
 **contentType** | **string**| The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getBankTransactionAttachmentById

> \SplFileObject getBankTransactionAttachmentById($bankTransactionID, $attachmentID, $contentType)

Allows you to retrieve Attachments on a specific BankTransaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bankTransactionID = 'bankTransactionID_example'; // string | Xero generated unique identifier for a bank transaction
$attachmentID = 'attachmentID_example'; // string | Xero generated unique identifier for an attachment
$contentType = 'contentType_example'; // string | The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf

try {
    $result = $apiInstance->getBankTransactionAttachmentById($bankTransactionID, $attachmentID, $contentType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getBankTransactionAttachmentById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bankTransactionID** | [**string**](../Model/.md)| Xero generated unique identifier for a bank transaction |
 **attachmentID** | [**string**](../Model/.md)| Xero generated unique identifier for an attachment |
 **contentType** | **string**| The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getBankTransactionAttachments

> \Consilience\XeroAccounting\Sdk\Model\Attachments getBankTransactionAttachments($bankTransactionID)

Allows you to retrieve any attachments to bank transactions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bankTransactionID = 'bankTransactionID_example'; // string | Xero generated unique identifier for a bank transaction

try {
    $result = $apiInstance->getBankTransactionAttachments($bankTransactionID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getBankTransactionAttachments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bankTransactionID** | [**string**](../Model/.md)| Xero generated unique identifier for a bank transaction |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Attachments**](../Model/Attachments.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getBankTransactions

> \Consilience\XeroAccounting\Sdk\Model\BankTransactions getBankTransactions($ifModifiedSince, $where, $order, $page, $unitdp)

Allows you to retrieve any spend or receive money transactions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ifModifiedSince = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only records created or modified since this timestamp will be returned
$where = 'where_example'; // string | Filter by an any element
$order = 'order_example'; // string | Order by an any element
$page = 56; // int | e.g. page=1 – Up to 100 bank transactions will be returned in a single API call with line items shown for each bank transaction
$unitdp = 56; // int | e.g. unitdp=4 – You can opt in to use four decimal places for unit amounts

try {
    $result = $apiInstance->getBankTransactions($ifModifiedSince, $where, $order, $page, $unitdp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getBankTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ifModifiedSince** | **\DateTime**| Only records created or modified since this timestamp will be returned | [optional]
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]
 **page** | **int**| e.g. page&#x3D;1 – Up to 100 bank transactions will be returned in a single API call with line items shown for each bank transaction | [optional]
 **unitdp** | **int**| e.g. unitdp&#x3D;4 – You can opt in to use four decimal places for unit amounts | [optional]

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\BankTransactions**](../Model/BankTransactions.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getBankTransactionsHistory

> \Consilience\XeroAccounting\Sdk\Model\HistoryRecords getBankTransactionsHistory($bankTransactionID)

Allows you to retrieve history from a bank transactions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bankTransactionID = 'bankTransactionID_example'; // string | Xero generated unique identifier for a bank transaction

try {
    $result = $apiInstance->getBankTransactionsHistory($bankTransactionID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getBankTransactionsHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bankTransactionID** | [**string**](../Model/.md)| Xero generated unique identifier for a bank transaction |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getBankTransfer

> \Consilience\XeroAccounting\Sdk\Model\BankTransfers getBankTransfer($bankTransferID)

Allows you to retrieve any bank transfers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bankTransferID = 'bankTransferID_example'; // string | Xero generated unique identifier for a bank transfer

try {
    $result = $apiInstance->getBankTransfer($bankTransferID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getBankTransfer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bankTransferID** | [**string**](../Model/.md)| Xero generated unique identifier for a bank transfer |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\BankTransfers**](../Model/BankTransfers.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getBankTransferAttachmentByFileName

> \SplFileObject getBankTransferAttachmentByFileName($bankTransferID, $fileName, $contentType)

Allows you to retrieve Attachments on BankTransfer by file name

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bankTransferID = 'bankTransferID_example'; // string | Xero generated unique identifier for a bank transfer
$fileName = 'fileName_example'; // string | The name of the file being attached to a Bank Transfer
$contentType = 'contentType_example'; // string | The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf

try {
    $result = $apiInstance->getBankTransferAttachmentByFileName($bankTransferID, $fileName, $contentType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getBankTransferAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bankTransferID** | [**string**](../Model/.md)| Xero generated unique identifier for a bank transfer |
 **fileName** | **string**| The name of the file being attached to a Bank Transfer |
 **contentType** | **string**| The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getBankTransferAttachmentById

> \SplFileObject getBankTransferAttachmentById($bankTransferID, $attachmentID, $contentType)

Allows you to retrieve Attachments on BankTransfer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bankTransferID = 'bankTransferID_example'; // string | Xero generated unique identifier for a bank transfer
$attachmentID = 'attachmentID_example'; // string | Xero generated unique identifier for an Attachment to a bank transfer
$contentType = 'contentType_example'; // string | The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf

try {
    $result = $apiInstance->getBankTransferAttachmentById($bankTransferID, $attachmentID, $contentType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getBankTransferAttachmentById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bankTransferID** | [**string**](../Model/.md)| Xero generated unique identifier for a bank transfer |
 **attachmentID** | [**string**](../Model/.md)| Xero generated unique identifier for an Attachment to a bank transfer |
 **contentType** | **string**| The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getBankTransferAttachments

> \Consilience\XeroAccounting\Sdk\Model\Attachments getBankTransferAttachments($bankTransferID)

Allows you to retrieve Attachments from  bank transfers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bankTransferID = 'bankTransferID_example'; // string | Xero generated unique identifier for a bank transfer

try {
    $result = $apiInstance->getBankTransferAttachments($bankTransferID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getBankTransferAttachments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bankTransferID** | [**string**](../Model/.md)| Xero generated unique identifier for a bank transfer |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Attachments**](../Model/Attachments.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getBankTransferHistory

> \Consilience\XeroAccounting\Sdk\Model\HistoryRecords getBankTransferHistory($bankTransferID)

Allows you to retrieve history from a bank transfers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bankTransferID = 'bankTransferID_example'; // string | Xero generated unique identifier for a bank transfer

try {
    $result = $apiInstance->getBankTransferHistory($bankTransferID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getBankTransferHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bankTransferID** | [**string**](../Model/.md)| Xero generated unique identifier for a bank transfer |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getBankTransfers

> \Consilience\XeroAccounting\Sdk\Model\BankTransfers getBankTransfers($ifModifiedSince, $where, $order)

Allows you to retrieve all bank transfers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ifModifiedSince = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only records created or modified since this timestamp will be returned
$where = 'where_example'; // string | Filter by an any element
$order = 'order_example'; // string | Order by an any element

try {
    $result = $apiInstance->getBankTransfers($ifModifiedSince, $where, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getBankTransfers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ifModifiedSince** | **\DateTime**| Only records created or modified since this timestamp will be returned | [optional]
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\BankTransfers**](../Model/BankTransfers.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getBatchPaymentHistory

> \Consilience\XeroAccounting\Sdk\Model\HistoryRecords getBatchPaymentHistory($batchPaymentID)

Allows you to retrieve history from a Batch Payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$batchPaymentID = 'batchPaymentID_example'; // string | Unique identifier for BatchPayment

try {
    $result = $apiInstance->getBatchPaymentHistory($batchPaymentID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getBatchPaymentHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batchPaymentID** | [**string**](../Model/.md)| Unique identifier for BatchPayment |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getBatchPayments

> \Consilience\XeroAccounting\Sdk\Model\BatchPayments getBatchPayments($ifModifiedSince, $where, $order)

Retrieve either one or many BatchPayments for invoices

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ifModifiedSince = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only records created or modified since this timestamp will be returned
$where = 'where_example'; // string | Filter by an any element
$order = 'order_example'; // string | Order by an any element

try {
    $result = $apiInstance->getBatchPayments($ifModifiedSince, $where, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getBatchPayments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ifModifiedSince** | **\DateTime**| Only records created or modified since this timestamp will be returned | [optional]
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\BatchPayments**](../Model/BatchPayments.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getBrandingTheme

> \Consilience\XeroAccounting\Sdk\Model\BrandingThemes getBrandingTheme($brandingThemeID)

Allows you to retrieve a specific BrandingThemes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$brandingThemeID = 'brandingThemeID_example'; // string | Unique identifier for a Branding Theme

try {
    $result = $apiInstance->getBrandingTheme($brandingThemeID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getBrandingTheme: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **brandingThemeID** | [**string**](../Model/.md)| Unique identifier for a Branding Theme |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\BrandingThemes**](../Model/BrandingThemes.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getBrandingThemePaymentServices

> \Consilience\XeroAccounting\Sdk\Model\PaymentServices getBrandingThemePaymentServices($brandingThemeID)

Allows you to retrieve the Payment services for a Branding Theme

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$brandingThemeID = 'brandingThemeID_example'; // string | Unique identifier for a Branding Theme

try {
    $result = $apiInstance->getBrandingThemePaymentServices($brandingThemeID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getBrandingThemePaymentServices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **brandingThemeID** | [**string**](../Model/.md)| Unique identifier for a Branding Theme |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\PaymentServices**](../Model/PaymentServices.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getBrandingThemes

> \Consilience\XeroAccounting\Sdk\Model\BrandingThemes getBrandingThemes()

Allows you to retrieve all the BrandingThemes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getBrandingThemes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getBrandingThemes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\BrandingThemes**](../Model/BrandingThemes.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getContact

> \Consilience\XeroAccounting\Sdk\Model\Contacts getContact($contactID)

Allows you to retrieve, add and update contacts in a Xero organisation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contactID = 'contactID_example'; // string | Unique identifier for a Contact

try {
    $result = $apiInstance->getContact($contactID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactID** | [**string**](../Model/.md)| Unique identifier for a Contact |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Contacts**](../Model/Contacts.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getContactAttachmentByFileName

> \SplFileObject getContactAttachmentByFileName($contactID, $fileName, $contentType)

Allows you to retrieve Attachments on Contacts by file name

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contactID = 'contactID_example'; // string | Unique identifier for a Contact
$fileName = 'fileName_example'; // string | Name for the file you are attaching
$contentType = 'contentType_example'; // string | The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf

try {
    $result = $apiInstance->getContactAttachmentByFileName($contactID, $fileName, $contentType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getContactAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactID** | [**string**](../Model/.md)| Unique identifier for a Contact |
 **fileName** | **string**| Name for the file you are attaching |
 **contentType** | **string**| The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getContactAttachmentById

> \SplFileObject getContactAttachmentById($contactID, $attachmentID, $contentType)

Allows you to retrieve Attachments on Contacts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contactID = 'contactID_example'; // string | Unique identifier for a Contact
$attachmentID = 'attachmentID_example'; // string | Unique identifier for a Attachment
$contentType = 'contentType_example'; // string | The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf

try {
    $result = $apiInstance->getContactAttachmentById($contactID, $attachmentID, $contentType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getContactAttachmentById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactID** | [**string**](../Model/.md)| Unique identifier for a Contact |
 **attachmentID** | [**string**](../Model/.md)| Unique identifier for a Attachment |
 **contentType** | **string**| The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getContactAttachments

> \Consilience\XeroAccounting\Sdk\Model\Attachments getContactAttachments($contactID)

Allows you to retrieve, add and update contacts in a Xero organisation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contactID = 'contactID_example'; // string | Unique identifier for a Contact

try {
    $result = $apiInstance->getContactAttachments($contactID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getContactAttachments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactID** | [**string**](../Model/.md)| Unique identifier for a Contact |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Attachments**](../Model/Attachments.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getContactCISSettings

> \Consilience\XeroAccounting\Sdk\Model\CISSettings getContactCISSettings($contactID)

Allows you to retrieve CISSettings for a contact in a Xero organisation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contactID = 'contactID_example'; // string | Unique identifier for a Contact

try {
    $result = $apiInstance->getContactCISSettings($contactID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getContactCISSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactID** | [**string**](../Model/.md)| Unique identifier for a Contact |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\CISSettings**](../Model/CISSettings.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getContactGroup

> \Consilience\XeroAccounting\Sdk\Model\ContactGroups getContactGroup($contactGroupID)

Allows you to retrieve a unique Contract Group by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contactGroupID = 'contactGroupID_example'; // string | Unique identifier for a Contact Group

try {
    $result = $apiInstance->getContactGroup($contactGroupID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getContactGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactGroupID** | [**string**](../Model/.md)| Unique identifier for a Contact Group |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\ContactGroups**](../Model/ContactGroups.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getContactGroups

> \Consilience\XeroAccounting\Sdk\Model\ContactGroups getContactGroups($where, $order)

Allows you to retrieve the ContactID and Name of all the contacts in a contact group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$where = 'where_example'; // string | Filter by an any element
$order = 'order_example'; // string | Order by an any element

try {
    $result = $apiInstance->getContactGroups($where, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getContactGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\ContactGroups**](../Model/ContactGroups.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getContactHistory

> \Consilience\XeroAccounting\Sdk\Model\HistoryRecords getContactHistory($contactID)

Allows you to retrieve a history records of an Contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contactID = 'contactID_example'; // string | Unique identifier for a Contact

try {
    $result = $apiInstance->getContactHistory($contactID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getContactHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactID** | [**string**](../Model/.md)| Unique identifier for a Contact |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getContacts

> \Consilience\XeroAccounting\Sdk\Model\Contacts getContacts($ifModifiedSince, $where, $order, $iDs, $page, $includeArchived)

Allows you to retrieve, add and update contacts in a Xero organisation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ifModifiedSince = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only records created or modified since this timestamp will be returned
$where = 'where_example'; // string | Filter by an any element
$order = 'order_example'; // string | Order by an any element
$iDs = 'iDs_example'; // string | Filter by a comma separated list of ContactIDs. Allows you to retrieve a specific set of contacts in a single call.
$page = 56; // int | e.g. page=1 - Up to 100 contacts will be returned in a single API call.
$includeArchived = True; // bool | e.g. includeArchived=true - Contacts with a status of ARCHIVED will be included in the response

try {
    $result = $apiInstance->getContacts($ifModifiedSince, $where, $order, $iDs, $page, $includeArchived);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ifModifiedSince** | **\DateTime**| Only records created or modified since this timestamp will be returned | [optional]
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]
 **iDs** | **string**| Filter by a comma separated list of ContactIDs. Allows you to retrieve a specific set of contacts in a single call. | [optional]
 **page** | **int**| e.g. page&#x3D;1 - Up to 100 contacts will be returned in a single API call. | [optional]
 **includeArchived** | **bool**| e.g. includeArchived&#x3D;true - Contacts with a status of ARCHIVED will be included in the response | [optional]

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Contacts**](../Model/Contacts.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCreditNote

> \Consilience\XeroAccounting\Sdk\Model\CreditNotes getCreditNote($creditNoteID)

Allows you to retrieve a specific credit note

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$creditNoteID = 'creditNoteID_example'; // string | Unique identifier for a Credit Note

try {
    $result = $apiInstance->getCreditNote($creditNoteID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getCreditNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **creditNoteID** | [**string**](../Model/.md)| Unique identifier for a Credit Note |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\CreditNotes**](../Model/CreditNotes.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCreditNoteAsPdf

> \SplFileObject getCreditNoteAsPdf($creditNoteID, $contentType)

Allows you to retrieve Credit Note as PDF files

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$creditNoteID = 'creditNoteID_example'; // string | Unique identifier for a Credit Note
$contentType = 'contentType_example'; // string | The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf

try {
    $result = $apiInstance->getCreditNoteAsPdf($creditNoteID, $contentType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getCreditNoteAsPdf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **creditNoteID** | [**string**](../Model/.md)| Unique identifier for a Credit Note |
 **contentType** | **string**| The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCreditNoteAttachmentByFileName

> \SplFileObject getCreditNoteAttachmentByFileName($creditNoteID, $fileName, $contentType)

Allows you to retrieve Attachments on CreditNote by file name

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$creditNoteID = 'creditNoteID_example'; // string | Unique identifier for a Credit Note
$fileName = 'fileName_example'; // string | Name of the file you are attaching to Credit Note
$contentType = 'contentType_example'; // string | The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf

try {
    $result = $apiInstance->getCreditNoteAttachmentByFileName($creditNoteID, $fileName, $contentType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getCreditNoteAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **creditNoteID** | [**string**](../Model/.md)| Unique identifier for a Credit Note |
 **fileName** | **string**| Name of the file you are attaching to Credit Note |
 **contentType** | **string**| The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCreditNoteAttachmentById

> \SplFileObject getCreditNoteAttachmentById($creditNoteID, $attachmentID, $contentType)

Allows you to retrieve Attachments on CreditNote

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$creditNoteID = 'creditNoteID_example'; // string | Unique identifier for a Credit Note
$attachmentID = 'attachmentID_example'; // string | Unique identifier for a Attachment
$contentType = 'contentType_example'; // string | The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf

try {
    $result = $apiInstance->getCreditNoteAttachmentById($creditNoteID, $attachmentID, $contentType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getCreditNoteAttachmentById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **creditNoteID** | [**string**](../Model/.md)| Unique identifier for a Credit Note |
 **attachmentID** | [**string**](../Model/.md)| Unique identifier for a Attachment |
 **contentType** | **string**| The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCreditNoteAttachments

> \Consilience\XeroAccounting\Sdk\Model\Attachments getCreditNoteAttachments($creditNoteID)

Allows you to retrieve Attachments for credit notes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$creditNoteID = 'creditNoteID_example'; // string | Unique identifier for a Credit Note

try {
    $result = $apiInstance->getCreditNoteAttachments($creditNoteID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getCreditNoteAttachments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **creditNoteID** | [**string**](../Model/.md)| Unique identifier for a Credit Note |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Attachments**](../Model/Attachments.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCreditNoteHistory

> \Consilience\XeroAccounting\Sdk\Model\HistoryRecords getCreditNoteHistory($creditNoteID)

Allows you to retrieve a history records of an CreditNote

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$creditNoteID = 'creditNoteID_example'; // string | Unique identifier for a Credit Note

try {
    $result = $apiInstance->getCreditNoteHistory($creditNoteID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getCreditNoteHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **creditNoteID** | [**string**](../Model/.md)| Unique identifier for a Credit Note |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCreditNotes

> \Consilience\XeroAccounting\Sdk\Model\CreditNotes getCreditNotes($ifModifiedSince, $where, $order, $page)

Allows you to retrieve any credit notes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ifModifiedSince = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only records created or modified since this timestamp will be returned
$where = 'where_example'; // string | Filter by an any element
$order = 'order_example'; // string | Order by an any element
$page = 56; // int | e.g. page=1 – Up to 100 credit notes will be returned in a single API call with line items shown for each credit note

try {
    $result = $apiInstance->getCreditNotes($ifModifiedSince, $where, $order, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getCreditNotes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ifModifiedSince** | **\DateTime**| Only records created or modified since this timestamp will be returned | [optional]
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]
 **page** | **int**| e.g. page&#x3D;1 – Up to 100 credit notes will be returned in a single API call with line items shown for each credit note | [optional]

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\CreditNotes**](../Model/CreditNotes.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCurrencies

> \Consilience\XeroAccounting\Sdk\Model\Currencies getCurrencies($where, $order)

Allows you to retrieve currencies for your organisation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$where = 'where_example'; // string | Filter by an any element
$order = 'order_example'; // string | Order by an any element

try {
    $result = $apiInstance->getCurrencies($where, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getCurrencies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Currencies**](../Model/Currencies.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getEmployee

> \Consilience\XeroAccounting\Sdk\Model\Employees getEmployee($employeeID)

Allows you to retrieve a specific employee used in Xero payrun

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$employeeID = 'employeeID_example'; // string | Unique identifier for a Employee

try {
    $result = $apiInstance->getEmployee($employeeID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getEmployee: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **employeeID** | [**string**](../Model/.md)| Unique identifier for a Employee |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Employees**](../Model/Employees.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getEmployees

> \Consilience\XeroAccounting\Sdk\Model\Employees getEmployees($ifModifiedSince, $where, $order)

Allows you to retrieve employees used in Xero payrun

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ifModifiedSince = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only records created or modified since this timestamp will be returned
$where = 'where_example'; // string | Filter by an any element
$order = 'order_example'; // string | Order by an any element

try {
    $result = $apiInstance->getEmployees($ifModifiedSince, $where, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getEmployees: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ifModifiedSince** | **\DateTime**| Only records created or modified since this timestamp will be returned | [optional]
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Employees**](../Model/Employees.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getExpenseClaim

> \Consilience\XeroAccounting\Sdk\Model\ExpenseClaims getExpenseClaim($expenseClaimID)

Allows you to retrieve a specified expense claim

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$expenseClaimID = 'expenseClaimID_example'; // string | Unique identifier for a ExpenseClaim

try {
    $result = $apiInstance->getExpenseClaim($expenseClaimID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getExpenseClaim: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **expenseClaimID** | [**string**](../Model/.md)| Unique identifier for a ExpenseClaim |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\ExpenseClaims**](../Model/ExpenseClaims.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getExpenseClaimHistory

> \Consilience\XeroAccounting\Sdk\Model\HistoryRecords getExpenseClaimHistory($expenseClaimID)

Allows you to retrieve a history records of an ExpenseClaim

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$expenseClaimID = 'expenseClaimID_example'; // string | Unique identifier for a ExpenseClaim

try {
    $result = $apiInstance->getExpenseClaimHistory($expenseClaimID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getExpenseClaimHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **expenseClaimID** | [**string**](../Model/.md)| Unique identifier for a ExpenseClaim |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getExpenseClaims

> \Consilience\XeroAccounting\Sdk\Model\ExpenseClaims getExpenseClaims($ifModifiedSince, $where, $order)

Allows you to retrieve expense claims

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ifModifiedSince = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only records created or modified since this timestamp will be returned
$where = 'where_example'; // string | Filter by an any element
$order = 'order_example'; // string | Order by an any element

try {
    $result = $apiInstance->getExpenseClaims($ifModifiedSince, $where, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getExpenseClaims: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ifModifiedSince** | **\DateTime**| Only records created or modified since this timestamp will be returned | [optional]
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\ExpenseClaims**](../Model/ExpenseClaims.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getInvoice

> \Consilience\XeroAccounting\Sdk\Model\Invoices getInvoice($invoiceID)

Allows you to retrieve a specified sales invoice or purchase bill

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invoiceID = 'invoiceID_example'; // string | Unique identifier for an Invoice

try {
    $result = $apiInstance->getInvoice($invoiceID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoiceID** | [**string**](../Model/.md)| Unique identifier for an Invoice |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Invoices**](../Model/Invoices.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getInvoiceAsPdf

> \SplFileObject getInvoiceAsPdf($invoiceID, $contentType)

Allows you to retrieve invoices or purchase bills as PDF files

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invoiceID = 'invoiceID_example'; // string | Unique identifier for an Invoice
$contentType = 'contentType_example'; // string | The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf

try {
    $result = $apiInstance->getInvoiceAsPdf($invoiceID, $contentType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getInvoiceAsPdf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoiceID** | [**string**](../Model/.md)| Unique identifier for an Invoice |
 **contentType** | **string**| The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getInvoiceAttachmentByFileName

> \SplFileObject getInvoiceAttachmentByFileName($invoiceID, $fileName, $contentType)

Allows you to retrieve Attachment on invoices or purchase bills by it's filename

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invoiceID = 'invoiceID_example'; // string | Unique identifier for an Invoice
$fileName = 'fileName_example'; // string | Name of the file you are attaching
$contentType = 'contentType_example'; // string | The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf

try {
    $result = $apiInstance->getInvoiceAttachmentByFileName($invoiceID, $fileName, $contentType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getInvoiceAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoiceID** | [**string**](../Model/.md)| Unique identifier for an Invoice |
 **fileName** | **string**| Name of the file you are attaching |
 **contentType** | **string**| The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getInvoiceAttachmentById

> \SplFileObject getInvoiceAttachmentById($invoiceID, $attachmentID, $contentType)

Allows you to retrieve a specified Attachment on invoices or purchase bills by it's ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invoiceID = 'invoiceID_example'; // string | Unique identifier for an Invoice
$attachmentID = 'attachmentID_example'; // string | Unique identifier for an Attachment
$contentType = 'contentType_example'; // string | The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf

try {
    $result = $apiInstance->getInvoiceAttachmentById($invoiceID, $attachmentID, $contentType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getInvoiceAttachmentById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoiceID** | [**string**](../Model/.md)| Unique identifier for an Invoice |
 **attachmentID** | [**string**](../Model/.md)| Unique identifier for an Attachment |
 **contentType** | **string**| The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getInvoiceAttachments

> \Consilience\XeroAccounting\Sdk\Model\Attachments getInvoiceAttachments($invoiceID)

Allows you to retrieve Attachments on invoices or purchase bills

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invoiceID = 'invoiceID_example'; // string | Unique identifier for an Invoice

try {
    $result = $apiInstance->getInvoiceAttachments($invoiceID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getInvoiceAttachments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoiceID** | [**string**](../Model/.md)| Unique identifier for an Invoice |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Attachments**](../Model/Attachments.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getInvoiceHistory

> \Consilience\XeroAccounting\Sdk\Model\HistoryRecords getInvoiceHistory($invoiceID)

Allows you to retrieve a history records of an invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invoiceID = 'invoiceID_example'; // string | Unique identifier for an Invoice

try {
    $result = $apiInstance->getInvoiceHistory($invoiceID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getInvoiceHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoiceID** | [**string**](../Model/.md)| Unique identifier for an Invoice |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getInvoiceReminders

> \Consilience\XeroAccounting\Sdk\Model\InvoiceReminders getInvoiceReminders()

Allows you to retrieve invoice reminder settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getInvoiceReminders();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getInvoiceReminders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\InvoiceReminders**](../Model/InvoiceReminders.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getInvoices

> \Consilience\XeroAccounting\Sdk\Model\Invoices getInvoices($ifModifiedSince, $where, $order, $iDs, $invoiceNumbers, $contactIDs, $statuses, $page, $includeArchived, $createdByMyApp, $unitdp)

Allows you to retrieve any sales invoices or purchase bills

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ifModifiedSince = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only records created or modified since this timestamp will be returned
$where = 'where_example'; // string | Filter by an any element
$order = 'order_example'; // string | Order by an any element
$iDs = 'iDs_example'; // string | Filter by a comma-separated list of InvoicesIDs. For faster response times we recommend using these explicit parameters instead of passing OR conditions into the Where filter.
$invoiceNumbers = 'invoiceNumbers_example'; // string | Filter by a comma-separated list of InvoiceNumbers. For faster response times we recommend using these explicit parameters instead of passing OR conditions into the Where filter.
$contactIDs = 'contactIDs_example'; // string | Filter by a comma-separated list of ContactIDs. For faster response times we recommend using these explicit parameters instead of passing OR conditions into the Where filter.
$statuses = 'statuses_example'; // string | Filter by a comma-separated list Statuses. For faster response times we recommend using these explicit parameters instead of passing OR conditions into the Where filter.
$page = 56; // int | e.g. page=1 – Up to 100 invoices will be returned in a single API call with line items shown for each invoice
$includeArchived = True; // bool | e.g. includeArchived=true - Contacts with a status of ARCHIVED will be included in the response
$createdByMyApp = True; // bool | When set to true you'll only retrieve Invoices created by your app
$unitdp = 56; // int | e.g. unitdp=4 – You can opt in to use four decimal places for unit amounts

try {
    $result = $apiInstance->getInvoices($ifModifiedSince, $where, $order, $iDs, $invoiceNumbers, $contactIDs, $statuses, $page, $includeArchived, $createdByMyApp, $unitdp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getInvoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ifModifiedSince** | **\DateTime**| Only records created or modified since this timestamp will be returned | [optional]
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]
 **iDs** | **string**| Filter by a comma-separated list of InvoicesIDs. For faster response times we recommend using these explicit parameters instead of passing OR conditions into the Where filter. | [optional]
 **invoiceNumbers** | **string**| Filter by a comma-separated list of InvoiceNumbers. For faster response times we recommend using these explicit parameters instead of passing OR conditions into the Where filter. | [optional]
 **contactIDs** | **string**| Filter by a comma-separated list of ContactIDs. For faster response times we recommend using these explicit parameters instead of passing OR conditions into the Where filter. | [optional]
 **statuses** | **string**| Filter by a comma-separated list Statuses. For faster response times we recommend using these explicit parameters instead of passing OR conditions into the Where filter. | [optional]
 **page** | **int**| e.g. page&#x3D;1 – Up to 100 invoices will be returned in a single API call with line items shown for each invoice | [optional]
 **includeArchived** | **bool**| e.g. includeArchived&#x3D;true - Contacts with a status of ARCHIVED will be included in the response | [optional]
 **createdByMyApp** | **bool**| When set to true you&#39;ll only retrieve Invoices created by your app | [optional]
 **unitdp** | **int**| e.g. unitdp&#x3D;4 – You can opt in to use four decimal places for unit amounts | [optional]

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Invoices**](../Model/Invoices.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getItem

> \Consilience\XeroAccounting\Sdk\Model\Items getItem($itemID)

Allows you to retrieve a specified item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$itemID = 'itemID_example'; // string | Unique identifier for an Item

try {
    $result = $apiInstance->getItem($itemID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **itemID** | [**string**](../Model/.md)| Unique identifier for an Item |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Items**](../Model/Items.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getItemHistory

> \Consilience\XeroAccounting\Sdk\Model\HistoryRecords getItemHistory($itemID)

Allows you to retrieve history for items

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$itemID = 'itemID_example'; // string | Unique identifier for an Item

try {
    $result = $apiInstance->getItemHistory($itemID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getItemHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **itemID** | [**string**](../Model/.md)| Unique identifier for an Item |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getItems

> \Consilience\XeroAccounting\Sdk\Model\Items getItems($ifModifiedSince, $where, $order, $unitdp)

Allows you to retrieve any items

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ifModifiedSince = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only records created or modified since this timestamp will be returned
$where = 'where_example'; // string | Filter by an any element
$order = 'order_example'; // string | Order by an any element
$unitdp = 56; // int | e.g. unitdp=4 – You can opt in to use four decimal places for unit amounts

try {
    $result = $apiInstance->getItems($ifModifiedSince, $where, $order, $unitdp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ifModifiedSince** | **\DateTime**| Only records created or modified since this timestamp will be returned | [optional]
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]
 **unitdp** | **int**| e.g. unitdp&#x3D;4 – You can opt in to use four decimal places for unit amounts | [optional]

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Items**](../Model/Items.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getJournal

> \Consilience\XeroAccounting\Sdk\Model\Journals getJournal($journalID)

Allows you to retrieve a specified journals.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$journalID = 'journalID_example'; // string | Unique identifier for a Journal

try {
    $result = $apiInstance->getJournal($journalID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getJournal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **journalID** | [**string**](../Model/.md)| Unique identifier for a Journal |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Journals**](../Model/Journals.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getJournals

> \Consilience\XeroAccounting\Sdk\Model\Journals getJournals($ifModifiedSince, $offset, $paymentsOnly)

Allows you to retrieve any journals.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ifModifiedSince = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only records created or modified since this timestamp will be returned
$offset = 56; // int | Offset by a specified journal number. e.g. journals with a JournalNumber greater than the offset will be returned
$paymentsOnly = True; // bool | Filter to retrieve journals on a cash basis. Journals are returned on an accrual basis by default.

try {
    $result = $apiInstance->getJournals($ifModifiedSince, $offset, $paymentsOnly);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getJournals: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ifModifiedSince** | **\DateTime**| Only records created or modified since this timestamp will be returned | [optional]
 **offset** | **int**| Offset by a specified journal number. e.g. journals with a JournalNumber greater than the offset will be returned | [optional]
 **paymentsOnly** | **bool**| Filter to retrieve journals on a cash basis. Journals are returned on an accrual basis by default. | [optional]

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Journals**](../Model/Journals.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getLinkedTransaction

> \Consilience\XeroAccounting\Sdk\Model\LinkedTransactions getLinkedTransaction($linkedTransactionID)

Allows you to retrieve a specified linked transactions (billable expenses)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$linkedTransactionID = 'linkedTransactionID_example'; // string | Unique identifier for a LinkedTransaction

try {
    $result = $apiInstance->getLinkedTransaction($linkedTransactionID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getLinkedTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **linkedTransactionID** | [**string**](../Model/.md)| Unique identifier for a LinkedTransaction |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\LinkedTransactions**](../Model/LinkedTransactions.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getLinkedTransactions

> \Consilience\XeroAccounting\Sdk\Model\LinkedTransactions getLinkedTransactions($page, $linkedTransactionID, $sourceTransactionID, $contactID, $status, $targetTransactionID)

Retrieve linked transactions (billable expenses)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page = 56; // int | Up to 100 linked transactions will be returned in a single API call. Use the page parameter to specify the page to be returned e.g. page=1.
$linkedTransactionID = 'linkedTransactionID_example'; // string | The Xero identifier for an Linked Transaction
$sourceTransactionID = 'sourceTransactionID_example'; // string | Filter by the SourceTransactionID. Get all the linked transactions created from a particular ACCPAY invoice
$contactID = 'contactID_example'; // string | Filter by the ContactID. Get all the linked transactions that have been assigned to a particular customer.
$status = 'status_example'; // string | Filter by the combination of ContactID and Status. Get all the linked transactions that have been assigned to a particular customer and have a particular status e.g. GET /LinkedTransactions?ContactID=4bb34b03-3378-4bb2-a0ed-6345abf3224e&Status=APPROVED.
$targetTransactionID = 'targetTransactionID_example'; // string | Filter by the TargetTransactionID. Get all the linked transactions allocated to a particular ACCREC invoice

try {
    $result = $apiInstance->getLinkedTransactions($page, $linkedTransactionID, $sourceTransactionID, $contactID, $status, $targetTransactionID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getLinkedTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Up to 100 linked transactions will be returned in a single API call. Use the page parameter to specify the page to be returned e.g. page&#x3D;1. | [optional]
 **linkedTransactionID** | **string**| The Xero identifier for an Linked Transaction | [optional]
 **sourceTransactionID** | **string**| Filter by the SourceTransactionID. Get all the linked transactions created from a particular ACCPAY invoice | [optional]
 **contactID** | **string**| Filter by the ContactID. Get all the linked transactions that have been assigned to a particular customer. | [optional]
 **status** | **string**| Filter by the combination of ContactID and Status. Get all the linked transactions that have been assigned to a particular customer and have a particular status e.g. GET /LinkedTransactions?ContactID&#x3D;4bb34b03-3378-4bb2-a0ed-6345abf3224e&amp;Status&#x3D;APPROVED. | [optional]
 **targetTransactionID** | **string**| Filter by the TargetTransactionID. Get all the linked transactions allocated to a particular ACCREC invoice | [optional]

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\LinkedTransactions**](../Model/LinkedTransactions.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getManualJournal

> \Consilience\XeroAccounting\Sdk\Model\ManualJournals getManualJournal($manualJournalID)

Allows you to retrieve a specified manual journals

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$manualJournalID = 'manualJournalID_example'; // string | Unique identifier for a ManualJournal

try {
    $result = $apiInstance->getManualJournal($manualJournalID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getManualJournal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manualJournalID** | [**string**](../Model/.md)| Unique identifier for a ManualJournal |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\ManualJournals**](../Model/ManualJournals.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getManualJournalAttachmentByFileName

> \SplFileObject getManualJournalAttachmentByFileName($manualJournalID, $fileName, $contentType)

Allows you to retrieve specified Attachment on ManualJournal by file name

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$manualJournalID = 'manualJournalID_example'; // string | Unique identifier for a ManualJournal
$fileName = 'fileName_example'; // string | The name of the file being attached to a ManualJournal
$contentType = 'contentType_example'; // string | The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf

try {
    $result = $apiInstance->getManualJournalAttachmentByFileName($manualJournalID, $fileName, $contentType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getManualJournalAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manualJournalID** | [**string**](../Model/.md)| Unique identifier for a ManualJournal |
 **fileName** | **string**| The name of the file being attached to a ManualJournal |
 **contentType** | **string**| The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getManualJournalAttachmentById

> \SplFileObject getManualJournalAttachmentById($manualJournalID, $attachmentID, $contentType)

Allows you to retrieve specified Attachment on ManualJournals

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$manualJournalID = 'manualJournalID_example'; // string | Unique identifier for a ManualJournal
$attachmentID = 'attachmentID_example'; // string | Unique identifier for a Attachment
$contentType = 'contentType_example'; // string | The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf

try {
    $result = $apiInstance->getManualJournalAttachmentById($manualJournalID, $attachmentID, $contentType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getManualJournalAttachmentById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manualJournalID** | [**string**](../Model/.md)| Unique identifier for a ManualJournal |
 **attachmentID** | [**string**](../Model/.md)| Unique identifier for a Attachment |
 **contentType** | **string**| The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getManualJournalAttachments

> \Consilience\XeroAccounting\Sdk\Model\Attachments getManualJournalAttachments($manualJournalID)

Allows you to retrieve Attachment for manual journals

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$manualJournalID = 'manualJournalID_example'; // string | Unique identifier for a ManualJournal

try {
    $result = $apiInstance->getManualJournalAttachments($manualJournalID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getManualJournalAttachments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manualJournalID** | [**string**](../Model/.md)| Unique identifier for a ManualJournal |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Attachments**](../Model/Attachments.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getManualJournals

> \Consilience\XeroAccounting\Sdk\Model\ManualJournals getManualJournals($ifModifiedSince, $where, $order, $page)

Allows you to retrieve any manual journals

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ifModifiedSince = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only records created or modified since this timestamp will be returned
$where = 'where_example'; // string | Filter by an any element
$order = 'order_example'; // string | Order by an any element
$page = 56; // int | e.g. page=1 – Up to 100 manual journals will be returned in a single API call with line items shown for each overpayment

try {
    $result = $apiInstance->getManualJournals($ifModifiedSince, $where, $order, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getManualJournals: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ifModifiedSince** | **\DateTime**| Only records created or modified since this timestamp will be returned | [optional]
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]
 **page** | **int**| e.g. page&#x3D;1 – Up to 100 manual journals will be returned in a single API call with line items shown for each overpayment | [optional]

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\ManualJournals**](../Model/ManualJournals.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getOnlineInvoice

> \Consilience\XeroAccounting\Sdk\Model\OnlineInvoices getOnlineInvoice($invoiceID)

Allows you to retrieve a URL to an online invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invoiceID = 'invoiceID_example'; // string | Unique identifier for an Invoice

try {
    $result = $apiInstance->getOnlineInvoice($invoiceID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getOnlineInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoiceID** | [**string**](../Model/.md)| Unique identifier for an Invoice |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\OnlineInvoices**](../Model/OnlineInvoices.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getOrganisationCISSettings

> \Consilience\XeroAccounting\Sdk\Model\CISOrgSetting getOrganisationCISSettings($organisationID)

Allows you To verify if an organisation is using contruction industry scheme, you can retrieve the CIS settings for the organistaion.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organisationID = 'organisationID_example'; // string | 

try {
    $result = $apiInstance->getOrganisationCISSettings($organisationID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getOrganisationCISSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organisationID** | [**string**](../Model/.md)|  |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\CISOrgSetting**](../Model/CISOrgSetting.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getOrganisations

> \Consilience\XeroAccounting\Sdk\Model\Organisations getOrganisations()

Allows you to retrieve Organisation details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getOrganisations();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getOrganisations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Organisations**](../Model/Organisations.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getOverpayment

> \Consilience\XeroAccounting\Sdk\Model\Overpayments getOverpayment($overpaymentID)

Allows you to retrieve a specified overpayments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$overpaymentID = 'overpaymentID_example'; // string | Unique identifier for a Overpayment

try {
    $result = $apiInstance->getOverpayment($overpaymentID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getOverpayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **overpaymentID** | [**string**](../Model/.md)| Unique identifier for a Overpayment |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Overpayments**](../Model/Overpayments.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getOverpaymentHistory

> \Consilience\XeroAccounting\Sdk\Model\HistoryRecords getOverpaymentHistory($overpaymentID)

Allows you to retrieve a history records of an Overpayment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$overpaymentID = 'overpaymentID_example'; // string | Unique identifier for a Overpayment

try {
    $result = $apiInstance->getOverpaymentHistory($overpaymentID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getOverpaymentHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **overpaymentID** | [**string**](../Model/.md)| Unique identifier for a Overpayment |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getOverpayments

> \Consilience\XeroAccounting\Sdk\Model\Overpayments getOverpayments($ifModifiedSince, $where, $order, $page, $unitdp)

Allows you to retrieve overpayments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ifModifiedSince = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only records created or modified since this timestamp will be returned
$where = 'where_example'; // string | Filter by an any element
$order = 'order_example'; // string | Order by an any element
$page = 56; // int | e.g. page=1 – Up to 100 overpayments will be returned in a single API call with line items shown for each overpayment
$unitdp = 56; // int | e.g. unitdp=4 – You can opt in to use four decimal places for unit amounts

try {
    $result = $apiInstance->getOverpayments($ifModifiedSince, $where, $order, $page, $unitdp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getOverpayments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ifModifiedSince** | **\DateTime**| Only records created or modified since this timestamp will be returned | [optional]
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]
 **page** | **int**| e.g. page&#x3D;1 – Up to 100 overpayments will be returned in a single API call with line items shown for each overpayment | [optional]
 **unitdp** | **int**| e.g. unitdp&#x3D;4 – You can opt in to use four decimal places for unit amounts | [optional]

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Overpayments**](../Model/Overpayments.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getPayment

> \Consilience\XeroAccounting\Sdk\Model\Payments getPayment($paymentID)

Allows you to retrieve a specified payment for invoices and credit notes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$paymentID = 'paymentID_example'; // string | Unique identifier for a Payment

try {
    $result = $apiInstance->getPayment($paymentID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paymentID** | [**string**](../Model/.md)| Unique identifier for a Payment |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Payments**](../Model/Payments.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getPaymentHistory

> \Consilience\XeroAccounting\Sdk\Model\HistoryRecords getPaymentHistory($paymentID)

Allows you to retrieve history records of a payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$paymentID = 'paymentID_example'; // string | Unique identifier for a Payment

try {
    $result = $apiInstance->getPaymentHistory($paymentID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getPaymentHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paymentID** | [**string**](../Model/.md)| Unique identifier for a Payment |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getPaymentServices

> \Consilience\XeroAccounting\Sdk\Model\PaymentServices getPaymentServices()

Allows you to retrieve payment services

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getPaymentServices();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getPaymentServices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\PaymentServices**](../Model/PaymentServices.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getPayments

> \Consilience\XeroAccounting\Sdk\Model\Payments getPayments($ifModifiedSince, $where, $order)

Allows you to retrieve payments for invoices and credit notes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ifModifiedSince = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only records created or modified since this timestamp will be returned
$where = 'where_example'; // string | Filter by an any element
$order = 'order_example'; // string | Order by an any element

try {
    $result = $apiInstance->getPayments($ifModifiedSince, $where, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getPayments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ifModifiedSince** | **\DateTime**| Only records created or modified since this timestamp will be returned | [optional]
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Payments**](../Model/Payments.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getPrepayment

> \Consilience\XeroAccounting\Sdk\Model\Prepayments getPrepayment($prepaymentID)

Allows you to retrieve a specified prepayments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$prepaymentID = 'prepaymentID_example'; // string | Unique identifier for a PrePayment

try {
    $result = $apiInstance->getPrepayment($prepaymentID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getPrepayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **prepaymentID** | [**string**](../Model/.md)| Unique identifier for a PrePayment |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Prepayments**](../Model/Prepayments.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getPrepaymentHistory

> \Consilience\XeroAccounting\Sdk\Model\HistoryRecords getPrepaymentHistory($prepaymentID)

Allows you to retrieve a history records of an Prepayment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$prepaymentID = 'prepaymentID_example'; // string | Unique identifier for a PrePayment

try {
    $result = $apiInstance->getPrepaymentHistory($prepaymentID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getPrepaymentHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **prepaymentID** | [**string**](../Model/.md)| Unique identifier for a PrePayment |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getPrepayments

> \Consilience\XeroAccounting\Sdk\Model\Prepayments getPrepayments($ifModifiedSince, $where, $order, $page, $unitdp)

Allows you to retrieve prepayments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ifModifiedSince = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only records created or modified since this timestamp will be returned
$where = 'where_example'; // string | Filter by an any element
$order = 'order_example'; // string | Order by an any element
$page = 56; // int | e.g. page=1 – Up to 100 prepayments will be returned in a single API call with line items shown for each overpayment
$unitdp = 56; // int | e.g. unitdp=4 – You can opt in to use four decimal places for unit amounts

try {
    $result = $apiInstance->getPrepayments($ifModifiedSince, $where, $order, $page, $unitdp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getPrepayments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ifModifiedSince** | **\DateTime**| Only records created or modified since this timestamp will be returned | [optional]
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]
 **page** | **int**| e.g. page&#x3D;1 – Up to 100 prepayments will be returned in a single API call with line items shown for each overpayment | [optional]
 **unitdp** | **int**| e.g. unitdp&#x3D;4 – You can opt in to use four decimal places for unit amounts | [optional]

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Prepayments**](../Model/Prepayments.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getPurchaseOrder

> \Consilience\XeroAccounting\Sdk\Model\PurchaseOrders getPurchaseOrder($purchaseOrderID)

Allows you to retrieve a specified purchase orders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$purchaseOrderID = 'purchaseOrderID_example'; // string | Unique identifier for a PurchaseOrder

try {
    $result = $apiInstance->getPurchaseOrder($purchaseOrderID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getPurchaseOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **purchaseOrderID** | [**string**](../Model/.md)| Unique identifier for a PurchaseOrder |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\PurchaseOrders**](../Model/PurchaseOrders.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getPurchaseOrderHistory

> \Consilience\XeroAccounting\Sdk\Model\HistoryRecords getPurchaseOrderHistory($purchaseOrderID)

Allows you to retrieve history for PurchaseOrder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$purchaseOrderID = 'purchaseOrderID_example'; // string | Unique identifier for a PurchaseOrder

try {
    $result = $apiInstance->getPurchaseOrderHistory($purchaseOrderID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getPurchaseOrderHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **purchaseOrderID** | [**string**](../Model/.md)| Unique identifier for a PurchaseOrder |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getPurchaseOrders

> \Consilience\XeroAccounting\Sdk\Model\PurchaseOrders getPurchaseOrders($ifModifiedSince, $status, $dateFrom, $dateTo, $order, $page)

Allows you to retrieve purchase orders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ifModifiedSince = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only records created or modified since this timestamp will be returned
$status = 'status_example'; // string | Filter by purchase order status
$dateFrom = 'dateFrom_example'; // string | Filter by purchase order date (e.g. GET https://.../PurchaseOrders?DateFrom=2015-12-01&DateTo=2015-12-31
$dateTo = 'dateTo_example'; // string | Filter by purchase order date (e.g. GET https://.../PurchaseOrders?DateFrom=2015-12-01&DateTo=2015-12-31
$order = 'order_example'; // string | Order by an any element
$page = 56; // int | To specify a page, append the page parameter to the URL e.g. ?page=1. If there are 100 records in the response you will need to check if there is any more data by fetching the next page e.g ?page=2 and continuing this process until no more results are returned.

try {
    $result = $apiInstance->getPurchaseOrders($ifModifiedSince, $status, $dateFrom, $dateTo, $order, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getPurchaseOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ifModifiedSince** | **\DateTime**| Only records created or modified since this timestamp will be returned | [optional]
 **status** | **string**| Filter by purchase order status | [optional]
 **dateFrom** | **string**| Filter by purchase order date (e.g. GET https://.../PurchaseOrders?DateFrom&#x3D;2015-12-01&amp;DateTo&#x3D;2015-12-31 | [optional]
 **dateTo** | **string**| Filter by purchase order date (e.g. GET https://.../PurchaseOrders?DateFrom&#x3D;2015-12-01&amp;DateTo&#x3D;2015-12-31 | [optional]
 **order** | **string**| Order by an any element | [optional]
 **page** | **int**| To specify a page, append the page parameter to the URL e.g. ?page&#x3D;1. If there are 100 records in the response you will need to check if there is any more data by fetching the next page e.g ?page&#x3D;2 and continuing this process until no more results are returned. | [optional]

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\PurchaseOrders**](../Model/PurchaseOrders.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getReceipt

> \Consilience\XeroAccounting\Sdk\Model\Receipts getReceipt($receiptID)

Allows you to retrieve a specified draft expense claim receipts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$receiptID = 'receiptID_example'; // string | Unique identifier for a Receipt

try {
    $result = $apiInstance->getReceipt($receiptID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getReceipt: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receiptID** | [**string**](../Model/.md)| Unique identifier for a Receipt |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Receipts**](../Model/Receipts.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getReceiptAttachmentByFileName

> \SplFileObject getReceiptAttachmentByFileName($receiptID, $fileName, $contentType)

Allows you to retrieve Attachments on expense claim receipts by file name

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$receiptID = 'receiptID_example'; // string | Unique identifier for a Receipt
$fileName = 'fileName_example'; // string | The name of the file being attached to the Receipt
$contentType = 'contentType_example'; // string | The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf

try {
    $result = $apiInstance->getReceiptAttachmentByFileName($receiptID, $fileName, $contentType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getReceiptAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receiptID** | [**string**](../Model/.md)| Unique identifier for a Receipt |
 **fileName** | **string**| The name of the file being attached to the Receipt |
 **contentType** | **string**| The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getReceiptAttachmentById

> \SplFileObject getReceiptAttachmentById($receiptID, $attachmentID, $contentType)

Allows you to retrieve Attachments on expense claim receipts by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$receiptID = 'receiptID_example'; // string | Unique identifier for a Receipt
$attachmentID = 'attachmentID_example'; // string | Unique identifier for a Attachment
$contentType = 'contentType_example'; // string | The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf

try {
    $result = $apiInstance->getReceiptAttachmentById($receiptID, $attachmentID, $contentType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getReceiptAttachmentById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receiptID** | [**string**](../Model/.md)| Unique identifier for a Receipt |
 **attachmentID** | [**string**](../Model/.md)| Unique identifier for a Attachment |
 **contentType** | **string**| The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getReceiptAttachments

> \Consilience\XeroAccounting\Sdk\Model\Attachments getReceiptAttachments($receiptID)

Allows you to retrieve Attachments for expense claim receipts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$receiptID = 'receiptID_example'; // string | Unique identifier for a Receipt

try {
    $result = $apiInstance->getReceiptAttachments($receiptID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getReceiptAttachments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receiptID** | [**string**](../Model/.md)| Unique identifier for a Receipt |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Attachments**](../Model/Attachments.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getReceiptHistory

> \Consilience\XeroAccounting\Sdk\Model\HistoryRecords getReceiptHistory($receiptID)

Allows you to retrieve a history records of an Receipt

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$receiptID = 'receiptID_example'; // string | Unique identifier for a Receipt

try {
    $result = $apiInstance->getReceiptHistory($receiptID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getReceiptHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receiptID** | [**string**](../Model/.md)| Unique identifier for a Receipt |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getReceipts

> \Consilience\XeroAccounting\Sdk\Model\Receipts getReceipts($ifModifiedSince, $where, $order, $unitdp)

Allows you to retrieve draft expense claim receipts for any user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ifModifiedSince = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only records created or modified since this timestamp will be returned
$where = 'where_example'; // string | Filter by an any element
$order = 'order_example'; // string | Order by an any element
$unitdp = 56; // int | e.g. unitdp=4 – You can opt in to use four decimal places for unit amounts

try {
    $result = $apiInstance->getReceipts($ifModifiedSince, $where, $order, $unitdp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getReceipts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ifModifiedSince** | **\DateTime**| Only records created or modified since this timestamp will be returned | [optional]
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]
 **unitdp** | **int**| e.g. unitdp&#x3D;4 – You can opt in to use four decimal places for unit amounts | [optional]

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Receipts**](../Model/Receipts.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getRepeatingInvoice

> \Consilience\XeroAccounting\Sdk\Model\RepeatingInvoices getRepeatingInvoice($repeatingInvoiceID)

Allows you to retrieve a specified repeating invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repeatingInvoiceID = 'repeatingInvoiceID_example'; // string | Unique identifier for a Repeating Invoice

try {
    $result = $apiInstance->getRepeatingInvoice($repeatingInvoiceID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getRepeatingInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repeatingInvoiceID** | [**string**](../Model/.md)| Unique identifier for a Repeating Invoice |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\RepeatingInvoices**](../Model/RepeatingInvoices.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getRepeatingInvoiceAttachmentByFileName

> \SplFileObject getRepeatingInvoiceAttachmentByFileName($repeatingInvoiceID, $fileName, $contentType)

Allows you to retrieve specified attachment on repeating invoices by file name

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repeatingInvoiceID = 'repeatingInvoiceID_example'; // string | Unique identifier for a Repeating Invoice
$fileName = 'fileName_example'; // string | The name of the file being attached to a Repeating Invoice
$contentType = 'contentType_example'; // string | The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf

try {
    $result = $apiInstance->getRepeatingInvoiceAttachmentByFileName($repeatingInvoiceID, $fileName, $contentType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getRepeatingInvoiceAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repeatingInvoiceID** | [**string**](../Model/.md)| Unique identifier for a Repeating Invoice |
 **fileName** | **string**| The name of the file being attached to a Repeating Invoice |
 **contentType** | **string**| The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getRepeatingInvoiceAttachmentById

> \SplFileObject getRepeatingInvoiceAttachmentById($repeatingInvoiceID, $attachmentID, $contentType)

Allows you to retrieve a specified Attachments on repeating invoices

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repeatingInvoiceID = 'repeatingInvoiceID_example'; // string | Unique identifier for a Repeating Invoice
$attachmentID = 'attachmentID_example'; // string | Unique identifier for a Attachment
$contentType = 'contentType_example'; // string | The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf

try {
    $result = $apiInstance->getRepeatingInvoiceAttachmentById($repeatingInvoiceID, $attachmentID, $contentType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getRepeatingInvoiceAttachmentById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repeatingInvoiceID** | [**string**](../Model/.md)| Unique identifier for a Repeating Invoice |
 **attachmentID** | [**string**](../Model/.md)| Unique identifier for a Attachment |
 **contentType** | **string**| The mime type of the attachment file you are retrieving i.e image/jpg, application/pdf |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getRepeatingInvoiceAttachments

> \Consilience\XeroAccounting\Sdk\Model\Attachments getRepeatingInvoiceAttachments($repeatingInvoiceID)

Allows you to retrieve Attachments on repeating invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repeatingInvoiceID = 'repeatingInvoiceID_example'; // string | Unique identifier for a Repeating Invoice

try {
    $result = $apiInstance->getRepeatingInvoiceAttachments($repeatingInvoiceID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getRepeatingInvoiceAttachments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repeatingInvoiceID** | [**string**](../Model/.md)| Unique identifier for a Repeating Invoice |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Attachments**](../Model/Attachments.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getRepeatingInvoiceHistory

> \Consilience\XeroAccounting\Sdk\Model\HistoryRecords getRepeatingInvoiceHistory($repeatingInvoiceID)

Allows you to retrieve history for a repeating invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repeatingInvoiceID = 'repeatingInvoiceID_example'; // string | Unique identifier for a Repeating Invoice

try {
    $result = $apiInstance->getRepeatingInvoiceHistory($repeatingInvoiceID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getRepeatingInvoiceHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repeatingInvoiceID** | [**string**](../Model/.md)| Unique identifier for a Repeating Invoice |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\HistoryRecords**](../Model/HistoryRecords.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getRepeatingInvoices

> \Consilience\XeroAccounting\Sdk\Model\RepeatingInvoices getRepeatingInvoices($where, $order)

Allows you to retrieve any repeating invoices

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$where = 'where_example'; // string | Filter by an any element
$order = 'order_example'; // string | Order by an any element

try {
    $result = $apiInstance->getRepeatingInvoices($where, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getRepeatingInvoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\RepeatingInvoices**](../Model/RepeatingInvoices.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getReportAgedPayablesByContact

> \Consilience\XeroAccounting\Sdk\Model\ReportWithRows getReportAgedPayablesByContact($contactId, $date, $fromDate, $toDate)

Allows you to retrieve report for AgedPayablesByContact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contactId = 'contactId_example'; // string | Unique identifier for a Contact
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date of the Aged Payables By Contact report
$fromDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The from date of the Aged Payables By Contact report
$toDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The to date of the Aged Payables By Contact report

try {
    $result = $apiInstance->getReportAgedPayablesByContact($contactId, $date, $fromDate, $toDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getReportAgedPayablesByContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactId** | [**string**](../Model/.md)| Unique identifier for a Contact |
 **date** | **\DateTime**| The date of the Aged Payables By Contact report | [optional]
 **fromDate** | **\DateTime**| The from date of the Aged Payables By Contact report | [optional]
 **toDate** | **\DateTime**| The to date of the Aged Payables By Contact report | [optional]

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\ReportWithRows**](../Model/ReportWithRows.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getReportAgedReceivablesByContact

> \Consilience\XeroAccounting\Sdk\Model\ReportWithRows getReportAgedReceivablesByContact($contactId, $date, $fromDate, $toDate)

Allows you to retrieve report for AgedReceivablesByContact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contactId = 'contactId_example'; // string | Unique identifier for a Contact
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date of the Aged Receivables By Contact report
$fromDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The from date of the Aged Receivables By Contact report
$toDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The to date of the Aged Receivables By Contact report

try {
    $result = $apiInstance->getReportAgedReceivablesByContact($contactId, $date, $fromDate, $toDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getReportAgedReceivablesByContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactId** | [**string**](../Model/.md)| Unique identifier for a Contact |
 **date** | **\DateTime**| The date of the Aged Receivables By Contact report | [optional]
 **fromDate** | **\DateTime**| The from date of the Aged Receivables By Contact report | [optional]
 **toDate** | **\DateTime**| The to date of the Aged Receivables By Contact report | [optional]

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\ReportWithRows**](../Model/ReportWithRows.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getReportBASorGST

> \Consilience\XeroAccounting\Sdk\Model\ReportWithRows getReportBASorGST($reportID)

Allows you to retrieve report for BAS only valid for AU orgs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$reportID = 'reportID_example'; // string | Unique identifier for a Report

try {
    $result = $apiInstance->getReportBASorGST($reportID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getReportBASorGST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reportID** | **string**| Unique identifier for a Report |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\ReportWithRows**](../Model/ReportWithRows.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getReportBASorGSTList

> \Consilience\XeroAccounting\Sdk\Model\ReportWithRows getReportBASorGSTList()

Allows you to retrieve report for BAS only valid for AU orgs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getReportBASorGSTList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getReportBASorGSTList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\ReportWithRows**](../Model/ReportWithRows.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getReportBalanceSheet

> \Consilience\XeroAccounting\Sdk\Model\ReportWithRows getReportBalanceSheet($date, $periods, $timeframe, $trackingOptionID1, $trackingOptionID2, $standardLayout, $paymentsOnly)

Allows you to retrieve report for BalanceSheet

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$date = 'date_example'; // string | The date of the Balance Sheet report
$periods = 56; // int | The number of periods for the Balance Sheet report
$timeframe = 'timeframe_example'; // string | The period size to compare to (MONTH, QUARTER, YEAR)
$trackingOptionID1 = 'trackingOptionID1_example'; // string | The tracking option 1 for the Balance Sheet report
$trackingOptionID2 = 'trackingOptionID2_example'; // string | The tracking option 2 for the Balance Sheet report
$standardLayout = True; // bool | The standard layout boolean for the Balance Sheet report
$paymentsOnly = True; // bool | return a cash basis for the Balance Sheet report

try {
    $result = $apiInstance->getReportBalanceSheet($date, $periods, $timeframe, $trackingOptionID1, $trackingOptionID2, $standardLayout, $paymentsOnly);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getReportBalanceSheet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date** | **string**| The date of the Balance Sheet report | [optional]
 **periods** | **int**| The number of periods for the Balance Sheet report | [optional]
 **timeframe** | **string**| The period size to compare to (MONTH, QUARTER, YEAR) | [optional]
 **trackingOptionID1** | **string**| The tracking option 1 for the Balance Sheet report | [optional]
 **trackingOptionID2** | **string**| The tracking option 2 for the Balance Sheet report | [optional]
 **standardLayout** | **bool**| The standard layout boolean for the Balance Sheet report | [optional]
 **paymentsOnly** | **bool**| return a cash basis for the Balance Sheet report | [optional]

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\ReportWithRows**](../Model/ReportWithRows.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getReportBankSummary

> \Consilience\XeroAccounting\Sdk\Model\ReportWithRows getReportBankSummary($date, $period, $timeframe)

Allows you to retrieve report for BankSummary

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$date = 'date_example'; // string | The date for the Bank Summary report e.g. 2018-03-31
$period = 56; // int | The number of periods to compare (integer between 1 and 12)
$timeframe = 56; // int | The period size to compare to (1=month, 3=quarter, 12=year)

try {
    $result = $apiInstance->getReportBankSummary($date, $period, $timeframe);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getReportBankSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date** | **string**| The date for the Bank Summary report e.g. 2018-03-31 | [optional]
 **period** | **int**| The number of periods to compare (integer between 1 and 12) | [optional]
 **timeframe** | **int**| The period size to compare to (1&#x3D;month, 3&#x3D;quarter, 12&#x3D;year) | [optional]

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\ReportWithRows**](../Model/ReportWithRows.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getReportBudgetSummary

> \Consilience\XeroAccounting\Sdk\Model\ReportWithRows getReportBudgetSummary($date, $period, $timeframe)

Allows you to retrieve report for Budget Summary

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date for the Bank Summary report e.g. 2018-03-31
$period = 56; // int | The number of periods to compare (integer between 1 and 12)
$timeframe = 56; // int | The period size to compare to (1=month, 3=quarter, 12=year)

try {
    $result = $apiInstance->getReportBudgetSummary($date, $period, $timeframe);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getReportBudgetSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date** | **\DateTime**| The date for the Bank Summary report e.g. 2018-03-31 | [optional]
 **period** | **int**| The number of periods to compare (integer between 1 and 12) | [optional]
 **timeframe** | **int**| The period size to compare to (1&#x3D;month, 3&#x3D;quarter, 12&#x3D;year) | [optional]

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\ReportWithRows**](../Model/ReportWithRows.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getReportExecutiveSummary

> \Consilience\XeroAccounting\Sdk\Model\ReportWithRows getReportExecutiveSummary($date)

Allows you to retrieve report for ExecutiveSummary

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$date = 'date_example'; // string | The date for the Bank Summary report e.g. 2018-03-31

try {
    $result = $apiInstance->getReportExecutiveSummary($date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getReportExecutiveSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date** | **string**| The date for the Bank Summary report e.g. 2018-03-31 | [optional]

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\ReportWithRows**](../Model/ReportWithRows.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getReportProfitAndLoss

> \Consilience\XeroAccounting\Sdk\Model\ReportWithRows getReportProfitAndLoss($fromDate, $toDate, $periods, $timeframe, $trackingCategoryID, $trackingCategoryID2, $trackingOptionID, $trackingOptionID2, $standardLayout, $paymentsOnly)

Allows you to retrieve report for ProfitAndLoss

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fromDate = 'fromDate_example'; // string | The from date for the ProfitAndLoss report e.g. 2018-03-31
$toDate = 'toDate_example'; // string | The to date for the ProfitAndLoss report e.g. 2018-03-31
$periods = 56; // int | The number of periods to compare (integer between 1 and 12)
$timeframe = 'timeframe_example'; // string | The period size to compare to (MONTH, QUARTER, YEAR)
$trackingCategoryID = 'trackingCategoryID_example'; // string | The trackingCategory 1 for the ProfitAndLoss report
$trackingCategoryID2 = 'trackingCategoryID2_example'; // string | The trackingCategory 2 for the ProfitAndLoss report
$trackingOptionID = 'trackingOptionID_example'; // string | The tracking option 1 for the ProfitAndLoss report
$trackingOptionID2 = 'trackingOptionID2_example'; // string | The tracking option 2 for the ProfitAndLoss report
$standardLayout = True; // bool | Return the standard layout for the ProfitAndLoss report
$paymentsOnly = True; // bool | Return cash only basis for the ProfitAndLoss report

try {
    $result = $apiInstance->getReportProfitAndLoss($fromDate, $toDate, $periods, $timeframe, $trackingCategoryID, $trackingCategoryID2, $trackingOptionID, $trackingOptionID2, $standardLayout, $paymentsOnly);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getReportProfitAndLoss: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fromDate** | **string**| The from date for the ProfitAndLoss report e.g. 2018-03-31 | [optional]
 **toDate** | **string**| The to date for the ProfitAndLoss report e.g. 2018-03-31 | [optional]
 **periods** | **int**| The number of periods to compare (integer between 1 and 12) | [optional]
 **timeframe** | **string**| The period size to compare to (MONTH, QUARTER, YEAR) | [optional]
 **trackingCategoryID** | **string**| The trackingCategory 1 for the ProfitAndLoss report | [optional]
 **trackingCategoryID2** | **string**| The trackingCategory 2 for the ProfitAndLoss report | [optional]
 **trackingOptionID** | **string**| The tracking option 1 for the ProfitAndLoss report | [optional]
 **trackingOptionID2** | **string**| The tracking option 2 for the ProfitAndLoss report | [optional]
 **standardLayout** | **bool**| Return the standard layout for the ProfitAndLoss report | [optional]
 **paymentsOnly** | **bool**| Return cash only basis for the ProfitAndLoss report | [optional]

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\ReportWithRows**](../Model/ReportWithRows.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getReportTenNinetyNine

> \Consilience\XeroAccounting\Sdk\Model\Reports getReportTenNinetyNine($reportYear)

Allows you to retrieve report for TenNinetyNine

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$reportYear = 'reportYear_example'; // string | The year of the 1099 report

try {
    $result = $apiInstance->getReportTenNinetyNine($reportYear);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getReportTenNinetyNine: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reportYear** | **string**| The year of the 1099 report | [optional]

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Reports**](../Model/Reports.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getReportTrialBalance

> \Consilience\XeroAccounting\Sdk\Model\ReportWithRows getReportTrialBalance($date, $paymentsOnly)

Allows you to retrieve report for TrialBalance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$date = 'date_example'; // string | The date for the Trial Balance report e.g. 2018-03-31
$paymentsOnly = True; // bool | Return cash only basis for the Trial Balance report

try {
    $result = $apiInstance->getReportTrialBalance($date, $paymentsOnly);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getReportTrialBalance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date** | **string**| The date for the Trial Balance report e.g. 2018-03-31 | [optional]
 **paymentsOnly** | **bool**| Return cash only basis for the Trial Balance report | [optional]

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\ReportWithRows**](../Model/ReportWithRows.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getTaxRates

> \Consilience\XeroAccounting\Sdk\Model\TaxRates getTaxRates($where, $order, $taxType)

Allows you to retrieve Tax Rates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$where = 'where_example'; // string | Filter by an any element
$order = 'order_example'; // string | Order by an any element
$taxType = 'taxType_example'; // string | Filter by tax type

try {
    $result = $apiInstance->getTaxRates($where, $order, $taxType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getTaxRates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]
 **taxType** | **string**| Filter by tax type | [optional]

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\TaxRates**](../Model/TaxRates.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getTrackingCategories

> \Consilience\XeroAccounting\Sdk\Model\TrackingCategories getTrackingCategories($where, $order, $includeArchived)

Allows you to retrieve tracking categories and options

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$where = 'where_example'; // string | Filter by an any element
$order = 'order_example'; // string | Order by an any element
$includeArchived = True; // bool | e.g. includeArchived=true - Categories and options with a status of ARCHIVED will be included in the response

try {
    $result = $apiInstance->getTrackingCategories($where, $order, $includeArchived);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getTrackingCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]
 **includeArchived** | **bool**| e.g. includeArchived&#x3D;true - Categories and options with a status of ARCHIVED will be included in the response | [optional]

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\TrackingCategories**](../Model/TrackingCategories.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getTrackingCategory

> \Consilience\XeroAccounting\Sdk\Model\TrackingCategories getTrackingCategory($trackingCategoryID)

Allows you to retrieve tracking categories and options for specified category

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$trackingCategoryID = 'trackingCategoryID_example'; // string | Unique identifier for a TrackingCategory

try {
    $result = $apiInstance->getTrackingCategory($trackingCategoryID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getTrackingCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **trackingCategoryID** | [**string**](../Model/.md)| Unique identifier for a TrackingCategory |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\TrackingCategories**](../Model/TrackingCategories.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getUser

> \Consilience\XeroAccounting\Sdk\Model\Users getUser($userID)

Allows you to retrieve a specified user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$userID = 'userID_example'; // string | Unique identifier for a User

try {
    $result = $apiInstance->getUser($userID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userID** | [**string**](../Model/.md)| Unique identifier for a User |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Users**](../Model/Users.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getUsers

> \Consilience\XeroAccounting\Sdk\Model\Users getUsers($ifModifiedSince, $where, $order)

Allows you to retrieve users

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ifModifiedSince = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only records created or modified since this timestamp will be returned
$where = 'where_example'; // string | Filter by an any element
$order = 'order_example'; // string | Order by an any element

try {
    $result = $apiInstance->getUsers($ifModifiedSince, $where, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->getUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ifModifiedSince** | **\DateTime**| Only records created or modified since this timestamp will be returned | [optional]
 **where** | **string**| Filter by an any element | [optional]
 **order** | **string**| Order by an any element | [optional]

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Users**](../Model/Users.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateAccount

> \Consilience\XeroAccounting\Sdk\Model\Accounts updateAccount($accountID, $accounts)

Allows you to update a chart of accounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountID = 'accountID_example'; // string | Unique identifier for retrieving single object
$accounts = { "Accounts":[ { "Code":"123456", "Name":"BarFoo", "AccountID":"99ce6032-0678-4aa0-8148-240c75fee33a", "Type":"EXPENSE", "Description":"GoodBye World", "TaxType":"INPUT", "EnablePaymentsToAccount":false, "ShowInExpenseClaims":false, "Class":"EXPENSE", "ReportingCode":"EXP", "ReportingCodeName":"Expense", "UpdatedDateUTC":"2019-02-21T16:29:47.96-08:00" } ] }; // \Consilience\XeroAccounting\Sdk\Model\Accounts | Request of type Accounts array with one Account

try {
    $result = $apiInstance->updateAccount($accountID, $accounts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountID** | [**string**](../Model/.md)| Unique identifier for retrieving single object |
 **accounts** | [**\Consilience\XeroAccounting\Sdk\Model\Accounts**](../Model/Accounts.md)| Request of type Accounts array with one Account |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Accounts**](../Model/Accounts.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateAccountAttachmentByFileName

> \Consilience\XeroAccounting\Sdk\Model\Attachments updateAccountAttachmentByFileName($accountID, $fileName, $body)

Allows you to update Attachment on Account by Filename

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountID = 'accountID_example'; // string | Unique identifier for Account object
$fileName = 'fileName_example'; // string | Name of the attachment
$body = 'body_example'; // string | Byte array of file in body of request

try {
    $result = $apiInstance->updateAccountAttachmentByFileName($accountID, $fileName, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateAccountAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountID** | [**string**](../Model/.md)| Unique identifier for Account object |
 **fileName** | **string**| Name of the attachment |
 **body** | **string**| Byte array of file in body of request |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Attachments**](../Model/Attachments.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/octet-stream
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateBankTransaction

> \Consilience\XeroAccounting\Sdk\Model\BankTransactions updateBankTransaction($bankTransactionID, $bankTransactions)

Allows you to update a single spend or receive money transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bankTransactionID = 'bankTransactionID_example'; // string | Xero generated unique identifier for a bank transaction
$bankTransactions = { "BankTransactions":[ { "Type":"SPEND", "Contact":{ "ContactID":"5cc8cf28-567e-4d43-b287-687cfcaec47c", "ContactStatus":"ACTIVE", "Name":"Katherine Warren", "FirstName":"Katherine", "LastName":"Warren", "EmailAddress":"kat.warren@clampett.com", "ContactPersons":[
], "BankAccountDetails":"", "Addresses":[ { "AddressType":"STREET", "City":"", "Region":"", "PostalCode":"", "Country":"" }, { "AddressType":"POBOX", "AddressLine1":"", "AddressLine2":"", "AddressLine3":"", "AddressLine4":"", "City":"Palo Alto", "Region":"CA", "PostalCode":"94020", "Country":"United States" } ], "Phones":[ { "PhoneType":"DEFAULT", "PhoneNumber":"847-1294", "PhoneAreaCode":"(626)", "PhoneCountryCode":"" }, { "PhoneType":"DDI", "PhoneNumber":"", "PhoneAreaCode":"", "PhoneCountryCode":"" }, { "PhoneType":"FAX", "PhoneNumber":"", "PhoneAreaCode":"", "PhoneCountryCode":"" }, { "PhoneType":"MOBILE", "PhoneNumber":"", "PhoneAreaCode":"", "PhoneCountryCode":"" } ], "UpdatedDateUTC":"2017-08-21T13:49:04.227-07:00", "ContactGroups":[
] }, "Lineitems":[
], "BankAccount":{ "Code":"088", "Name":"Business Wells Fargo", "AccountID":"6f7594f2-f059-4d56-9e67-47ac9733bfe9" }, "IsReconciled":false, "Date":"2019-02-25", "Reference":"You just updated", "CurrencyCode":"USD", "CurrencyRate":1.0, "Status":"AUTHORISED", "LineAmountTypes":"Inclusive", "TotalTax":1.74, "BankTransactionID":"1289c190-e46d-434b-9628-463ffdb52f00", "UpdatedDateUTC":"2019-02-26T12:39:27.813-08:00" } ] }; // \Consilience\XeroAccounting\Sdk\Model\BankTransactions | 

try {
    $result = $apiInstance->updateBankTransaction($bankTransactionID, $bankTransactions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateBankTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bankTransactionID** | [**string**](../Model/.md)| Xero generated unique identifier for a bank transaction |
 **bankTransactions** | [**\Consilience\XeroAccounting\Sdk\Model\BankTransactions**](../Model/BankTransactions.md)|  |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\BankTransactions**](../Model/BankTransactions.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateBankTransactionAttachmentByFileName

> \Consilience\XeroAccounting\Sdk\Model\Attachments updateBankTransactionAttachmentByFileName($bankTransactionID, $fileName, $body)

Allows you to update an Attachment on BankTransaction by Filename

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bankTransactionID = 'bankTransactionID_example'; // string | Xero generated unique identifier for a bank transaction
$fileName = 'fileName_example'; // string | The name of the file being attached
$body = 'body_example'; // string | Byte array of file in body of request

try {
    $result = $apiInstance->updateBankTransactionAttachmentByFileName($bankTransactionID, $fileName, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateBankTransactionAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bankTransactionID** | [**string**](../Model/.md)| Xero generated unique identifier for a bank transaction |
 **fileName** | **string**| The name of the file being attached |
 **body** | **string**| Byte array of file in body of request |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Attachments**](../Model/Attachments.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/octet-stream
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateBankTransferAttachmentByFileName

> \Consilience\XeroAccounting\Sdk\Model\Attachments updateBankTransferAttachmentByFileName($bankTransferID, $fileName, $body)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bankTransferID = 'bankTransferID_example'; // string | Xero generated unique identifier for a bank transfer
$fileName = 'fileName_example'; // string | The name of the file being attached to a Bank Transfer
$body = 'body_example'; // string | Byte array of file in body of request

try {
    $result = $apiInstance->updateBankTransferAttachmentByFileName($bankTransferID, $fileName, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateBankTransferAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bankTransferID** | [**string**](../Model/.md)| Xero generated unique identifier for a bank transfer |
 **fileName** | **string**| The name of the file being attached to a Bank Transfer |
 **body** | **string**| Byte array of file in body of request |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Attachments**](../Model/Attachments.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/octet-stream
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateContact

> \Consilience\XeroAccounting\Sdk\Model\Contacts updateContact($contactID, $contacts)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contactID = 'contactID_example'; // string | Unique identifier for a Contact
$contacts = { "Contacts":[ { "ContactID":"d5be01fb-b09f-4c3a-9c67-e10c2a03412c", "Name":"FooBar" } ] }; // \Consilience\XeroAccounting\Sdk\Model\Contacts | 

try {
    $result = $apiInstance->updateContact($contactID, $contacts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactID** | [**string**](../Model/.md)| Unique identifier for a Contact |
 **contacts** | [**\Consilience\XeroAccounting\Sdk\Model\Contacts**](../Model/Contacts.md)|  | [optional]

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Contacts**](../Model/Contacts.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateContactAttachmentByFileName

> \Consilience\XeroAccounting\Sdk\Model\Attachments updateContactAttachmentByFileName($contactID, $fileName, $body)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contactID = 'contactID_example'; // string | Unique identifier for a Contact
$fileName = 'fileName_example'; // string | Name for the file you are attaching
$body = 'body_example'; // string | Byte array of file in body of request

try {
    $result = $apiInstance->updateContactAttachmentByFileName($contactID, $fileName, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateContactAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactID** | [**string**](../Model/.md)| Unique identifier for a Contact |
 **fileName** | **string**| Name for the file you are attaching |
 **body** | **string**| Byte array of file in body of request |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Attachments**](../Model/Attachments.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/octet-stream
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateContactGroup

> \Consilience\XeroAccounting\Sdk\Model\ContactGroups updateContactGroup($contactGroupID, $contactGroups)

Allows you to update a Contract Group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contactGroupID = 'contactGroupID_example'; // string | Unique identifier for a Contact Group
$contactGroups = { "ContactGroups":[ { "Name":"Vendor" } ] }; // \Consilience\XeroAccounting\Sdk\Model\ContactGroups | 

try {
    $result = $apiInstance->updateContactGroup($contactGroupID, $contactGroups);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateContactGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactGroupID** | [**string**](../Model/.md)| Unique identifier for a Contact Group |
 **contactGroups** | [**\Consilience\XeroAccounting\Sdk\Model\ContactGroups**](../Model/ContactGroups.md)|  | [optional]

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\ContactGroups**](../Model/ContactGroups.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateCreditNote

> \Consilience\XeroAccounting\Sdk\Model\CreditNotes updateCreditNote($creditNoteID, $creditNotes)

Allows you to update a specific credit note

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$creditNoteID = 'creditNoteID_example'; // string | Unique identifier for a Credit Note
$creditNotes = { "CreditNotes":[ { "Type":"ACCPAYCREDIT", "Contact":{ "ContactID":"430fa14a-f945-44d3-9f97-5df5e28441b8" }, "Date":"2019-01-05", "Status":"AUTHORISED", "Reference": "HelloWorld", "LineItems":[ { "Description":"Foobar", "Quantity":2.0, "UnitAmount":20.0, "AccountCode":"400" } ] } ] }; // \Consilience\XeroAccounting\Sdk\Model\CreditNotes | 

try {
    $result = $apiInstance->updateCreditNote($creditNoteID, $creditNotes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateCreditNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **creditNoteID** | [**string**](../Model/.md)| Unique identifier for a Credit Note |
 **creditNotes** | [**\Consilience\XeroAccounting\Sdk\Model\CreditNotes**](../Model/CreditNotes.md)|  | [optional]

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\CreditNotes**](../Model/CreditNotes.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateCreditNoteAttachmentByFileName

> \Consilience\XeroAccounting\Sdk\Model\Attachments updateCreditNoteAttachmentByFileName($creditNoteID, $fileName, $body)

Allows you to update Attachments on CreditNote by file name

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$creditNoteID = 'creditNoteID_example'; // string | Unique identifier for a Credit Note
$fileName = 'fileName_example'; // string | Name of the file you are attaching to Credit Note
$body = 'body_example'; // string | Byte array of file in body of request

try {
    $result = $apiInstance->updateCreditNoteAttachmentByFileName($creditNoteID, $fileName, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateCreditNoteAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **creditNoteID** | [**string**](../Model/.md)| Unique identifier for a Credit Note |
 **fileName** | **string**| Name of the file you are attaching to Credit Note |
 **body** | **string**| Byte array of file in body of request |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Attachments**](../Model/Attachments.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/octet-stream
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateEmployee

> \Consilience\XeroAccounting\Sdk\Model\Employees updateEmployee($employeeID, $employees)

Allows you to update a specific employee used in Xero payrun

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$employeeID = 'employeeID_example'; // string | Unique identifier for a Employee
$employees = { "Employees":[ { "EmployeeID":"ad3db144-6362-459c-8c36-5d31d196e629", "FirstName":"Bruce", "LastName":"Banner" } ] }; // \Consilience\XeroAccounting\Sdk\Model\Employees | 

try {
    $result = $apiInstance->updateEmployee($employeeID, $employees);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateEmployee: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **employeeID** | [**string**](../Model/.md)| Unique identifier for a Employee |
 **employees** | [**\Consilience\XeroAccounting\Sdk\Model\Employees**](../Model/Employees.md)|  |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Employees**](../Model/Employees.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateExpenseClaim

> \Consilience\XeroAccounting\Sdk\Model\ExpenseClaims updateExpenseClaim($expenseClaimID, $expenseClaims)

Allows you to update specified expense claims

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$expenseClaimID = 'expenseClaimID_example'; // string | Unique identifier for a ExpenseClaim
$expenseClaims = { "ExpenseClaims":[ { "Status":"AUTHORISED", "User":{ "UserID":"d1164823-0ac1-41ad-987b-b4e30fe0b273" }, "Receipts":[ { "Lineitems":[
], "ReceiptID":"dc1c7f6d-0a4c-402f-acac-551d62ce5816" } ] } ] }; // \Consilience\XeroAccounting\Sdk\Model\ExpenseClaims | 

try {
    $result = $apiInstance->updateExpenseClaim($expenseClaimID, $expenseClaims);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateExpenseClaim: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **expenseClaimID** | [**string**](../Model/.md)| Unique identifier for a ExpenseClaim |
 **expenseClaims** | [**\Consilience\XeroAccounting\Sdk\Model\ExpenseClaims**](../Model/ExpenseClaims.md)|  |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\ExpenseClaims**](../Model/ExpenseClaims.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateInvoice

> \Consilience\XeroAccounting\Sdk\Model\Invoices updateInvoice($invoiceID, $invoices)

Allows you to update a specified sales invoices or purchase bills

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invoiceID = 'invoiceID_example'; // string | Unique identifier for an Invoice
$invoices = { "Invoices":[ { "LineItems":[
], "Reference":"My the Force be With You", "InvoiceID":"4074292c-09b3-456d-84e7-add864c6c39b" } ] }; // \Consilience\XeroAccounting\Sdk\Model\Invoices | 

try {
    $result = $apiInstance->updateInvoice($invoiceID, $invoices);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoiceID** | [**string**](../Model/.md)| Unique identifier for an Invoice |
 **invoices** | [**\Consilience\XeroAccounting\Sdk\Model\Invoices**](../Model/Invoices.md)|  |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Invoices**](../Model/Invoices.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateInvoiceAttachmentByFileName

> \Consilience\XeroAccounting\Sdk\Model\Attachments updateInvoiceAttachmentByFileName($invoiceID, $fileName, $body)

Allows you to update Attachment on invoices or purchase bills by it's filename

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invoiceID = 'invoiceID_example'; // string | Unique identifier for an Invoice
$fileName = 'fileName_example'; // string | Name of the file you are attaching
$body = 'body_example'; // string | Byte array of file in body of request

try {
    $result = $apiInstance->updateInvoiceAttachmentByFileName($invoiceID, $fileName, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateInvoiceAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoiceID** | [**string**](../Model/.md)| Unique identifier for an Invoice |
 **fileName** | **string**| Name of the file you are attaching |
 **body** | **string**| Byte array of file in body of request |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Attachments**](../Model/Attachments.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/octet-stream
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateItem

> \Consilience\XeroAccounting\Sdk\Model\Items updateItem($itemID, $items)

Allows you to udpate a specified item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$itemID = 'itemID_example'; // string | Unique identifier for an Item
$items = { "Items":[ { "Code":"abc38306", "Description":"Hello Xero" } ] }; // \Consilience\XeroAccounting\Sdk\Model\Items | 

try {
    $result = $apiInstance->updateItem($itemID, $items);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **itemID** | [**string**](../Model/.md)| Unique identifier for an Item |
 **items** | [**\Consilience\XeroAccounting\Sdk\Model\Items**](../Model/Items.md)|  |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Items**](../Model/Items.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateLinkedTransaction

> \Consilience\XeroAccounting\Sdk\Model\LinkedTransactions updateLinkedTransaction($linkedTransactionID, $linkedTransactions)

Allows you to update a specified linked transactions (billable expenses)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$linkedTransactionID = 'linkedTransactionID_example'; // string | Unique identifier for a LinkedTransaction
$linkedTransactions = { "LinkedTransactions":[ { "ContactID":"4e1753b9-018a-4775-b6aa-1bc7871cfee3" } ] }; // \Consilience\XeroAccounting\Sdk\Model\LinkedTransactions | 

try {
    $result = $apiInstance->updateLinkedTransaction($linkedTransactionID, $linkedTransactions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateLinkedTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **linkedTransactionID** | [**string**](../Model/.md)| Unique identifier for a LinkedTransaction |
 **linkedTransactions** | [**\Consilience\XeroAccounting\Sdk\Model\LinkedTransactions**](../Model/LinkedTransactions.md)|  |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\LinkedTransactions**](../Model/LinkedTransactions.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateManualJournal

> \Consilience\XeroAccounting\Sdk\Model\ManualJournals updateManualJournal($manualJournalID, $manualJournals)

Allows you to update a specified manual journal

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$manualJournalID = 'manualJournalID_example'; // string | Unique identifier for a ManualJournal
$manualJournals = { "ManualJournals":[ { "Narration":"Hello Xero", "JournalLines":[
], "ManualJournalID":"07eac261-78ef-47a0-a0eb-a57b74137877" } ] }; // \Consilience\XeroAccounting\Sdk\Model\ManualJournals | 

try {
    $result = $apiInstance->updateManualJournal($manualJournalID, $manualJournals);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateManualJournal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manualJournalID** | [**string**](../Model/.md)| Unique identifier for a ManualJournal |
 **manualJournals** | [**\Consilience\XeroAccounting\Sdk\Model\ManualJournals**](../Model/ManualJournals.md)|  |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\ManualJournals**](../Model/ManualJournals.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateManualJournalAttachmentByFileName

> \Consilience\XeroAccounting\Sdk\Model\Attachments updateManualJournalAttachmentByFileName($manualJournalID, $fileName, $body)

Allows you to update a specified Attachment on ManualJournal by file name

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$manualJournalID = 'manualJournalID_example'; // string | Unique identifier for a ManualJournal
$fileName = 'fileName_example'; // string | The name of the file being attached to a ManualJournal
$body = 'body_example'; // string | Byte array of file in body of request

try {
    $result = $apiInstance->updateManualJournalAttachmentByFileName($manualJournalID, $fileName, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateManualJournalAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manualJournalID** | [**string**](../Model/.md)| Unique identifier for a ManualJournal |
 **fileName** | **string**| The name of the file being attached to a ManualJournal |
 **body** | **string**| Byte array of file in body of request |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Attachments**](../Model/Attachments.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/octet-stream
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updatePurchaseOrder

> \Consilience\XeroAccounting\Sdk\Model\PurchaseOrders updatePurchaseOrder($purchaseOrderID, $purchaseOrders)

Allows you to update a specified purchase order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$purchaseOrderID = 'purchaseOrderID_example'; // string | Unique identifier for a PurchaseOrder
$purchaseOrders = { "PurchaseOrders":[ { "LineItems":[
], "AttentionTo":"Jimmy" } ] }; // \Consilience\XeroAccounting\Sdk\Model\PurchaseOrders | 

try {
    $result = $apiInstance->updatePurchaseOrder($purchaseOrderID, $purchaseOrders);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updatePurchaseOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **purchaseOrderID** | [**string**](../Model/.md)| Unique identifier for a PurchaseOrder |
 **purchaseOrders** | [**\Consilience\XeroAccounting\Sdk\Model\PurchaseOrders**](../Model/PurchaseOrders.md)|  |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\PurchaseOrders**](../Model/PurchaseOrders.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateReceipt

> \Consilience\XeroAccounting\Sdk\Model\Receipts updateReceipt($receiptID, $receipts)

Allows you to retrieve a specified draft expense claim receipts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$receiptID = 'receiptID_example'; // string | Unique identifier for a Receipt
$receipts = { "Receipts":[ { "Lineitems":[
], "User":{ "UserID":"d1164823-0ac1-41ad-987b-b4e30fe0b273" }, "Reference":"Foobar" } ] }; // \Consilience\XeroAccounting\Sdk\Model\Receipts | 

try {
    $result = $apiInstance->updateReceipt($receiptID, $receipts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateReceipt: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receiptID** | [**string**](../Model/.md)| Unique identifier for a Receipt |
 **receipts** | [**\Consilience\XeroAccounting\Sdk\Model\Receipts**](../Model/Receipts.md)|  |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Receipts**](../Model/Receipts.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateReceiptAttachmentByFileName

> \Consilience\XeroAccounting\Sdk\Model\Attachments updateReceiptAttachmentByFileName($receiptID, $fileName, $body)

Allows you to update Attachment on expense claim receipts by file name

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$receiptID = 'receiptID_example'; // string | Unique identifier for a Receipt
$fileName = 'fileName_example'; // string | The name of the file being attached to the Receipt
$body = 'body_example'; // string | Byte array of file in body of request

try {
    $result = $apiInstance->updateReceiptAttachmentByFileName($receiptID, $fileName, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateReceiptAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receiptID** | [**string**](../Model/.md)| Unique identifier for a Receipt |
 **fileName** | **string**| The name of the file being attached to the Receipt |
 **body** | **string**| Byte array of file in body of request |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Attachments**](../Model/Attachments.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/octet-stream
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateRepeatingInvoiceAttachmentByFileName

> \Consilience\XeroAccounting\Sdk\Model\Attachments updateRepeatingInvoiceAttachmentByFileName($repeatingInvoiceID, $fileName, $body)

Allows you to update specified attachment on repeating invoices by file name

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repeatingInvoiceID = 'repeatingInvoiceID_example'; // string | Unique identifier for a Repeating Invoice
$fileName = 'fileName_example'; // string | The name of the file being attached to a Repeating Invoice
$body = 'body_example'; // string | Byte array of file in body of request

try {
    $result = $apiInstance->updateRepeatingInvoiceAttachmentByFileName($repeatingInvoiceID, $fileName, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateRepeatingInvoiceAttachmentByFileName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repeatingInvoiceID** | [**string**](../Model/.md)| Unique identifier for a Repeating Invoice |
 **fileName** | **string**| The name of the file being attached to a Repeating Invoice |
 **body** | **string**| Byte array of file in body of request |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\Attachments**](../Model/Attachments.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/octet-stream
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateTaxRate

> \Consilience\XeroAccounting\Sdk\Model\TaxRates updateTaxRate($taxRates)

Allows you to update Tax Rates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$taxRates = { "TaxRates":[ { "Name":"SDKTax29067", "TaxComponents":[ { "Name":"State Tax", "Rate":2.25 } ], "Status":"DELETED", "ReportTaxType":"INPUT" } ] }; // \Consilience\XeroAccounting\Sdk\Model\TaxRates | 

try {
    $result = $apiInstance->updateTaxRate($taxRates);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateTaxRate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **taxRates** | [**\Consilience\XeroAccounting\Sdk\Model\TaxRates**](../Model/TaxRates.md)|  |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\TaxRates**](../Model/TaxRates.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateTrackingCategory

> \Consilience\XeroAccounting\Sdk\Model\TrackingCategories updateTrackingCategory($trackingCategoryID, $trackingCategory)

Allows you to update tracking categories

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Consilience\XeroAccounting\Sdk\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$trackingCategoryID = 'trackingCategoryID_example'; // string | Unique identifier for a TrackingCategory
$trackingCategory = { "Name":"BarFoo" }; // \Consilience\XeroAccounting\Sdk\Model\TrackingCategory | 

try {
    $result = $apiInstance->updateTrackingCategory($trackingCategoryID, $trackingCategory);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->updateTrackingCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **trackingCategoryID** | [**string**](../Model/.md)| Unique identifier for a TrackingCategory |
 **trackingCategory** | [**\Consilience\XeroAccounting\Sdk\Model\TrackingCategory**](../Model/TrackingCategory.md)|  |

### Return type

[**\Consilience\XeroAccounting\Sdk\Model\TrackingCategories**](../Model/TrackingCategories.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

