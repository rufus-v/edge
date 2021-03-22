<?php

/**
* Class EdgeException
*
* @package     Edge
* @author      Drizzy <hola@drizzy.dev>
* @license     http://opensource.org/licenses/MIT The MIT License (MIT)
*/

namespace Rufus\Edge\Exception;

use Exception;

/**
 * The EdgeException class.
 *
 */
class EdgeException extends \Exception
{
    /**
     * Construct the exception. Note: The message is NOT binary safe.
     *
     * @link  http://php.net/manual/en/exception.construct.php
     *
     * @param string    $message  [optional] The Exception message to throw.
     * @param int       $code     [optional] The Exception code.
     * @param Exception $previous [optional] The previous exception used for the exception chaining.
     */
    public function __construct($message = null, $code = null, $file = null, $line = null, $previous = null)
    {
        parent::__construct($message, $code, $previous);

        $this->file = $file;
        $this->line = $line;
    }
}
