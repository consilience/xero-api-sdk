The source Payroll AU OpenAPI description comes from:

https://raw.githubusercontent.com/calcinai/xero-schemas/master/schemas/payroll_au.json

The source is Swagger 2.0, and it is converted to OpenAPI 3.0 for working on.

Now, the description names the operations according to the HTTP message methods
that are used.
That is the first thing I woul dlike to change - the application just wants to
do and get *stuff*, it does not care (really should not care) about how the
HTTP messages work.
I'm going to push Xero to release an OpenAPI description for this.
We personally need the Payroll GB API description, and don't want to be
duplicating work.

