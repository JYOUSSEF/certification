# Routing

## Part 1

### Configuration (YAML, XML, PHP & annotations)
Comment ajouter une Route à une RouteCollection ?
> $routeCollection->add($name, Route $route);

Quel paramètre de définition d'une route permet de définir des paramètres obligatoires ?
> `requirements`

Security: Comment forcer HTTPS sur une collection de routes ?
> `access_control: require_channel`

Comment forcer l'utilisation de HTTP ou HTTPS ?
> `schemes: [http]`

Est-ce qu'on peut définir une route par défaut pour une classe de contrôleur ?
> Oui, avec l'annotation `@Route`.

Comment importer des routes dans Symfony ?
```yaml
framework:
    router:
        resource: "%kernel.root_dir%/config/routing.yml"
```

### Restrict URL parameters
Quel paramètre permet de restreindre l'accès à une route définie en annotation ?
> `Method`

Par défault, quelle méthode est autorisée ?
> Toutes

Comment autoriser "/" dans une URL ?
> `requirements={"username"=".+"}` (par défault : `[^/]+`)

### Set default values to URL parameters
Comment ?
> En définissant une valeur donnée dans `defaults`.

### Generate URL parameters
Comment générer une URL absolue ?
> Depuis un contrôleur : `$this->generateUrl('blog_show', array('slug' => 'my-blog-post'), UrlGeneratorInterface::ABSOLUTE_URL);`  
> Avec le service `router` : `$router->generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)`

Comment faire la même chose mais pour la Console ?
> En définissant le contexte de façon globale :
```yaml
parameters:
    router.request_context.host: example.org
    router.request_context.scheme: https
    router.request_context.base_url: my/path
```
> Ou pour une Command:
```php
$context = $this->getContainer()->get('router')->getContext();
$context->setHost('example.com');
$context->setScheme('https');
$context->setBaseUrl('my/path');
```

### Trigger redirects
Comment peut-on définir des redirections dans la config du routing, en YAML?
> Oui:
```yaml
# app/config/routing.yml

redirect_url:
    path:     /redirect_url
    defaults:
        _controller: FrameworkBundle:Redirect:urlRedirect
        path: /

redirect_route:
    path:     /redirect_route
    defaults:
        _controller: FrameworkBundle:Redirect:redirect
        route: index
```

### Special internal routing attributes
Quels sont les 3 paramètres spéciaux du routing ?
> `_controller` (fqcn AppBundle\Controller\DefaultController::indexAction ou logical name AppBundle:Default:index)  
> `_format` (change le Content-Type de la Request)  
> `_locale`  

Que fait concrètement `_format`?
> Il set le header `Content-Type` de la Request.


## Part 2

### Domain name matching
Comment faire matcher une route avec une nom de domaine ?
> Avec l'option `host`.

### Conditional request matching
À quoi sert l'option `condition` ?
> À valider si un user peut accéder ou non à une ressource. On peut utiliser l'Expression Language pour ça.

### HTTP methods matching
Si la méthode HTTP ne match pas, quelle type de Response est renvoyée ?
> 405 Method Not Allowed

### User's locale guessing
Comment définir la locale par défaut pour les cas les plus spécifiques ?
> Via un kernel.request listener: `$request->setLocale(...)`

### Router debugging
Que fait la commande `debug:container router` ?
> Elle affiche les infos du service `router` :o)
