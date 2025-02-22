<?php

require "../autoload.php";

class Controller
{
    // private $dir;
    private $dir;

    protected $uploaddir;

    public function __construct($dir)
    {
        $this->dir       = $dir;
        $this->uploaddir = $dir . "/images/";

        if (!is_dir($this->dir)) {
            mkdir($this->dir); // створення каталогу 'landing'
        }
        if (!is_dir($this->uploaddir)) {
            mkdir($this->uploaddir); // створення каталогу 'images'
        }
    }

    /**
     * Get the value of dir
     */
    public function getDir()
    {
        return $this->dir;
    }

    /**
     * Set the value of dir
     */
    public function setDir($dir): self
    {
        $this->dir = $dir;
        return $this;
    }

    /**
     * Get the value of uploaddir
     */
    public function getUploaddir()
    {
        return $this->uploaddir;
    }

    /**
     * Set the value of uploaddir
     */
    public function setUploaddir($uploaddir): self
    {
        $this->uploaddir = $uploaddir;
        return $this;
    }

    public function action()
    {
        $blocks = [];
        ob_start();
        /* створення блоків */
        if ($_POST['header']) {
            $img = "";

            if ($_FILES["logo"]["name"]) {

                $img = "images/" . $_FILES["logo"]["name"];
            }

            $header   = new Header($_POST['header'], $img);
            $blocks[] = $header;
        }

        if ($_POST['form']) {
            $form     = new Form($_POST['form']);
            $blocks[] = $form;
        }

        if ($_POST['text']) {
            $text     = new Text($_POST['text']);
            $blocks[] = $text;
        }
        /* створення модели */
        if ($_POST['title']) {
            $model = new Model($blocks, $_POST['title']);
        } else {
            $model = new Model($blocks);
        }

        if ($_FILES["logo"]["name"]) {
            $model->upload($_FILES["logo"], $this->uploaddir);
        }

        /* Робота с моделлю */
        $str_land = $model->generate(); // генерація тексту лендинга
        $path     = "{$this->dir}/index.html";
        $f        = fopen($path, "w+"); // створення файлу лендинга по вказаному шляху
        fwrite($f, $str_land);          // запис в файл лендингу
        fclose($f);
        $model->achiving($this->dir);
        header("Location: ../index.php");
        ob_flush();
    }
}

$controller = new Controller('../landing');
$controller->action();