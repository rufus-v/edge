<?php

/**
* Class CacheInterface
*
* @package     Edge
* @author      Drizzy <hola@drizzy.dev>
* @license     http://opensource.org/licenses/MIT The MIT License (MIT)
*/

namespace Rufus\Edge\Cache;

/**
 * Interface CacheInterface
 *
 */
interface CacheInterface
{
    /**
     * isExpired
     *
     * @param   string $path
     *
     * @return  boolean
     */
    public function isExpired($path);

    /**
     * getCacheKey
     *
     * @param   string $path
     *
     * @return  string
     */
    public function getCacheKey($path);

    /**
     * get
     *
     * @param   string $path
     *
     * @return  string
     */
    public function load($path);

    /**
     * store
     *
     * @param   string $path
     * @param   string $value
     *
     * @return  static
     */
    public function store($path, $value);

    /**
     * remove
     *
     * @param   string $path
     *
     * @return  static
     */
    public function remove($path);
}
