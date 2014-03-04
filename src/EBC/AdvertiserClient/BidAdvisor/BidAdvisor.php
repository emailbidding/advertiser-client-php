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
     * @var int $currentReach
     */
    protected $currentReach;

    /**
     * @var int $maximumReach
     */
    protected $maximumReach;

    /**
     * @var array $pricePoints
     */
    protected $pricePoints;

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
     * @return array
     */
    public function getPricePoints()
    {
        return $this->pricePoints;
    }
}
