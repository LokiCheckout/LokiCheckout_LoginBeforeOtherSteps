# LokiCheckout_LoginBeforeOtherSteps

**This is an addon Magento 2 module for the LokiCheckout. It adds a new theme *Login Before Other Steps* (`login-first`) to the LokiCheckout, requiring visitors to login in a first step before accessing other steps like the shipping and the billing step.**

## Installation
Install this package via composer:
```bash
composer require loki-checkout/magento2-login-before-other-steps
```

Next, enable this module:
```bash
bin/magento module:enable LokiCheckout_LoginBeforeOtherSteps
```

**WARNING**: Please note that the Magento core option **Allow Guest Checkout** (path `checkout/options/guest_checkout`) should be set to **Yes** to allow for this module to do its work. With guest checkout disabled in the Magento core, a visitor will never be able to access the checkout, because Magento will redirect the request directly back to the cart. 
