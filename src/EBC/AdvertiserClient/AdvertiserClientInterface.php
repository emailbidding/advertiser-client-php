<?php
/**
 * Created by PhpStorm.
 * User: ribeiro
 * Date: 2/21/14
 * Time: 12:39 PM
 */

namespace EBC\AdvertiserClient;

use EBC\AdvertiserClient\BidAdvisor\BidAdvisor;
use EBC\AdvertiserClient\Campaign\SuppressionImports;
use EBC\AdvertiserClient\Campaign\SuppressionImportResponse;

interface AdvertiserClientInterface
{
    /**
     * @param integer $advertiserId
     * @param string $key
     * @param string $secret
     *
     * @return AdvertiserClient
     */
    public function setAdvertiser($advertiserId, $key, $secret);

    /**
     * @param string    $country
     * @param string    $publishers
     * @param string    $lists
     * @param string    $genders
     * @param string    $ages
     * @param string    $regions
     * @param string    $zones
     * @param string    $groups
     * @param int       $category
     * @param float     $minBid
     * @param int       $campaign
     *
     * @return BidAdvisor
     */
    public function getBidAdvisor(
        $country,
        $publishers,
        $lists,
        $genders,
        $ages,
        $regions,
        $zones,
        $groups,
        $category,
        $minBid,
        $campaign
    );

    /**
     * @param integer $campaignId
     *
     * @return SuppressionImports
     */
    public function getCampaignSuppressionImports($campaignId);

    /**
     * @param integer $campaignId
     * @param string  $source
     * @param string  $location
     * @param string  $data
     *
     * @return SuppressionImportResponse
     */
    public function createCampaignSuppressionImport($campaignId, $source, $location, $data);
} 
