<?php

/**
* Class ArrayCache
*
* @package     Edge
* @author      Drizzy <hola@drizzy.dev>
* @license     http://opensource.org/licenses/MIT The MIT License (MIT)
*/

namespace Rufus\Edge\Cache;

/**
 * The ArrayCache class.
 *
 */
class ArrayCache implements CacheInterface
{
    /**
     * Property data.
     *
     * @var  array
     */
    protected $data = [];

    /**
     * isExpired
     *
     * @param   string $path
     *
     * @return  boolean
     */
    public function isExpired($path)
    {
        return true;
    }

    /**
     * getCacheKey
     *
     * @param   string $path
     *
     * @return  string
     */
    public function getCacheKey($path)
    {
        return md5($path);
    }

    /**
     * get
     *
     * @param   string $path
     *
     * @return  string
     */
    public function load($path)
    {
        $key = $this->getCacheKey($path);

        if (isset($this->data[$key])) {
            return $this->data[$key];
        }

        return null;
    }

    /**
     * store
     *
     * @param   string $path
     * @param   string $value
     *
     * @return  static
     */
    public function store($path, $value)
    {
        $key = $this->getCacheKey($path);

        $this->data[$key] = $value;

        return $this;
    }

    /**
     * remove
     *
     * @param   string $path
     *
     * @return  static
     */
    public function remove($path)
    {
        $key = $this->getCacheKey($path);

        unset($this->data[$key]);

        return $this;
    }

    /**
     * Method to get property Data
     *
     * @return  array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Method to set property data
     *
     * @param   array $data
     *
     * @return  static  Return self to support chaining.
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }
}
