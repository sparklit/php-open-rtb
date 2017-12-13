<?php
/**
 * Banner.php
 * 
 * @copyright PowerLinks
 * @author Manuel Kanah <manuel@powerlinks.com>
 * Date: 28/08/15 - 14:39
 */

namespace PowerLinks\OpenRtb\BidRequest;

use PowerLinks\OpenRtb\BidRequest\Specification\RenderingMode;
use PowerLinks\OpenRtb\Tools\Interfaces\Arrayable;
use PowerLinks\OpenRtb\BidRequest\Specification\BannerMimeType;
use PowerLinks\OpenRtb\Tools\Traits\SetterValidation;
use PowerLinks\OpenRtb\Tools\Traits\ToArray;
use PowerLinks\OpenRtb\Tools\Classes\ArrayCollection;

class Banner implements Arrayable
{
    use SetterValidation;
    use ToArray;

    /**
     * Array of "Format" objects representing the banner sizes permitted. If
     * none are specified, then use of the "h" and "w" attributes is highly
     * recommended.
     * @see \PowerLinks\OpenRtb\BidRequest\Format
     * @recommended
     * @var ArrayCollection
     */
    protected $format;

    /**
     * @recommended
     * @var int
     */
    protected $w;

    /**
     * @recommended
     * @var int
     */
    protected $h;

    /**
     * @var int
     */
    protected $wmax;

    /**
     * @var int
     */
    protected $hmax;

    /**
     * @var int
     */
    protected $wmin;

    /**
     * @var int
     */
    protected $hmin;

    /**
     * @var string
     */
    protected $id;

    /**
     * Array of Integers
     * @var array
     */
    protected $btype;

    /**
     * Array of Integers
     * @var array
     */
    protected $battr;

    /**
     * @var int
     */
    protected $pos;

    /**
     * Array of Strings
     * Values allow: 'application/x-shockwave-flash', 'image/jpg', 'image/gif'
     * @var array
     */
    protected $mimes;

    /**
     * Values allow: 0 = no, 1 = yes
     * @var int
     */
    protected $topframe;

    /**
     * Array of integers
     * @var array
     */
    protected $expdir;

    /**
     * Array of integers
     * @var array
     */
    protected $api;

    /**
     * Relevant only for "Banner" objects used with a "Video" object in an array
     * of companion ads. Indicates the companion banner rendering mode relative
     * to the associated video, where 0 = concurrent, 1 = end-card.
     * @see \PowerLinks\OpenRtb\BidRequest\Video
     * @var int
     */
    protected $vcm;

    /**
     * @var Ext
     */
    protected $ext;

    /**
     * @return ArrayCollection
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * @param Format $format
     * @return $this
     */
    public function addFormat(Format $format)
    {
        $this->format->add($format);
        return $this;
    }

    /**
     * @param ArrayCollection $format
     * @return $this
     */
    public function setFormat(ArrayCollection $format)
    {
        $this->format = $format;
        return $this;
    }

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
        $this->w = $this->validatePositiveInt($w);
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
        $this->h = $this->validatePositiveInt($h);
        return $this;
    }

    /**
     * @return int
     */
    public function getWmax()
    {
        return $this->wmax;
    }

    /**
     * @param int $wmax
     * @return $this
     * @throws \PowerLinks\OpenRtb\Tools\Exceptions\ExceptionInvalidValue
     */
    public function setWmax($wmax)
    {
        $this->wmax = $this->validatePositiveInt($wmax);
        return $this;
    }

    /**
     * @return int
     */
    public function getHmax()
    {
        return $this->hmax;
    }

    /**
     * @param int $hmax
     * @return $this
     * @throws \PowerLinks\OpenRtb\Tools\Exceptions\ExceptionInvalidValue
     */
    public function setHmax($hmax)
    {
        $this->hmax = $this->validatePositiveInt($hmax);
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
        $this->wmin = $this->validatePositiveInt($wmin);
        return $this;
    }

    /**
     * @return int
     */
    public function getHmin()
    {
        return $this->hmin;
    }

    /**
     * @param int $hmin
     * @return $this
     * @throws \PowerLinks\OpenRtb\Tools\Exceptions\ExceptionInvalidValue
     */
    public function setHmin($hmin)
    {
        $this->hmin = $this->validatePositiveInt($hmin);
        return $this;
    }

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
     * @return array
     */
    public function getBtype()
    {
        return $this->btype;
    }

    /**
     * @param int $btype
     * @return $this
     * @throws \PowerLinks\OpenRtb\Tools\Exceptions\ExceptionInvalidValue
     */
    public function addBtype($btype)
    {
        $this->btype[] = $this->validateInt($btype);
        return $this;
    }

    /**
     * @param array $btype
     * @return $this
     */
    public function setBtype(array $btype)
    {
        $this->btype = $btype;
        return $this;
    }

    /**
     * @return array
     */
    public function getBattr()
    {
        return $this->battr;
    }

    /**
     * @param int $battr
     * @return $this
     * @throws \PowerLinks\OpenRtb\Tools\Exceptions\ExceptionInvalidValue
     */
    public function addBattr($battr)
    {
        $this->battr[] = $this->validateInt($battr);
        return $this;
    }

    /**
     * @param array $battr
     * @return $this
     */
    public function setBattr(array $battr)
    {
        $this->battr = $battr;
        return $this;
    }

    /**
     * @return int
     */
    public function getPos()
    {
        return $this->pos;
    }

    /**
     * @param int $pos
     * @return $this
     * @throws \PowerLinks\OpenRtb\Tools\Exceptions\ExceptionInvalidValue
     */
    public function setPos($pos)
    {
        $this->pos = $this->validateInt($pos);
        return $this;
    }

    /**
     * @return array
     */
    public function getMimes()
    {
        return $this->mimes;
    }

    /**
     * @param string $mimes
     * @return $this
     * @throws \PowerLinks\OpenRtb\Tools\Exceptions\ExceptionInvalidValue
     */
    public function addMimes($mimes)
    {
        $this->validateIn($mimes, BannerMimeType::getAll());
        $this->mimes[] = $mimes;
        return $this;
    }

    /**
     * @param array $mimes
     * @return $this
     */
    public function setMimes(array $mimes)
    {
        $this->mimes = $mimes;
        return $this;
    }

    /**
     * @return int
     */
    public function getTopframe()
    {
        return $this->topframe;
    }

    /**
     * @param int $topframe
     * @return $this
     * @throws \PowerLinks\OpenRtb\Tools\Exceptions\ExceptionInvalidValue
     */
    public function setTopframe($topframe)
    {
        $this->topframe = $this->validateInt($topframe);
        return $this;
    }

    /**
     * @return array
     */
    public function getExpdir()
    {
        return $this->expdir;
    }

    /**
     * @param int $expdir
     * @return $this
     * @throws \PowerLinks\OpenRtb\Tools\Exceptions\ExceptionInvalidValue
     */
    public function addExpdir($expdir)
    {
        $this->expdir[] = $this->validateInt($expdir);
        return $this;
    }

    /**
     * @param array $expdir
     * @return $this
     */
    public function setExpdir(array $expdir)
    {
        $this->expdir = $expdir;
        return $this;
    }

    /**
     * @return array
     */
    public function getApi()
    {
        return $this->api;
    }

    /**
     * @param int $api
     * @return $this
     * @throws \PowerLinks\OpenRtb\Tools\Exceptions\ExceptionInvalidValue
     */
    public function addApi($api)
    {
        $this->api[] = $this->validateInt($api);
        return $this;
    }

    /**
     * @param array $api
     * @return $this
     */
    public function setApi(array $api)
    {
        $this->api = $api;
        return $this;
    }

    /**
     * @return int
     */
    public function getVcm()
    {
        return $this->vcm;
    }

    /**
     * @param int $vcm
     * @return $this
     * @throws \PowerLinks\OpenRtb\Tools\Exceptions\ExceptionInvalidValue
     */
    public function setVcm($vcm)
    {
        $this->validateIn($vcm, RenderingMode::getAll());
        $this->vcm = $vcm;
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