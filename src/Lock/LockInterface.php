<?php

namespace Mitirrli\Shared\Lock;

interface LockInterface
{
    /**
     * 加锁
     *
     * @return mixed
     */
    public function lock();

    /**
     * 解锁
     *
     * @return mixed
     */
    public function unlock();
}
