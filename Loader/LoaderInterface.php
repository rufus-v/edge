<?php

/**
* Class LoaderInterface
*
* @package     Edge
* @author      Drizzy <hola@drizzy.dev>
* @license     http://opensource.org/licenses/MIT The MIT License (MIT)
*/

namespace Rufus\Edge\Loader;

/**
 * Interface LoaderInterface
 *
 */
interface LoaderInterface
{
    /**
     * load
     *
     * @param   string $key
     *
     * @return  string
     */
    public function find($key);
}
