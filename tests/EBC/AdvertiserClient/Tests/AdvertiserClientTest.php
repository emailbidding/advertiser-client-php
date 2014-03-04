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
use Guzzle\Http\Message\Response;
use Guzzle\Plugin\Mock\MockPlugin;
use Symfony\Component\Config\Definition\Exception\Exception;

/**
 * AdvertiserClientTest
 */
class AdvertiserClientTest extends TestCase
{
    public function testCreateCampaignSuppressionImport()
    {
        $client = new AdvertiserClient();

        $plugin = new MockPlugin();
        $plugin->addResponse(new Response(200));
        $client->addSubscriber($plugin);

        $client->setAdvertiser(2, 'thekey', 'thesecret');
        $client->createCampaignSuppressionImport(1, 'source', 'location', 'data');
    }

    public function testGetBidAdvisor()
    {
        $client = new AdvertiserClient();

        $plugin = new MockPlugin();
        $plugin->addResponse(new Response(200));
        $client->addSubscriber($plugin);

        $client->setAdvertiser(2, 'thekey', 'thesecret');
        $client->getBidAdvisor(1, 1, null, null, 1, null, null, null, 1, null, 1);
    }

    public function testGetCampaignSuppressionImports()
    {
        $client = new AdvertiserClient();

        $plugin = new MockPlugin();
        $plugin->addResponse(new Response(200));
        $client->addSubscriber($plugin);

        $client->setAdvertiser(2, 'thekey', 'thesecret');
        $client->getCampaignSuppressionImports(1);
    }
} 
