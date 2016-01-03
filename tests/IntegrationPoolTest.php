<?php

/*
 * This file is part of php-cache\doctrine-adapter package.
 *
 * (c) 2015-2015 Aaron Scherer <aequasi@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Cache\Adapter\Redis\Tests;

use Cache\Adapter\Memcached\MemcachedCachePool;
use Cache\IntegrationTests\CachePoolTest as BaseTest;
use Predis\Client;

class IntegrationPoolTest extends BaseTest
{
    private $client = null;

    public function createCachePool()
    {
        return new MemcachedCachePool($this->getClient());
    }

    private function getClient()
    {
        if ($this->client === null) {
            $this->client = new \Memcached();
        }

        return $this->client;
    }
}
