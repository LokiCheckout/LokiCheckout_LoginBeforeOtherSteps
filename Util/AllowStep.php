<?php declare(strict_types=1);

namespace LokiCheckout\LoginBeforeOtherSteps\Util;

use LokiCheckout\Core\Config\Config;
use Magento\Customer\Model\Session as CustomerSession;

class AllowStep
{
    public function __construct(
        private readonly Config $config,
        private readonly CustomerSession $customerSession
    ) {
    }

    public function isStepAllowed(): bool
    {
        $currentTheme = $this->config->getTheme();
        if ($currentTheme !== 'login-first') {
            return true;
        }

        if ($this->customerSession->isLoggedIn()) {
            return true;
        }

        return false;
    }
}
