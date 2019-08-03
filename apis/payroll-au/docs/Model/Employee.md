# # Employee

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**firstName** | **string** | First name of employee (max length &#x3D; 35) | 
**lastName** | **string** | Last name of employee (max length &#x3D; 35) | 
**dateOfBirth** | [**\DateTime**](\DateTime.md) | Date of birth of the employee (YYYY-MM-DD) | 
**homeAddress** | **object** |  | 
**startDate** | [**\DateTime**](\DateTime.md) | If you aren’t sure of the exact start date for an employee, you can just enter the start of the current financial year (YYYY-MM-DD) | [optional] 
**title** | **string** | Title of the employee (max length &#x3D; 10) | [optional] 
**middleNames** | **string** | Middle name(s) of the employee (max length &#x3D; 35) | [optional] 
**email** | **string** | The email address for the employee (max length &#x3D; 100) | [optional] 
**gender** | **string** | The employee’s gender (M or F) | [optional] 
**mobile** | **string** | Employee mobile number (max length &#x3D; 50) | [optional] 
**twitterUserName** | **string** | Employee’s twitter name, entered as @twittername (max length &#x3D; 50) | [optional] 
**isAuthorisedToApproveLeave** | **bool** | Boolean (true / false) – set this to true if the employee is authorised to approve other employees’ leave requests | [optional] 
**isAuthorisedToApproveTimesheets** | **bool** | Booelan – set this to true if the employee is authorised to approve timesheets | [optional] 
**jobTitle** | **string** | JobTitle of the employee (max length &#x3D; 50) | [optional] 
**classification** | **string** | Employees under an award scheme will be covered by a modern award classification. If you record a classification, it will be included on your payslips (max length &#x3D; 100) | [optional] 
**ordinaryEarningsRateID** | **string** | Xero unique identifier for earnings rate | [optional] 
**payrollCalendarID** | **string** | Xero unique identifier for payroll calendar for the employee | [optional] 
**employeeGroupName** | **string** | The Employee Group allows you to report on payroll expenses and liabilities for each group of employees | [optional] 
**bankAccounts** | [**\Consilience\Xero\PayrollAuSdk\Model\BankAccount[]**](BankAccount.md) | See BankAccount | [optional] 
**payTemplate** | **object** |  | [optional] 
**openingBalances** | [**\Consilience\Xero\PayrollAuSdk\Model\OpeningBalance[]**](OpeningBalance.md) | See OpeningBalances | [optional] 
**leaveBalances** | [**\Consilience\Xero\PayrollAuSdk\Model\LeaveBalance[]**](LeaveBalance.md) | See LeaveBalances | [optional] 
**superMemberships** | [**\Consilience\Xero\PayrollAuSdk\Model\SuperMembership[]**](SuperMembership.md) | See SuperMemberships | [optional] 
**terminationDate** | [**\DateTime**](\DateTime.md) | Employee Termination Date (YYYY-MM-DD) | [optional] 
**employeeID** | **string** | Xero unique identifier for an Employee | [optional] 
**status** | **string** | See Employee Status Types | [optional] 
**updatedDateUTC** | [**\DateTime**](\DateTime.md) | Last modified timestamp | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


