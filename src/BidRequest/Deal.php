<?php
/**
 * Deal.php
 * 
 * @copyright PowerLinks
 * @author Manuel Kanah <manuel@powerlinks.com>
 * Date: 01/09/15 - 09:31
 */

namespace PowerLinks\OpenRtb\BidRequest;

use PowerLinks\OpenRtb\Tools\Interfaces\Arrayable;
use PowerLinks\OpenRtb\Tools\Traits\SetterValidation;
use PowerLinks\OpenRtb\Tools\Traits\ToArray;

class Deal implements Arrayable
{
    use SetterValidation;
    use ToArray;

    /**
     * @required
     * @var string
     */
    protected $id;

    /**
     * Minimum bid for this impression expressed in CPM
     * @default 0
     * @var float
     */
    protected $bidfloor;

    /**
     * Currency specified using ISO-4217 alpha codes
     * @default USD
     * @var string
     */
    protected $bidfloorcur;

    /**
     * where 1 = First Price, 2 = Second Price Plus, 3 = the value passed in bidfloor is the agreed upon deal price
     * @var int
     */
    protected $at;

    /**
     * Array of strings
     * @var array
     */
    protected $wseat;

    /**
     * array of advertiser domains (e.g., advertiser.com)
     * @var array
     */
    protected $wadomain;

    /**
     * @var Ext
     */
    protected $ext;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return $this
     * @throws \PowerLinks\OpenRtb\Tools\Exceptions\ExceptionInvalidValue
     */
    public function setId($id)
    {
        $this->validateString($id);
        $this->id = $id;
        return $this;
    }

    /**
     * @return float
     */
    public function getBidfloor()
    {
        return $this->bidfloor;
    }

    /**
     * @param float $bidfloor
     * @return $this
     * @throws \PowerLinks\OpenRtb\Tools\Exceptions\ExceptionInvalidValue
     */
    public function setBidfloor($bidfloor)
    {
        $this->bidfloor = $this->validatePositiveFloat($bidfloor);
        return $this;
    }

    /**
     * @return string
     */
    public function getBidfloorcur()
    {
        return $this->bidfloorcur;
    }

    /**
     * @param string $bidfloorcur
     * @return $this
     * @throws \PowerLinks\OpenRtb\Tools\Exceptions\ExceptionInvalidValue
     */
    public function setBidfloorcur($bidfloorcur)
    {
        $this->validateString($bidfloorcur);
        $this->bidfloorcur = $bidfloorcur;
        return $this;
    }

    /**
     * @return int
     */
    public function getAt()
    {
        return $this->at;
    }

    /**
     * @param int $at
     * @return $this
     * @throws \PowerLinks\OpenRtb\Tools\Exceptions\ExceptionInvalidValue
     */
    public function setAt($at)
    {
        $this->at = $this->validateInt($at);
        return $this;
    }

    /**
     * @return array
     */
    public function getWseat()
    {
        return $this->wseat;
    }

    /**
     * @param string $wseat
     * @return $this
     * @throws \PowerLinks\OpenRtb\Tools\Exceptions\ExceptionInvalidValue
     */
    public function addWseat($wseat)
    {
        $this->validateString($wseat);
        $this->wseat[] = $wseat;
        return $this;
    }

    /**
     * @param array $wseat
     * @return $this
     */
    public function setWseat(array $wseat)
    {
        $this->wseat = $wseat;
        return $this;
    }

    /**
     * @return array
     */
    public function getWadomain()
    {
        return $this->wadomain;
    }

    /**
     * @param string $wadomain
     * @return $this
     * @throws \PowerLinks\OpenRtb\Tools\Exceptions\ExceptionInvalidValue
     */
    public function addWadomain($wadomain)
    {
        $this->validateString($wadomain);
        $this->wadomain[] = $wadomain;
        return $this;
    }

    /**
     * @param array $wadomain
     * @return $this
     */
    public function setWadomain(array $wadomain)
    {
        $this->wadomain = $wadomain;
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
     * @return $this
     */
    public function setExt(Ext $ext)
    {
        $this->ext = $ext;
        return $this;
    }
}