<?php

namespace Mitirrli\Shared;

use Mitirrli\Shared\Lock\LockInterface;

/**
 * Class Memory
 * @package Mitirrli\Shared
 */
class Memory implements Version, LockInterface
{
    use Memory\Memory;

    /**
     * @var string
     */
    protected $sem_id = '';

    /**
     * @var string 信号量
     */
    protected $signal;

    /**
     * Memory constructor.
     *
     * @param array $config
     */
    public function __construct(array $config = [])
    {
        foreach ($config as $key => $value) {
            property_exists($this, $key) && $this->{$key} = $value;
        }

        $this->setSignal();
    }

    /**
     * 加锁
     *
     * @return bool|mixed
     */
    public function lock()
    {
        return $this->getSignal();
    }

    /**
     * 解锁
     *
     * @return bool|mixed
     */
    public function unlock()
    {
        return $this->remove();
    }
}
