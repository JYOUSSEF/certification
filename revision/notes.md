What is the way to add a loader to the translator?
> $translator->addLoader($format, LoaderInterface $loader)

Comment faire pour récupérer une nouvelle instannce d'un service à chaque appel ?
 ```yaml
# app/config/services.yml
services:
AppBundle\SomeNonSharedService:
shared: false
```

Quel type d'objet retourne la méthode `request()` de la classe `Symfony\Component\BrowserKit\Client` dans un test fonctionnel ?
> `Symfony\Component\DomCrawler\Crawler`
