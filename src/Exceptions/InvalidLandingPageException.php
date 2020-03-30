<?php

namespace PayPal\Checkout\Exceptions;

use RuntimeException;

class InvalidLandingPageException extends RuntimeException
{
    protected $message = 'Landing page provided is not supported. Please refer to https://developer.paypal.com/docs/api/orders/v2/#definition-order_application_context.';   // exception message
}
