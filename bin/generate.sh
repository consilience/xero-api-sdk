#
# Generate the OpenAPI client code, including models.
# Do `composer update` first to pull in the dependency tools.
#
# For now we will generate the four APIs over the top of each other,
# with the assumption that no models will clash. If they do, this can
# be revisited.
#

# Directory for this script

DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" >/dev/null 2>&1 && pwd )"

${DIR}/../vendor/consilience/openapi-generator-psr18/bin/generate.sh \
    --spec=${DIR}/../vendor/xeroapi/xero-openapi/accounting-json/Xero_accounting_2.0.0_swagger.json \
    --namespace=Consilience\\Xero\\AccountingSdk \
    --generated=${DIR}/../apis/accounting/

${DIR}/../vendor/consilience/openapi-generator-psr18/bin/generate.sh \
    --spec=${DIR}/../vendor/xeroapi/xero-openapi/bankfeeds-json/Xero_bankfeeds_1.0.0_swagger.json \
    --namespace=Consilience\\Xero\\BankfeedsSdk \
    --generated=${DIR}/../apis/bankfeeds/

${DIR}/../vendor/consilience/openapi-generator-psr18/bin/generate.sh \
    --spec=${DIR}/../vendor/xeroapi/xero-openapi/assets-json/Xero_assets_1.0.0_swagger.json \
    --namespace=Consilience\\Xero\\AssetsSdk \
    --generated=${DIR}/../apis/assets/

${DIR}/../vendor/consilience/openapi-generator-psr18/bin/generate.sh \
    --spec=${DIR}/../vendor/xeroapi/xero-openapi/files-yaml/Xero_files_1.0.0_swagger.yaml \
    --namespace=Consilience\\Xero\\FilesSdk \
    --generated=${DIR}/../apis/files/

${DIR}/../vendor/consilience/openapi-generator-psr18/bin/generate.sh \
    --spec=${DIR}/../openapi/payroll-au-openapi3.json \
    --namespace=Consilience\\Xero\\PayrollAuSdk \
    --generated=${DIR}/../apis/payroll-au/
