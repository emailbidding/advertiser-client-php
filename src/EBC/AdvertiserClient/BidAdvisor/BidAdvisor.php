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
    protected $country;

    protected $publisher;

    protected $lists;

    protected $genders;

    protected $ages;

    protected $regions;

    protected $zones;

    protected $groups;

    protected $category;

    protected $minBid;

    protected $campaign;

    public function getCountry()
    {
        return $this->country;
    }
    public function getPublishers()
    {
        return $this->publisher;
    }
    public function getLists()
    {
        return $this->lists;
    }
    public function getGenders()
    {
        return $this->genders;
    }
    public function getAges()
    {
        return $this->ages;
    }
    public function getRegions()
    {
        return $this->regions;
    }
    public function getZones()
    {
        return $this->zones;
    }
    public function getGroups()
    {
        return $this->groups;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function getMinBid()
    {
        return $this->minBid;
    }
    public function getCampaign()
    {
        return $this->campaign;
    }
}
