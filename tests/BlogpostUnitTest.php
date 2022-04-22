<?php

namespace App\Tests;


use App\Entity\User;
use DateTimeImmutable;
use App\Entity\Blogpost;
use PHPUnit\Framework\TestCase;

// test des setter et getter de la classe blogpost
class BlogpostUnitTest extends TestCase
{
    // test que la valeur est attendue est true
    public function testIsTrue(): void
    {
        $blogpost = new Blogpost();
        $datetime = new DateTimeImmutable();
        $user = new User();

        $blogpost->setTitre('titre')
            ->setContenu('contenu')
            ->setCreatedAt($datetime)
            ->setSlug('slug')
            ->setUser($user);

        $this->assertTrue($blogpost->getTitre() === 'titre');
        $this->assertTrue($blogpost->getContenu() === 'contenu');
        $this->assertTrue($blogpost->getCreatedAt() === $datetime);
        $this->assertTrue($blogpost->getSlug() === 'slug');
        $this->assertTrue($blogpost->getUser() === $user);
    }

    // test que la valeur est attendue est false
    public function testIsFalse()
    {
        $blogpost = new Blogpost();
        $datetime = new DateTimeImmutable();
        $user = new User();

        $blogpost->setTitre('titre')
            ->setContenu('contenu')
            ->setCreatedAt($datetime)
            ->setSlug('slug')
            ->setUser($user);


        $this->assertFalse($blogpost->getTitre() === 'false');
        $this->assertFalse($blogpost->getContenu() === 'false');
        $this->assertFalse($blogpost->getCreatedAt() ===  new DateTimeImmutable());
        $this->assertFalse($blogpost->getSlug() === 'false');
        $this->assertFalse($blogpost->getUser() === new User());
    }

    // test que la valeur est attendue est empty
    public function testIsEmpty()
    {
        $blogpost = new Blogpost();

        $this->assertEmpty($blogpost->getTitre());
        $this->assertEmpty($blogpost->getContenu());
        $this->assertEmpty($blogpost->getCreatedAt());
        $this->assertEmpty($blogpost->getSlug());
        $this->assertEmpty($blogpost->getUser());
    }
    
    
}
