<?php

/**
* Class CompilerInterface
*
* @package     Edge
* @author      Drizzy <hola@drizzy.dev>
* @license     http://opensource.org/licenses/MIT The MIT License (MIT)
*/

namespace Rufus\Edge\Compiler;

/**
 * The CompilerInterface class.
 *
 */
interface CompilerInterface
{
    /**
     * compile
     *
     * @param   string $value
     *
     * @return  string
     */
    public function compile($value);

    /**
     * Register a handler for custom directives.
     *
     * @param  string   $name
     * @param  callable $handler
     *
     * @return static
     */
    public function directive($name, $handler);

    /**
     * parser
     *
     * @param   callable $handler
     *
     * @return  static
     */
    public function parser($handler);
}
