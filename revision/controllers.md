# Controllers

## Naming conventions

>

## The base Controller class
Quel est la principale utilité de la classe Controller de base ?
> Fournir des méthodes de raccourci pour les classes enfants (des helpers) et donne accès au `container`.

Quelle est la différence entre `render()` et `renderView()` ?
> `render()` => retourne un object `Response`  
> `renderView()` => retourne une chaîne de caractères  

## The request

>

## The response

Liste des Response possibles ?
> Response  
> BinaryFileResponse  
> JsonResponse  
> RedirectResponse  
> StreamedResponse  

Signature d'une Response ?  
> $content = '', $status = 200, $headers = array()

## The cookies

>

## The session
Quelle méthode raccourcie permet de récupérer la `Session` ?
> `$request->getSession()`

## The flash messages
Quelle méthode permet d'afficher un message depuis le FlashBag tout en le laissant en sessions ?
> `peek(string $type, array $default = array())`

## HTTP redirects

>

## Internal redirects
Que fait `redirectToRoute()` en interne ?
> Elle créé un objet `Response` spécialisé dans la redirection. C'est l'équivalent de: `return new RedirectResponse(string $url, $status = 302)`

## Generate 404 pages
Comment générer une erreur 404 depuis un contrôleur qui étend le base contrôleur ?
> `throw $this->createNotFoundException(string message)`. 
> Qui revient au même que de lancer une `NotFoundHttpException`.

Comment customiser la gestion des erreurs ?
> overrider le template par défaut pour les erreurs (`app/Resources/TwigBundle/views/Exception/`)  
> overrider le controller qui gère les exceptions par défaut  
> utiliser l'événement `kernel.exception`  

Comment overrider le Default ExceptionController ?
```yaml
# app/config/config.yml
twig:
    exception_controller:  AppBundle:Exception:showException
```

> "Instead of creating a new exception controller from scratch you can, of course, also extend the default ExceptionController. In that case, you might want to override one or both of the `showAction()` and `findTemplate()` methods. The latter one locates the template to be used."

## File upload

>

## Built-in internal controllers

>

==============================

1. 1 (BinaryFileResponse)
2. 4
3. 2 => 1,4 & 5
4. 2
5. 2 => 2 & 4
6. 2
7. 4
8. 2
9. 1 & 3 => 1 & 2
10. 1 => 4
11. 2 => 3 & 4
12. 
13. 
14. 
15. 
16. 
17. 
18. 
19. 
20. 
21. 
22. 
