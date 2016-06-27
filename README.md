# Adminer

Simple image container with adminer (https://www.adminer.org) used in FluxoTI to access database during development.  
Currently only supports **postgresql**.

## Specifying default credentials

To specify default credentials simple define the environment variables:

- ADMINER_DEFAULT_HOST: connection host
- ADMINER_DEFAULT_USER: username
- ADMINER_DEFAULT_PASS: password
- ADMINER_DEFAULT_DB: database