<?php
/**
 * ExpandableDirection.php
 *
 * @copyright SparkLIT Networks Inc.
 * @author Wasif Hasan Baig <baig@sparklit.com>
 * Date: 28/12/17 - 14:10
 */

namespace PowerLinks\OpenRtb\BidRequest\Specification;

use PowerLinks\OpenRtb\Tools\Traits\GetConstants;

/**
 * https://www.iab.com/wp-content/uploads/2016/03/OpenRTB-API-Specification-Version-2-5-FINAL.pdf - 5.5
 * Class ExpandableDirection
 * @package PowerLinks\OpenRtb\BidRequest\Specification
 */
class ExpandableDirection
{
    use GetConstants;

    const LEFT = 1;
    const RIGHT = 2;
    const UP = 3;
    const DOWN = 4;
    const FULL_SCREEN = 5;
}
