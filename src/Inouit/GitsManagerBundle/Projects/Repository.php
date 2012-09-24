<?php

namespace Inouit\GitsManagerBundle\Projects;

/**
 * Inouit/GitManagerBundle/Projects/Repository
 */
class Repository {

    private $name;
    private $path;

    private $info = array();
    private $localCommits;
    private $remoteCommits;

    public function __construct($path) {
        $this->setPath($path);
        $directories = explode('/', $path);
        $this->name = $directories[(count($directories)-1)];

        exec('cd '.$path);
        $this->getInfo();
        $this->localCommits = $this->initCommits();
        $this->remoteCommits = $this->initCommits(' --remotes');
    }

    private function getInfo() {
    }

    public function diffLocalRemoteStatus() {
        $diff = $this->diffLocalRemoteCount();
        if($diff < 0 ){
            return abs($diff). ' commit(s) de retard sur le repository';
        }elseif($diff > 0){
            return abs($diff). ' commit(s) d\'avance sur le repository';
        }else {
            return 'A jour';
        }
    }

    public function diffLocalRemoteCount() {
        return count($this->localCommits) - count($this->remoteCommits);
    }

    private function initCommits($option = '') {
        $output = utf8_decode($this->git_exec('git log'.$option));
        $commits = array();

        $matches = preg_split('/commit / ', $output);

        if(count($matches)) {
            foreach($matches as $item) {
                if($item) {
                    $commit = new Commit($item);
                    array_push($commits, $commit);
                }
            }
        }

        return $commits;
    }

    public function getLastCommit() {
        if(count($this->localCommits)){
            return $this->localCommits[0];
        }

        return null;
    }

    public function getLastRemoteCommit() {
        if(count($this->remoteCommits)){
            return $this->remoteCommits[0];
        }

        return null;
    }

    private function git_exec($command) {
        return shell_exec('cd '.$this->path.' && '.$command);
    }

    public function getPath()
    {
        return $this->path;
    }

    public function setPath($path)
    {
        $this->path = $path;
    }

    public function getName()
    {
        return $this->name;
    }


}
?>