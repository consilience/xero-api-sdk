# # PayTemplate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**earningsLines** | **float** | The earnings rate lines | [optional] 
**deductionLines** | [**\Consilience\Xero\PayrollAuSdk\Model\DeductionLine[]**](DeductionLine.md) | The deduction type lines | [optional] 
**superLines** | **string** | The superannuation fund lines | [optional] 
**reimbursementLines** | [**\Consilience\Xero\PayrollAuSdk\Model\ReimbursementLine[]**](ReimbursementLine.md) | The reimbursement type lines | [optional] 
**leaveLines** | **string** | The leave type lines | [optional] 
**earningsRateID** | **string** | Xero earnings rate identifier | [optional] 
**calculationType** | **string** | See Leave Type Calculation Types | [optional] 
**numberOfUnitsPerWeek** | **string** | Hours per week for the EarningsLine. Applicable for ANNUALSALARY CalculationType | [optional] 
**annualSalary** | **string** | Annual Salary of employee | [optional] 
**ratePerUnit** | **float** | Rate per unit of the EarningsLine. | [optional] 
**normalNumberOfUnits** | **string** | Normal number of units for EarningsLine.  Applicable when RateType is “MULTIPLE” | [optional] 
**deductionTypeID** | **string** | Xero deduction type identifier | [optional] 
**percentage** | **string** | The percentage of the SuperLine. Applies on Percentage of Earnings CalculationType. | [optional] 
**amount** | **float** | The amount of the reimbursement type | [optional] 
**superMembershipID** | **string** | Xero superannuation fund membership identifier | [optional] 
**contributionType** | **string** | See Superannuation Contribution Type | [optional] 
**expenseAccountCode** | **string** | Account code for the Expense Account. i.e 478 | [optional] 
**liabilityAccountCode** | **string** | Account code for the Liability Account. i.e 826 | [optional] 
**minimumMonthlyEarnings** | **string** | Minimum monthly earnings. Applies for Percentage of Earnings calculation type only | [optional] 
**reimbursementTypeID** | **string** | Xero reimbursement type identifier | [optional] 
**description** | **string** | The description of the reimbursement type | [optional] 
**leaveTypeID** | **string** | Xero leave type identifier. | [optional] 
**annualNumberOfUnits** | **string** | Hours of leave accrued each year | [optional] 
**fullTimeNumberOfUnitsPerPeriod** | **string** | Normal ordinary earnings number of units for leave line. | [optional] 
**numberOfUnits** | **string** | Number of units for leave line. | [optional] 
**entitlementFinalPayPayoutType** | **string** | See Final Pay Payout Types If you do not provide any value then by Default it will be NOTPAIDOUT. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


