<?php

/**
 * LICENSE: [EMAILBIDDING_DESCRIPTION_LICENSE_HERE]
 *
 * @author     Rui Ribeiro <rui.ribeiro@emailbidding.com>
 * @copyright  2012-2013 Emailbidding
 * @license    [EMAILBIDDING_URL_LICENSE_HERE]
 */

namespace EBC\AdvertiserClient\Tests\Campaign;

use EBC\AdvertiserClient\Campaign\SuppressionImports;
use EBC\AdvertiserClient\Tests\TestCase;

/**
 * SuppressionImportsTest
 */
class SuppressionImportsTest extends TestCase
{
    const CLASS_NAME = 'EBC\AdvertiserClient\Campaign\SuppressionImports';

    public function testDeserialize()
    {
        $suppressionImportsArray = array(
            'items' => array(
                array(
                    'import_date'               => '2014-01-09 19:20:30',
                    'name'                      => 'name',
                    'processed_email_addresses' => 10,
                    'total_email_addresses'     => 1,
                    'last_processed_date'       => '2014-01-09 19:20:30'
                ),
                array(
                    'import_date'               => '2014-01-09 19:20:30',
                    'name'                      => 'name',
                    'processed_email_addresses' => 12,
                    'total_email_addresses'     => 1,
                    'last_processed_date'       => '2014-01-09 19:20:30'
                )
            )
        );

        /** @var SuppressionImports $suppressionImports */
        $suppressionImports = $this->deserialize($suppressionImportsArray, self::CLASS_NAME);

        $this->assertInstanceOf(self::CLASS_NAME, $suppressionImports);
        $this->assertCount(2, $suppressionImports);
    }
} 
