<?php

/**
 * LICENSE: [EMAILBIDDING_DESCRIPTION_LICENSE_HERE]
 *
 * @author     Rui Ribeiro <rui.ribeiro@emailbidding.com>
 * @copyright  2012-2013 Emailbidding
 * @license    [EMAILBIDDING_URL_LICENSE_HERE]
 */

namespace EBC\AdvertiserClient\Campaign;

/**
 * SuppressionImportResponse
 */
class SuppressionImportResponse
{
    /**
     * @var integer
     */
    protected $totalEmails;

    /**
     * @var string
     */
    protected $originalFilename;

    /**
     * @return integer
     */
    public function getTotalEmails()
    {
        return $this->totalEmails;
    }

    /**
     * @return string
     */
    public function getOriginalFilename()
    {
        return $this->originalFilename;
    }
}
