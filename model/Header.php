<?php

class Header extends Block
{
    private $logo_img;
    private $landing_header;

    public function __construct($landing_header = "Header", $logo_img = "" )
    {
        $this->logo_img       = $logo_img;
        $this->landing_header = $landing_header;
    }

    public function draw()
    {
        if ($this->logo_img) {
            $img = "<img src=\"{$this->logo_img}\" alt=\"logo\" class=\"logo\"/>";
        } else {
            $img = "";
        }

        $str = <<<EOD
        <!-------------Блок "Header"-------------------------->
        <div class='header'>
        {$img}
            <h1>{$this->landing_header} </h1>
        </div>
        <!------------- Кінець блоку "Header"-------------------->\n
    EOD;
        return $str;
    }

}