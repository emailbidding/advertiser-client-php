<?php

/*
 * This file is a part of the Publisher client library.
 *
 * (c) 2013 Ebidtech
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace EBC\AdvertiserClient;

use EBT\EBDate\EBDateTime;
use EBT\Fastc\Client as FastcClient;
use EBT\Fastc\Listener\StatusCodeListener;
use EBT\Fastc\Listener\ParseResponseListener;
use Guzzle\Http\Exception\ClientErrorResponseException;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Handler\HandlerRegistry;
use EBT\EBDate\Serializer\EBDateTimeHandler;
use JMS\Serializer\SerializerInterface;

/**
 * AdvertiserClient
 */
class AdvertiserClient extends FastcClient implements AdvertiserClientInterface
{

    /**
     * @var SerializerInterface
     */
    protected $serializer;

    /**
     * @param array $config
     */
    public function __construct(array $config = array())
    {
        parent::__construct(
            $this->getServiceDescription(__DIR__ . '/Resources/config/api_services.yml'),
            array_merge($this->readYaml(__DIR__ . '/Resources/config/client_config.yml'), $config)
        );

        $this->serializer = $this->getSerializer(__DIR__ . '/Resources/config/serializer', 'EBC\AdvertiserClient');

        $this->addSubscriber(new StatusCodeListener());
        $this->addSubscriber(
            new ParseResponseListener(
                $this->serializer
            )
        );
    }

    /**
     * {@inheritdoc}
     */
    protected function getSerializer($dir, $namespacePrefix = '')
    {
        return SerializerBuilder::create()
            ->addMetadataDir($dir, $namespacePrefix)
            ->configureHandlers(
                function (HandlerRegistry $registry) {
                    $registry->registerSubscribingHandler(new EBDateTimeHandler());
                }
            )
            ->build();
    }

    /**
     * {@inheritdoc}
     */
    public function setAdvertiser($advertiserId, $key, $secret)
    {
        $this->client->getConfig()->setPath('advertiserId', $advertiserId)
                                  ->setPath('request.options/query/key', $key)
                                  ->setPath('request.options/query/secret', $secret);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getCampaignSuppressionImports($campaignId)
    {
        return $this->client->getCommand(
            'getCampaignSuppressionImports',
            array('campaignId' => $campaignId)
        )->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function createCampaignSuppressionImport($campaignId, $source, $location, $data)
    {
        try {
            return $this->client->getCommand(
                'createCampaignSuppressionImport',
                array(
                    'campaignId'         => $campaignId,
                    'suppression_import' => array('source' => $source, 'location' => $location, 'data' => $data)
                )
            )->execute();
        } catch (ClientErrorResponseException $e) {

            return $this->serializer->deserialize(
                $e->getResponse()->getBody(),
                'EBC\AdvertiserClient\Campaign\InvalidImportResponse',
                'json'
            );

        }
    }
}
