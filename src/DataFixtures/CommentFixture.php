<?php

namespace App\DataFixtures;

use Doctrine\Common\Persistence\ObjectManager;

class CommentFixture extends BaseFixture
{
    protected function loadData(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}