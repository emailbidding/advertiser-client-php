<?php

/**
 *
 * LICENSE: [EMAILBIDDING_DESCRIPTION_LICENSE_HERE]
 *
 * @author     Pedro Baptista <pedro.baptista@emailbidding.com>
 * @copyright  2013-2014 Emailbidding
 * @license    [EMAILBIDDING_URL_LICENSE_HERE]
 */

namespace EBC\AdvertiserClient\BidAdvisor;

/**
 * BidAdvisor
 */
class BidAdvisor
{
    /**
     * @var int
     */
    protected $currentReach;

    /**
     * @var int
     */
    protected $maximumReach;

    /**
     * @var float
     */
    protected $suggestedBid;

    /**
     * @var float
     */
    protected $minBid;

    /**
     * @return int
     */
    public function getCurrentReach()
    {
        return $this->currentReach;
    }

    /**
     * @return int
     */
    public function getMaximumReach()
    {
        return $this->maximumReach;
    }

    /**
     * @return float
     */
    public function getSuggestedBid()
    {
        return $this->suggestedBid;
    }

    /**
     * @return float
     */
    public function getMinBid()
    {
        return $this->minBid;
    }
}
