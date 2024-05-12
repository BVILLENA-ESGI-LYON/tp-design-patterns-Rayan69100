<?php

namespace EsgiIw\TpDesignPattern\Template;

class SportEventRegistrationValidator extends EventRegistrationValidator
{
    protected function checkEventSpecificRequirements($applicant)
    {
        // Check if medical certificate is provided
        return isset($applicant['medicalCertificate']) && $applicant['medicalCertificate'] == true;
    }
}
