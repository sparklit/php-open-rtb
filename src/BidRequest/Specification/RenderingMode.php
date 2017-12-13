<?php
/**
 * RenderingMode.php
 *
 * @copyright SparkLIT Networks Inc.
 * @author Wasif Hasan Baig <baig@sparklit.com>
 * Date: 13/12/17 - 14:00
 */

namespace PowerLinks\OpenRtb\BidRequest\Specification;

use PowerLinks\OpenRtb\Tools\Traits\GetConstants;

class RenderingMode
{
    use GetConstants;

    const CONCURRENT = 0;
    const END_CARD = 1;
}
