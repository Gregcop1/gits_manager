<?php

namespace Inouit\GitsManagerBundle\Projects;

/**
 * Inouit/GitManagerBundle/Projects/Directory
 */
class Directory {

    private $path;

    public function __construct($path) {
        $this->setPath($path);
    }

    public function getPath()
    {
        return $this->path;
    }

    public function setPath($path)
    {
        $this->path = $path;
    }


}
?>