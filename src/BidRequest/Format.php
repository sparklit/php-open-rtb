<?php
/**
 * Format.php
 * 
 * @copyright SparkLIT Networks Inc.
 * @author Wasif Hasan Baig <baig@sparklit.com>
 * Date: 13/12/17 - 13:30
 */

namespace PowerLinks\OpenRtb\BidRequest;

use PowerLinks\OpenRtb\Tools\Interfaces\Arrayable;
use PowerLinks\OpenRtb\Tools\Traits\SetterValidation;
use PowerLinks\OpenRtb\Tools\Traits\ToArray;

/**
 * Class Format
 *
 * This object represents an allowed size (i.e., height and width combination)
 * or Flex Ad parameters for a banner impression. These are typically used in an
 * array where multiple sizes are permitted. It is recommended that either the
 * w/h pair or the wratio/hratio/wmin set (i.e., for Flex Ads) be specified.
 *
 * @package PowerLinks\OpenRtb\BidRequest
 */
class Format implements Arrayable
{
    use SetterValidation;
    use ToArray;

    /**
     * Width in device independent pixels (DIPS).
     * @var int
     */
    protected $w;

    /**
     * Height in device independent pixels (DIPS).
     * @var int
     */
    protected $h;

    /**
     * Relative width when expressing size as a ratio.
     * @var int
     */
    protected $wratio;

    /**
     * Relative height when expressing size as a ratio.
     * @var int
     */
    protected $hratio;

    /**
     * The minimum width in device independent pixels (DIPS) at which the ad
     * will be displayed the size is expressed as a ratio.
     * @var int
     */
    protected $wmin;

    /**
     * Placeholder for exchange-specific extensions to OpenRTB.
     * @var Ext
     */
    protected $ext;

    /**
     * @return int
     */
    public function getW()
    {
        return $this->w;
    }

    /**
     * @param int $w
     * @return $this
     * @throws \PowerLinks\OpenRtb\Tools\Exceptions\ExceptionInvalidValue
     */
    public function setW($w)
    {
        $this->validateInt($w);
        $this->w = $w;
        return $this;
    }

    /**
     * @return int
     */
    public function getH()
    {
        return $this->h;
    }

    /**
     * @param int $h
     * @return $this
     * @throws \PowerLinks\OpenRtb\Tools\Exceptions\ExceptionInvalidValue
     */
    public function setH($h)
    {
        $this->validateInt($h);
        $this->h = $h;
        return $this;
    }

    /**
     * @return int
     */
    public function getWratio()
    {
        return $this->wratio;
    }

    /**
     * @param int $wratio
     * @return $this
     * @throws \PowerLinks\OpenRtb\Tools\Exceptions\ExceptionInvalidValue
     */
    public function setWratio($wratio)
    {
        $this->validateInt($wratio);
        $this->wratio = $wratio;
        return $this;
    }

    /**
     * @return int
     */
    public function getHratio()
    {
        return $this->hratio;
    }

    /**
     * @param int $hratio
     * @return $this
     * @throws \PowerLinks\OpenRtb\Tools\Exceptions\ExceptionInvalidValue
     */
    public function setHratio($hratio)
    {
        $this->validateInt($hratio);
        $this->hratio = $hratio;
        return $this;
    }

    /**
     * @return int
     */
    public function getWmin()
    {
        return $this->wmin;
    }

    /**
     * @param int $wmin
     * @return $this
     * @throws \PowerLinks\OpenRtb\Tools\Exceptions\ExceptionInvalidValue
     */
    public function setWmin($wmin)
    {
        $this->validateInt($wmin);
        $this->wmin = $wmin;
        return $this;
    }

    /**
     * @return Ext
     */
    public function getExt()
    {
        return $this->ext;
    }

    /**
     * @param Ext $ext
     */
    public function setExt(Ext $ext)
    {
        $this->ext = $ext;
    }
}
