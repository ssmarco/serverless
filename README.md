## Silverstripe Serverless Recipe

This includes the core modules:

 * [framework](http://github.com/silverstripe/silverstripe-framework): Module including the base framework
 * [config](https://github.com/silverstripe/silverstripe-config): Core config library
 * [assets](http://github.com/silverstripe/silverstripe-assets): Filesystem module
 * [sqlite3](https://github.com/silverstripe/silverstripe-sqlite3): SQLite3 Module

This is used as a project base for creating a basic framework-only install.

See the [recipe plugin](https://github.com/silverstripe/recipe-plugin) page for instructions on how
Silverstripe recipes work.

## SQLite 3 Database

This recipe is configured with SQLite 3 as its in-memory database.

To bypass creating tables and populating them during `dev/build`,
set the environment variable with `SS_BYPASS_BUILD_DATABASE="1"`

## No Database needed?

Update your environment file `.env` with `SS_DATABASE_CLASS="ZeroDatabase"`

Or `serverless.yml`: with `SS_DATABASE_CLASS: 'ZeroDatabase'`

## Local Development
For testing the basic installation with composer create-project

- Create a file, packages.json (notice the plural form, it is intentional)
- Write the following json string
```json
{
  "package": {
    "name": "silverstripe/recipe-serverless",
    "version": "dev-main",
    "source": {
      "url": "/var/www/serverless/.git",
      "type": "git",
      "reference": "main"
    }
  }
}
```
- Now create a new project in an empty directory
- `composer create-project --repository-url=/var/www/serverless/packages.json silverstripe/recipe-serverless . dev-main`

## AWS Lambda deployment
- Install CLI command
- `npm install -g serverless`
- Add plugin to serverless
- `serverless plugin install -n serverless-lift`
- Update `serverless.yml` to rename the name of your service
- - `service: ss-app` is the default value
- Follow instructions for configuring AWS Lambda https://bref.sh/docs/installation/aws-keys.html
- Deploy to AWS Lambda
- Run `serverless deploy` default staging is `dev` environment
- Or `serverless deploy --stage=dev`
- Production `serverless deploy --stage=prod` environment
