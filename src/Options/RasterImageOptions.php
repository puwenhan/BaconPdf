<?php
/**
 * BaconPdf
 *
 * @link      http://github.com/Bacon/BaconPdf For the canonical source repository
 * @copyright 2015 Ben Scholzen (DASPRiD)
 * @license   http://opensource.org/licenses/BSD-2-Clause Simplified BSD License
 */

namespace Bacon\Pdf\Options;

final class RasterImageOptions
{
    /**
     * @var bool
     */
    private $useLossyCompression;

    /**
     * @var int
     */
    private $lossyCompressionQuality;

    private function __construct($useLossyCompression = false, $lossyCompressionQuality = 100)
    {
        $this->useLossyCompression = $useLossyCompression;
        $this->lossyCompressionQuality = $lossyCompressionQuality;
    }

    public function useLossyCompression()
    {
        return $this->useLossyCompression;
    }

    public function getLossyCompressionQuality()
    {
        return $this->lossyCompressionQuality;
    }
}
