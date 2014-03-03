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
    protected $totalEmails;

    /**
     * @var integer
     */
    protected $totalInvalidEmails;

    /**
     * @var array
     */
    protected $invalidEmailsSample;

    /**
     * @return integer
     */
    public function getTotalEmails()
    {
        return $this->totalEmails;
    }

    /**
     * @return integer
     */
    public function getTotalInvalidEmails()
    {
        return $this->totalInvalidEmails;
    }

    /**
     * @return array
     */
    public function getInvalidEmailsSample()
    {
        return $this->invalidEmailsSample;
    }
}
