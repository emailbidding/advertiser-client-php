<?php

/**
 *
 * LICENSE: [EMAILBIDDING_DESCRIPTION_LICENSE_HERE]
 *
 * @author     Rui Ribeiro <rui.ribeiro@emailbidding.com>
 * @copyright  2012-2013 Emailbidding
 * @license    [EMAILBIDDING_URL_LICENSE_HERE]
 */

namespace EBC\AdvertiserClient\Campaign;

/**
 * InvalidImportResponse
 */
class InvalidImportResponse
{
    /**
     * @var integer
     */
    protected $code;

    /**
     * @var string
     */
    protected $message;

    /**
     * @var array
     */
    protected $errors;

    /**
     * @return integer
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @return array
     */
    public function getErrors()
    {
        return $this->errors;
    }
}
