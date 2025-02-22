<?php
class Controller
{
    // private $dir;
    private $dir;   

    protected $uploaddir;

    public function __construct($dir, $uploaddir)
    {
        $this->dir = $dir;
        $this->uploaddir = $uploaddir;
    }

    /**
     * Get the value of dir
     */
    public function getDir() {
        return $this->dir;
    }

    /**
     * Set the value of dir
     */
    public function setDir($dir): self {
        $this->dir = $dir;
        return $this;
    }

    /**
     * Get the value of uploaddir
     */
    public function getUploaddir() {
        return $this->uploaddir;
    }

    /**
     * Set the value of uploaddir
     */
    public function setUploaddir($uploaddir): self {
        $this->uploaddir = $uploaddir;
        return $this;
    }
}