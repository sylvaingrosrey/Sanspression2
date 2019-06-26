<?php
namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Category;

class ArticleFixtures extends Fixture
{

    public function load(ObjectManager $manager)
    {
        $a= new Category();
        for ($i=0; $i<=50; $i++) {
            $article = new Article();
            $article->setName('Article'.$i);
            $article->setNamees('Articlees'.$i);
            $article->setNameen('Articleen'.$i);
            $article->setNametr('Articletr'.$i);
            $article->setNamede('Articlede'.$i);
            $article->setSrcImgArticle("https://via.placeholder.com/150");
            $article->setDescriptionen("une description de la bouffeen");
            $article->setDescriptiones("une description de la bouffees");
            $article->setDescriptionde("une description de la bouffede");
            $article->setDescriptiontr("une description de la bouffetr");
            $article->setDescriptionArticle("une description de la bouffe");
            $article->setPrice(rand(5, 25));
            $article->setArticleActive(true);
            $article->setNewActive((bool)rand(0, 1));
            $article->setPromoActive((bool)rand(0, 1));
            $article->setDate(new \DateTime('now'));
            $this->addReference('Article_' . $i, $article);
            $manager->persist($article);
        }
        $manager->flush();
    }
    public function getDependencies()
    {
        return [CategoryFixtures::class];
    }
}
