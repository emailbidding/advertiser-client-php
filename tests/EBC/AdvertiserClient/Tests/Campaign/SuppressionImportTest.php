<?php

/**
 * LICENSE: [EMAILBIDDING_DESCRIPTION_LICENSE_HERE]
 *
 * @author     Rui Ribeiro <rui.ribeiro@emailbidding.com>
 * @copyright  2012-2013 Emailbidding
 * @license    [EMAILBIDDING_URL_LICENSE_HERE]
 */

namespace EBC\AdvertiserClient\Tests\Campaign;

use EBC\AdvertiserClient\Tests\TestCase;
use EBC\AdvertiserClient\Campaign\SuppressionImport;

/**
 * SuppressionImportTest
 */
class SuppressionImportTest extends TestCase
{
    const CLASS_NAME = 'EBC\AdvertiserClient\Campaign\SuppressionImport';

    public function testDeserialize()
    {

        $suppressionImportArray = array(
            'import_date'               => '2014-01-09 19:20:30',
            'name'                      => 'name',
            'processed_email_addresses' => 1,
            'total_email_addresses'     => 1,
            'last_processed_date'       => '2014-01-09 19:20:30'
        );

        /** @var SuppressionImport $suppressionImport */
        $suppressionImport = $this->deserialize($suppressionImportArray, self::CLASS_NAME);

        $this->assertInstanceOf(self::CLASS_NAME, $suppressionImport);
        $this->assertEquals('name', $suppressionImport->getName());
    }
} 
