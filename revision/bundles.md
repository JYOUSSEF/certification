# Bundles

## Naming conventions
Quelles PSR le namespace d'un bundle doit-il suivre ?
> PSR-0 et PSR-4

## Code organization
Quels sont les fichiers obligatoires pour la création d'un bundle ?
> La classe du Bundle (qui étend Symfony\Component\HttpKernel\Bundle\Bundle)
> README.md (ou README.rst)
> LICENSE
> Resources/doc/index.rst

Quels sous-répertoires met-on dans Resources ?
> config
> doc
> public
> translations
> views

## The controllers
Basiquement, que fait un Controller ?
> Il prend des informations d'une requête HTTP et renvoit une réponse HTTP

Quelle type d'exception est levée si un argument d'un controller n'est pas défini dans la route ?
> RuntimeException

Par défault, quel code HTTP renvoit la méthode redirect() ?
> 302

Quelle type de réponse renvoit la méthode redirect() ?
> RedirectResponse

Comment créer un message flash dans un controller ?
> $resquest->getSession()->getFlashBag()->add('type', 'message');

Depuis quel paramètre récupère-t-on les messages flash dans un template ?
> app.session.flashbag.get('type')

Est-ce qu'on peut définir un template static sans controller ?
> Oui, dans la configuration de la route  
```yml
    route_name:
        defaults:
            _controller: FrameworkBundle:Template:template
            template: static/template_name.html.twig
```

Comment overrider une page d'erreur 404 ?
> Il faut créer un fichier template ici : app/Resources/TwigBundle/views/Exception/ rror404.html.twig

## The views
Dans un template Twig, comment affiche-t-on le rendu d'une méthode d'un controller ?
> {{ render(controller('BundleName:ControllerName:actionName')) }}

Quelle est la différence entre la fonction path et url dans Twig ?
> *url* génère des URLs absolues

## The resources (asset management)
Quel filtre permet de régler le problème des chemins relatifs vers les images en CSS ?
> cssrewrite
