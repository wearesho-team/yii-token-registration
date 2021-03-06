<?php

namespace Wearesho\Yii\Tests\Mocks;

use Carbon\CarbonInterval;

use Wearesho\Yii\Interfaces\TokenRepositoryConfigInterface;

/**
 * Class TokenRepositorySettingsMock
 * @package Wearesho\Yii\Tests\Mocks
 *
 * @internal
 */
class TokenRepositoryConfigMock implements TokenRepositoryConfigInterface
{
    /** @var  CarbonInterval */
    protected $expirePeriod;

    /** @var  int */
    protected $verifyLimit = 3;

    /** @var  int */
    protected $deliveryLimit = 3;

    /**
     * TokenRepositoryConfigMock constructor.
     */
    public function __construct()
    {
        $this->expirePeriod = CarbonInterval::hour();
    }

    /**
     * @return CarbonInterval
     */
    public function getExpirePeriod(): CarbonInterval
    {
        return $this->expirePeriod;
    }

    /**
     * @return int
     */
    public function getVerifyLimit(): int
    {
        return $this->verifyLimit;
    }

    /**
     * @return int
     */
    public function getDeliveryLimit(): int
    {
        return $this->deliveryLimit;
    }

    /**
     * @param CarbonInterval $expirePeriod
     */
    public function setExpirePeriod(CarbonInterval $expirePeriod)
    {
        $this->expirePeriod = $expirePeriod;
    }

    /**
     * @param int $deliveryLimit
     */
    public function setDeliveryLimit(int $deliveryLimit)
    {
        $this->deliveryLimit = $deliveryLimit;
    }

    /**
     * @param int $verifyLimit
     */
    public function setVerifyLimit(int $verifyLimit)
    {
        $this->verifyLimit = $verifyLimit;
    }
}
