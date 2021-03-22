<?php

/**
* Class ExtensionInterface
*
* @package     Edge
* @author      Drizzy <hola@drizzy.dev>
* @license     http://opensource.org/licenses/MIT The MIT License (MIT)
*/

namespace Rufus\Edge\Extension;

/**
 * The ExtensionInterface class.
 *
 */
interface ExtensionInterface
{
    /**
     * getName
     *
     * @return  string
     */
    public function getName();

    /**
     * getDirectives
     *
     * @return  callable[]
     */
    public function getDirectives();

    /**
     * getGlobals
     *
     * @return  array
     */
    public function getGlobals();

    /**
     * getParsers
     *
     * @return  callable[]
     */
    public function getParsers();
}
