 # Vue Form Builder Demo
A simple demo project for building dynamic forms using schema objects for [FormKit](https://formkit.com/) and the other for [VueForm](https://vueform.com/).

## Requirements
The following tools are required in order to start the installation.

- PHP >= 8.2
- [Composer](https://getcomposer.org/download/)
- [NPM](https://docs.npmjs.com/downloading-and-installing-node-js-and-npm)

## Installation
```bash
# Clone the repository
git clone https://github.com/zpwparsons/forms.git

# Change into the project directory
cd forms

# Install PHP dependencies
composer install

# Install JS dependencies
npm install

# Clone .env file
cp .env.example .env

# Create App Encryption Key
php artisan key:generate

# Start the development server
npm run dev
```

## Forms and schema
### FormKit
Navigate to `forms.test/form-kit` to view the built form and the `FormKitController` to view the schema

### ViewForm
Navigate to `forms.test/vue-form` to view the built form and the `ViewFormController` to view the schema
