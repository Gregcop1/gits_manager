<?php

namespace Inouit\GitsManagerBundle\Projects;

/**
 * Inouit/GitManagerBundle/Projects/Directory
 */
class Directory {

    private $path;
    private $repositories = array();

    private function initRepositories(){
        if($this->path && is_dir($this->path) && $handle = opendir($this->path)){
            while (false !== ($entry = readdir($handle))) {
                if($entry!='.' && $entry!='..') {
                    $dirName = $this->path.'/'.$entry;
                    if(file_exists($dirName.'/.git')){
                        $repository = new Repository($dirName);
                        $this->repositories[$dirName] = $repository;
                    }
                }
            }
        }
    }

    public function __construct($path) {
        $this->setPath($path);
    }

    public function getRepositories()
    {
        return $this->repositories;
    }

    public function getPath()
    {
        return $this->path;
    }

    public function setPath($path)
    {
        $this->path = $path;
        $this->initRepositories();
    }


}
?>