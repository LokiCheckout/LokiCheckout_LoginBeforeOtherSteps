# LokiCheckout_LoginBeforeOtherSteps

<!-- badges.specs.start -->
![Magento version](https://img.shields.io/badge/Magento-2.4.6%20%7C%202.4.9-orange)
![PHP version](https://img.shields.io/badge/PHP-8.2%E2%80%938.5-777BB4)
![License](https://img.shields.io/badge/License-OSL--3.0-blue)
![Latest Version](https://img.shields.io/packagist/v/loki-checkout/magento2-skin-login-before-other-steps)
<!-- badges.specs.end -->


**This is an addon Magento 2 module for the LokiCheckout. It adds a new skin *Login Before Other Steps* (`login-first`) to the LokiCheckout, requiring visitors to login in a first step before accessing other steps like the shipping and the billing step.**

## Installation
Install this package via composer:
```bash
composer require loki-checkout/magento2-skin-login-before-other-steps
```

Next, enable this module:
```bash
bin/magento module:enable LokiCheckout_LoginBeforeOtherSteps
```

**WARNING**: Please note that the Magento core option **Allow Guest Checkout** (path `checkout/options/guest_checkout`) should be set to **Yes** to allow for this module to do its work. With guest checkout disabled in the Magento core, a visitor will never be able to access the checkout, because Magento will redirect the request directly back to the cart. 

## Current status

<!-- badges.test.start -->
![Static Tests](https://img.shields.io/github/actions/workflow/status/LokiCheckout/LokiCheckout_LoginBeforeOtherSteps/static-tests.yml?label=static-tests)
![Unit Tests](https://img.shields.io/github/actions/workflow/status/LokiCheckout/LokiCheckout_LoginBeforeOtherSteps/unit-tests.yml?label=unit-tests)
![Integration Tests](https://img.shields.io/github/actions/workflow/status/LokiCheckout/LokiCheckout_LoginBeforeOtherSteps/integration-tests.yml?label=integration-tests)
![Playwright](https://img.shields.io/github/actions/workflow/status/LokiCheckout/LokiCheckout_LoginBeforeOtherSteps/playwright.yml?label=playwright)
![DI Compilation](https://img.shields.io/github/actions/workflow/status/LokiCheckout/LokiCheckout_LoginBeforeOtherSteps/compile.yml?label=compile)
<!-- badges.test.end -->
