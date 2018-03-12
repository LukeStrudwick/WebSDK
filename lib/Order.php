<?php
/**
 *                       ######
 *                       ######
 * ############    ####( ######  #####. ######  ############   ############
 * #############  #####( ######  #####. ######  #############  #############
 *        ######  #####( ######  #####. ######  #####  ######  #####  ######
 * ###### ######  #####( ######  #####. ######  #####  #####   #####  ######
 * ###### ######  #####( ######  #####. ######  #####          #####  ######
 * #############  #############  #############  #############  #####  ######
 *  ############   ############  #############   ############  #####  ######
 *                                      ######
 *                               #############
 *                               ############
 *
 * Adyen Checkout Example (https://www.adyen.com/)
 *
 * Copyright (c) 2017 Adyen BV (https://www.adyen.com/)
 *
 */

/**
 * Set up / edit your order on this page
 * For more information, refer to the checkout API documentation: https://docs.adyen.com/developers/checkout/api-reference-checkout */
class Order
{
    /** @int value - Put the value into minor units 120 = 1.20 (for USD), for decimal information per currency see: https://docs.adyen.com/developers/currency-codes */
    public $value = 1000;

    /** @var  $currencyCode - Change this to any currency you support: https://docs.adyen.com/developers/currency-codes */
    public $currencyCode = 'EUR';

    /** @array $amount - Amount is a combination of value and currency */
    public $amount = ['value' => 1000, 'currency' => "EUR"];

    public function getAmount()
    {
        return $this->amount;
    }

    /** @var $reference - order number */
    public $reference = 'order_id';

    public function getReference()
    {
        return $this->reference;
    }

    /** @var $shopperReference - Your shopper reference (id or e-mail are commonly used) */
    public $shopperReference = 'example_shopper';

    public function getShopperReference()
    {
        return $this->shopperReference;
    }
	
	    	public $shopperEmail = 'luke.strudwick@adyen.com';

    public function getShopperEmail()
    {
        return $this->shopperEmail;
    }
	
		public $telephoneNumber= '01234567891';

    public function getTelephoneNumber()
    {
        return $this->telephoneNumber;
    }
	
		public $dateOfBirth= '1987-02-25';

    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }
	

    /** @var $shopperLocale - The shopper locale : https://docs.adyen.com/developers/in-app-integration/checkout-api-reference/setup */
    public $shopperLocale = 'en_GB';

    public function getShopperLocale()
    {
        return $this->shopperLocale;
    }

    /** @var $countryCode - The countryCode influences the returned payment methods */
    public $countryCode = 'NL';

    public function getCountryCode()
    {
        return $this->countryCode;
    }

    public $billingAddress = 
        [
        'street' => "Simon Carmiggeltstraat", 
        'postalCode' => "1011DJ",   
        'city' => "Amsterdam",
		'houseNumberOrName' => "6-60",
		'stateOrProvince' => "NH",
		'country' => "NL"
        ];
	
	    public function getBillingAddress()
    {
        return $this->billingAddress;
    }
    
        public $deliveryAddress = 
        [
        'street' => "Simon Carmiggeltstraat", 
        'postalCode' => "1011DJ",   
        'city' => "Amsterdam",
		'houseNumberOrName' => "6-60",
		'stateOrProvince' => "NH",
		'country' => "NL"
        ];
		
	    public function getDeliveryAddress()
    {
        return $this->deliveryAddress;
    }
    
        public $shopperName = 

        [
        'gender' => "MALE", 
        'firstName' => "Luke",   
        'lastName' => "Strudwick"
        ];
		
	    public function getShopperName()
    {
        return $this->shopperName;
    }
    
    /** @var $channel - the channel influences the returned payment methods (the same server can be used for iOS, Android and Point of sale */
    public $channel = 'Web';

    public function getChannel()
    {
        return $this->channel;
    }

    public $html = true;

    public function getHtml()
    {
        return $this->html;
    }

}
