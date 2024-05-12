<?php

namespace EsgiIw\TpDesignPattern\Template;

abstract class EventRegistrationValidator
{
    final public function validateRegistration($applicant)
    {
        if (!$this->checkEventSpecificRequirements($applicant)) {
            return false;
        }

        // General checks (e.g., registration closed, event full)
        // Assume some general validations here

        return true;
    }

    abstract protected function checkEventSpecificRequirements($applicant);
}
