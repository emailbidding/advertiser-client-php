<?php

/**
 * LICENSE: [EMAILBIDDING_DESCRIPTION_LICENSE_HERE]
 *
 * @author     Rui Ribeiro <rui.ribeiro@emailbidding.com>
 * @copyright  2012-2013 Emailbidding
 * @license    [EMAILBIDDING_URL_LICENSE_HERE]
 */

namespace EBC\AdvertiserClient\Tests;

use EBC\AdvertiserClient\AdvertiserClient;

/**
 * AdvertiserClientTest
 */
class AdvertiserClientTest extends TestCase
{
    public function testTemp()
    {
        $client = new AdvertiserClient();
        $client->setAdvertiser(2, 'thekey', 'thesecret');

//        var_dump($client->getCampaignSuppressionImports(2));
    }
} 
