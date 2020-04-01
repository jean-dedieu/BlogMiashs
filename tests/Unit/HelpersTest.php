<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class HelpersTest extends TestCase
{
    /** @test */
    public function page_title_doit_retourner_lebon_titre()
    {

        dd(page_title(''));
        //on va exécuter  page_title('') et vérifier si ce qu'on na obtenu est égale à 'EchoMiashs - Blog'
        $this->assertEquals('EchoMiashs - Blog', page_title(''));
    }


     /** @test */
     public function page_title_doit_retourner_lebon_titre_debase()
     {
 
         dd(page_title(''));
         //on va exécuter  page_title('') et vérifier si ce qu'on na obtenu est égale à 'EchoMiashs - Blog'
         $this->assertEquals('About | EchoMiash -Blog', page_title('About'));
         $this->assertEquals('Home | EchoMiash -Blog', page_title('Home'));
     }
}
