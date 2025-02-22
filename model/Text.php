<?php

class Text extends Block
{

    // private $text;
    protected $text;

    public function __construct($text)
    {
        $this->text = $text;
    }

    public function draw()
    {
        $str = <<<EOD
     <!-------------Блок "Text"-------------------------->
    <div class='text'>
       {$this->text}
    </div>
    <!-------------Кінець блоку "Text"-------------------->\n
EOD;
        return $str;
    }
}