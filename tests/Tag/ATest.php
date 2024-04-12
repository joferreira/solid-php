<?php

namespace SolidPhp\Html\Tag;

use SolidPhp\Html\Attributes;

class ATest extends \PHPUnit_Framework_TestCase
{
    public function testCriarTagAComHrefEAncora()
    {
        $a = new A(new Attributes, 'http://www.exemplo.com.br', 'meu site');

        $this->assertEquals('<a href="http://www.exemplo.com.br">meu site</a>', $a);
    }

    public function testCriarTagAComHrefEAncoraEAtributosHtmlAdicionais()
    {
        $attributes = [
            'class'=> 'btn btn-default',
            'data-modal' => '#login',
            'id' => 'login'
        ];
        $a = new A(new Attributes,'#', 'login');
        $a->attributes($attributes);

        $this->assertEquals('<a href="#" class="btn btn-default" data-modal="#login" id="login">login</a>', $a);
    }

}