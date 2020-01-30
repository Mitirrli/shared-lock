<?php

namespace Mitirrli\Shared\Memory;

trait Memory
{
    /**
     * 非堵塞获取信号量
     *
     * @return bool
     */
    public function getSignal()
    {
        return sem_acquire($this->signal, true);
    }

    /**
     * 设置信号量
     */
    public function setSignal()
    {
        if (empty($this->sem_id)) {
            $this->sem_id = ftok(__FILE__, 's');
        }
        $this->signal = sem_get($this->sem_id, 1, 0666, 0);
    }

    /**
     * 移除信号量
     *
     * @return bool
     */
    public function remove()
    {
        return sem_remove($this->signal);
    }
}
