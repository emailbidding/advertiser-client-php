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
use EBC\AdvertiserClient\Campaign\SuppressionImportResponse;

/**
 * SuppressionImportResponseTest
 */
class SuppressionImportResponseTest extends TestCase
{
    const CLASS_NAME = 'EBC\AdvertiserClient\Campaign\SuppressionImportResponse';

    public function testDeserialize()
    {
        $suppressionImportResponseArray = array(
            'total_emails'      => 12,
            'original_filename' => 'name'
        );

        /** @var SuppressionImportResponse $suppressionImportResponse */
        $suppressionImportResponse = $this->deserialize($suppressionImportResponseArray, self::CLASS_NAME);

        $this->assertInstanceOf(self::CLASS_NAME, $suppressionImportResponse);
    }
} 
