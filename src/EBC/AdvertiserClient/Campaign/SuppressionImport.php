<?php

/**
 * LICENSE: [EMAILBIDDING_DESCRIPTION_LICENSE_HERE]
 *
 * @author     Rui Ribeiro <rui.ribeiro@emailbidding.com>
 * @copyright  2012-2013 Emailbidding
 * @license    [EMAILBIDDING_URL_LICENSE_HERE]
 */

namespace EBC\AdvertiserClient\Campaign;

use EBT\EBDate\EBDateTime;

/**
 * SuppressionImport
 */
class SuppressionImport
{
    /**
     * @var EBDateTime
     */
    protected $importDate;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var int
     */
    protected $processedEmailAddresses;

    /**
     * @var int
     */
    protected $totalEmailAddresses;

    /**
     * @var EBDateTime
     */
    protected $lastProcessedDate;


    /**
     * @return EBDateTime
     */
    public function getImportDate()
    {
        return $this->importDate;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return integer
     */
    public function getProcessedEmailAddresses()
    {
        return $this->processedEmailAddresses;
    }

    /**
     * @return integer
     */
    public function getTotalEmailAddresses()
    {
        return $this->totalEmailAddresses;
    }

    /**
     * @return EBDateTime
     */
    public function getLastProcessedDate()
    {
        return $this->lastProcessedDate;
    }
} 
