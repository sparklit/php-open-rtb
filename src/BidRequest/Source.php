<?php
/**
 * Source.php
 * 
 * @copyright SparkLIT Networks Inc.
 * @author Wasif Hasan Baig <baig@sparklit.com>
 * Date: 12/12/17 - 15:00
 */

namespace PowerLinks\OpenRtb\BidRequest;

use PowerLinks\OpenRtb\Tools\Interfaces\Arrayable;
use PowerLinks\OpenRtb\Tools\Traits\SetterValidation;
use PowerLinks\OpenRtb\Tools\Traits\ToArray;

class Source implements Arrayable
{
    use SetterValidation;
    use ToArray;

    /**
     * Entity responsible for the final impression sale decision, where
     * 0 = exchange, 1 = upstream source.
     * @recommended
     * @var int
     */
    protected $fd;

    /**
     * Transaction ID that must be common across all participants in this bid
     * request (e.g., potentially multiple exchanges).
     * @recommended
     * @var string
     */
    protected $tid;

    /**
     * Payment ID chain string containing embedded syntax described in the TAG
     * Payment ID Protocol v1.0.
     * @recommended
     * @var string
     */
    protected $pchain;

    /**
     * Placeholder for exchange-specific extensions to OpenRTB.
     * @var Ext
     */
    protected $ext;

    /**
     * @return string
     */
    public function getFd()
    {
        return $this->fd;
    }

    /**
     * @param string $fd
     * @return $this
     * @throws \PowerLinks\OpenRtb\Tools\Exceptions\ExceptionInvalidValue
     */
    public function setFd($fd)
    {
        $this->validateInt($fd);
        $this->fd = $fd;
        return $this;
    }

    /**
     * @return string
     */
    public function getTid()
    {
        return $this->tid;
    }

    /**
     * @param string $tid
     * @return $this
     * @throws \PowerLinks\OpenRtb\Tools\Exceptions\ExceptionInvalidValue
     */
    public function setTid($tid)
    {
        $this->validateString($tid);
        $this->tid = $tid;
        return $this;
    }

    /**
     * @return string
     */
    public function getPchain()
    {
        return $this->pchain;
    }

    /**
     * @param string $pchain
     * @return $this
     * @throws \PowerLinks\OpenRtb\Tools\Exceptions\ExceptionInvalidValue
     */
    public function setPchain($pchain)
    {
        $this->validateString($pchain);
        $this->pchain = $pchain;
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
