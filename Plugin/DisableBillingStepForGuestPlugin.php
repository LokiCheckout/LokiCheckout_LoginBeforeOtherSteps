<?php
declare(strict_types=1);

namespace LokiCheckout\LoginBeforeOtherSteps\Plugin;

use LokiCheckout\Core\Component\Checkout\Step\BillingStep\BillingStepViewModel;
use LokiCheckout\LoginBeforeOtherSteps\Util\AllowStep;
use Magento\Customer\Model\Session as CustomerSession;

class DisableBillingStepForGuestPlugin
{
    public function __construct(
        private readonly AllowStep $allowStep
    ) {
    }

    public function afterIsAccessable(BillingStepViewModel $viewModel, bool $return): bool
    {
        if (false === $this->allowStep->isStepAllowed()) {
            return false;
        }

        return $return;
    }
}
