# Routing

## Configuration (YAML, XML, PHP & annotations)
Quel paramètre de définition d'une route permet de définir des paramètres obligatoires ?
> `requirements`

Security: Comment forcer HTTPS sur une collection de routes ?
> `access_control: require_channel`

Comment forcer l'utilisation de HTTP ou HTTPS ?
> `schemes: [http]`

## Restrict URL parameters
Quel paramètre permet de restreindre l'accès à une route définie en annotation ?
> `Method`

Par défault, laquelle est autorisée ?
> Toutes

Comment autoriser "/" dans une URL ?
> `requirements={"username"=".+"}` (par défault : `[^/]+`)

## Set default values to URL parameters


## Generate URL parameters
Comment générer une URL absolue ?
> `$this->generateUrl('blog_show', array('slug' => 'my-blog-post'), UrlGeneratorInterface::ABSOLUTE_URL);`  

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

Comment définir une route statique ?
> 

## Trigger redirects


## Special internal routing attributes
Quels sont les 3 paramètres spéciaux du routing ?
> `_controller` (fqcn AppBundle\Controller\DefaultController::indexAction ou logical name AppBundle:Default:index)  
> `_format` (change le Content-Type de la Request)  
> `_locale`  

## Domain name matching


## Conditional request matching


## HTTP methods matching


## User's locale guessing


## Router debugging

