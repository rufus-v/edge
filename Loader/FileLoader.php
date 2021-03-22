<?php

/**
* Class FileLoader
*
* @package     Edge
* @author      Drizzy <hola@drizzy.dev>
* @license     http://opensource.org/licenses/MIT The MIT License (MIT)
*/

namespace Rufus\Edge\Loader;

use Rufus\Edge\Exception\LayoutNotFoundException;

/**
 * The FileLoader class.
 *
 */
class FileLoader implements LoaderInterface
{
    /**
     * Property extensions.
     *
     * @var  array
     */
    protected $extensions = ['.edge.php', '.blade.php'];

    /**
     * Property paths.
     *
     * @var  array
     */
    protected $paths = [];

    /**
     * EdgeFileLoader constructor.
     *
     * @param array $paths
     */
    public function __construct(array $paths = [])
    {
        $this->paths = $paths;
    }

    /**
     * find
     *
     * @param string $key
     *
     * @return  string
     */
    public function find($key)
    {
        $key = $this->normalize($key);

        $filePath = null;

        foreach ($this->paths as $path) {
            foreach ($this->extensions as $ext) {
                if (is_file($path . '/' . $key . $ext)) {
                    $filePath = $path . '/' . $key . $ext;

                    break 2;
                }
            }
        }

        if ($filePath === null) {
            $paths = implode(" |\n ", $this->paths);

            throw new LayoutNotFoundException('View file not found: ' . $key . ".\n (Paths: " . $paths . ')', 13001);
        }

        return $filePath;
    }

    /**
     * loadFile
     *
     * @param   string $path
     *
     * @return  string
     */
    public function load($path)
    {
        return file_get_contents($path);
    }

    /**
     * addPath
     *
     * @param   string $path
     *
     * @return  static
     */
    public function addPath($path)
    {
        $this->paths[] = $path;

        return $this;
    }

    /**
     * prependPath
     *
     * @param   string $path
     *
     * @return  static
     */
    public function prependPath($path)
    {
        array_unshift($this->paths, $path);

        return $this;
    }

    /**
     * normalize
     *
     * @param   string $path
     *
     * @return  string
     */
    protected function normalize($path)
    {
        return str_replace('.', '/', $path);
    }

    /**
     * Method to get property Paths
     *
     * @return  array
     */
    public function getPaths()
    {
        return $this->paths;
    }

    /**
     * Method to set property paths
     *
     * @param   array $paths
     *
     * @return  static  Return self to support chaining.
     */
    public function setPaths($paths)
    {
        $this->paths = $paths;

        return $this;
    }

    /**
     * addExtension
     *
     * @param   string $name
     *
     * @return  static
     */
    public function addFileExtension($name)
    {
        $this->extensions[] = $name;

        return $this;
    }

    /**
     * Method to get property Extensions
     *
     * @return  array
     */
    public function getExtensions()
    {
        return $this->extensions;
    }

    /**
     * Method to set property extensions
     *
     * @param   array $extensions
     *
     * @return  static  Return self to support chaining.
     */
    public function setExtensions($extensions)
    {
        $this->extensions = $extensions;

        return $this;
    }
}
