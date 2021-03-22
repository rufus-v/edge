<?php

/**
* Class CompileComponentTrait
*
* @package     Edge
* @author      Drizzy <hola@drizzy.dev>
* @license     http://opensource.org/licenses/MIT The MIT License (MIT)
*/

namespace Rufus\Edge\Compiler\Concern;

/**
 * The CompileComponentTrait class.
 *
 */
trait CompileComponentTrait
{
    /**
     * Compile the component statements into valid PHP.
     *
     * @param  string $expression
     *
     * @return string
     */
    protected function compileComponent($expression)
    {
        return "<?php \$this->startComponent{$expression}; ?>";
    }

    /**
     * Compile the end-component statements into valid PHP.
     *
     * @return string
     */
    protected function compileEndComponent()
    {
        return '<?php echo $this->renderComponent(); ?>';
    }

    /**
     * Compile the slot statements into valid PHP.
     *
     * @param  string $expression
     *
     * @return string
     */
    protected function compileSlot($expression)
    {
        return "<?php \$this->slot{$expression}; ?>";
    }

    /**
     * Compile the end-slot statements into valid PHP.
     *
     * @return string
     */
    protected function compileEndSlot()
    {
        return '<?php $this->endSlot(); ?>';
    }
}
