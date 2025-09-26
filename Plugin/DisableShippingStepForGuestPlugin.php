<?php
declare(strict_types=1);

namespace LokiCheckout\LoginBeforeOtherSteps\Plugin;

use LokiCheckout\Core\Component\Checkout\Step\ShippingStep\ShippingStepViewModel;
use LokiCheckout\LoginBeforeOtherSteps\Util\AllowStep;

class DisableShippingStepForGuestPlugin
{
    public function __construct(
        private readonly AllowStep $allowStep
    ) {
    }

    public function afterIsAccessable(ShippingStepViewModel $viewModel, bool $return): bool
    {
        if (false === $this->allowStep->isStepAllowed()) {
            return false;
        }

        return $return;
    }
}
