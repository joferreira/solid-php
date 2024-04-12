<?php

namespace SolidPhp\Html;

class HtmlTest extends \PHPUnit_Framework_TestCase
{
    public function testCriarTagImgComSrc()
    {
        $html = new Html;
        $img = $html->img('img/photo.png');

        $this->assertEquals('<img src="img/photo.png">', $img);
    }

    public function testCriarTagAComImgAncora()
    {
        $html = new Html;
        $img = $html->img('img/photo.png');

        $a = $html->a('http://www.exemplo.com.br', $img);

        $this->assertEquals('<a href="http://www.exemplo.com.br"><img src="img/photo.png"></a>', $a);
    }

    public function testCriarTagAComClassEId()
    {
        $html = new Html;

        $a = $html->a('http://www.exemplo.com.br', 'Meu Site');
        $a->attributes([
            'class' => 'btn btn-default'
        ]);

        $this->assertEquals('<a href="http://www.exemplo.com.br" class="btn btn-default">Meu Site</a>', $a);
    }

    public function testCriarTagAComClassEIdComModoEstatico()
    {
        $a = Html::a('http://www.exemplo.com.br', 'Meu Site');
        $a->attributes([
            'class' => 'btn btn-default'
        ]);

        $this->assertEquals('<a href="http://www.exemplo.com.br" class="btn btn-default">Meu Site</a>', $a);
    }
}