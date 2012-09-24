<?php

namespace Inouit\GitsManagerBundle\Projects;

/**
 * Inouit/GitManagerBundle/Projects/Commit
 */
class Commit {

    private $name;
    private $author;
    private $date;
    private $merge;
    private $message;
    private $infos;


    public function __construct($infos) {
        $this->extractInfos($infos);
    }

    private function extractInfos($infos) {
        $this->setName($infos);
        $this->setAuthor($infos);
        $this->setDate($infos);
        $this->setMerge($infos);
        $this->setMessage($infos);
        $this->infos = $infos;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($infos)
    {
        $output = array();
        preg_match('/^(.*)/', $infos, $output);
        if($output && count($output)>1 && $output[1]) {
            $this->name = trim($output[1]);
        }
    }
    public function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor($infos)
    {
        $output = array();
        preg_match_all('/^Author:(.*)/m', $infos, $output);
        if($output && count($output)>1 && $output[1]) {
            $this->author = trim($output[1][0]);
        }
    }
    public function getDate()
    {
        return $this->date;
    }

    public function setDate($infos)
    {
        $output = array();
        preg_match_all('/^Date:(.*)/m', $infos, $output);
        if($output && count($output)>1 && $output[1]) {
            $this->date = trim($output[1][0]);
        }
    }
    public function getMerge()
    {
        return $this->merge;
    }

    public function setMerge($infos)
    {
        $output = array();
        preg_match_all('/^Merge:(.*)/m', $infos, $output);
        if($output && count($output)>1 && $output[1]) {
            $this->merge = trim($output[1][0]);
        }
    }
    public function getMessage()
    {
        return $this->message;
    }

    public function setMessage($infos)
    {
        $output = array();
        preg_match_all('/^    (.*)/m', $infos, $output);
        if($output && count($output)>1 && $output[1]) {
            $this->message = trim(implode('
', $output[1]));
        }
    }




}
?>