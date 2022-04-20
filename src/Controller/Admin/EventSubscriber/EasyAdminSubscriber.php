<?php 

namespace App\Controller\Admin\EventSubscriber;

use DateTimeImmutable;
use App\Entity\Articles;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use EasyCorp\Bundle\EasyAdminBundle\Event\BeforeEntityPersistedEvent;



class EasyAdminSubscriber implements EventSubscriberInterface
{
    private $slugger;
    private $users;

// Je génère un slug à partir du titre de l'article
    public function __construct(SluggerInterface $slugger, Security $security)
    {
        $this->slugger = $slugger;
        $this->users = $security;

    }
// je m'abonne à l'événement BeforeEntityPersistedEvent et je les écoutes
    public static function getSubscribedEvents()
    {
        return [
            BeforeEntityPersistedEvent::class => 'setArticlesSlugAndDateAndUsers',
        ];
    }
// je recupère les données 
    public function  setArticlesSlugAndDateAndUsers(BeforeEntityPersistedEvent $event)
    {
        //je stock dans $entity les données de l'article
        $entity = $event->getEntityInstance();

// je vérifie les instances de l'entité article
        if (!($entity instanceof Articles)) {
            return;
        }
        // je génère un slug à partir du titre de l'article
        $slug = $this->slugger->slug($entity->getTitle());
        $entity->setSlug($slug);
        // je génère la date de création de l'article
        $now = new DateTimeImmutable('now');
        $entity->setCreatedAt($now);
    

    }
}
