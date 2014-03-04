<?php

/**
 * LICENSE: [EMAILBIDDING_DESCRIPTION_LICENSE_HERE]
 *
 * @author     Rui Ribeiro <rui.ribeiro@emailbidding.com>
 * @copyright  2012-2013 Emailbidding
 * @license    [EMAILBIDDING_URL_LICENSE_HERE]
 */

namespace EBC\AdvertiserClient\Campaign;

use EBT\Collection\CollectionInterface;
use EBT\Collection\EmptyTrait;
use EBT\Collection\IterableTrait;
use EBT\Collection\CountableTrait;
use EBT\Collection\GetItemsTrait;

/**
 * SuppressionImports
 */
class SuppressionImports implements CollectionInterface
{
    use EmptyTrait;
    use IterableTrait;
    use CountableTrait;
    use GetItemsTrait;

    /**
     * @var SuppressionImport[]
     */
    protected $items;

    /**
     * @param SuppressionImport[] $items
     */
    public function __construct(array $items)
    {
        $this->items = $items;
    }
}
