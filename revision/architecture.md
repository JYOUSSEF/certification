# Architecture

Symfony Standard Edition
----------
Combien y a-t-il de bundles ?
> 12

Symfony:
- DebugBundle (in dev/test env) - Adds Debug and VarDumper component integration
- FrameworkBundle - The core Symfony framework bundle
- SecurityBundle - Adds security by integrating Symfony's security component
- TwigBundle - Adds support for the Twig templating engine

symfony/symfony:
- AsseticBundle
- MonologBundle - Adds support for Monolog, a logging library
- SwiftmailerBundle - Adds support for Swiftmailer, a library for sending emails
- WebProfilerBundle (in dev/test env) - Adds profiling functionality and the web debug toolbar

Sensio:
- SensioDistributionBundle (in dev/test env) - Adds functionality for configuring and working with Symfony distributions
- SensioFrameworkExtraBundle - Adds several enhancements, including template and routing annotation capability
- SensioGeneratorBundle (in dev/test env) - Adds code generation capabilities

Doctrine:
- DoctrineBundle - Adds support for the Doctrine ORM

License
----------
MIT

Components
----------
Combien y a-t-il de composants dans Symfony ?
> 31

- Asset
- BrowserKit
- ClassLoader
- Config
- Console
- CssSelector
- Debug
- DependencyInjection
- DomCrawler
- EventDispatcher
- ExpressionLanguage
- Filesystem
- Finder
- Form
- HttpFoundation
- HttpKernel
- Intl
- Ldap
- OptionsResolver
- Process
- PropertyAccess
- PropertyInfo
- Routing
- Security
- Serializer
- Stopwatch
- Templating
- Translation
- Validator
- VarDumper
- Yaml

Bundles
----------
Quels sont les 4 bundles qui ne sont pas chargés en environnement de prod ?
- WebProfilerBundle
- SensioDistributionBundle
- SensioGeneratorBundle 
- DebugBundle

À quoi sert SensioDistributionBundle ?
> Composer Hooks:
- Update the bootstrap.php.cache file (and clears the cache)
- Install the assets under the web root directory
- Update the requirements file

> Security:
-  Includes the SensioLabs Security Checker (`./bin/console security:check`)

À quoi sert SensioGeneratorBundle ?
> Il étend la liste des commandes de Symfony en ajoutant celles générant:
- un bundle
- une commande
- un contrôleur
- de contrôleur de CRUD à partir d'un schéma Doctrine 2.
- une entité Doctrine
- une classe de formulaire

Que faut-il faire pour mettre en place l'héritage d'un bundle dans un autre bundle ?
- Définir la méthode getParent() dans notre Bundle
- Créer un fichier avec le même nom, dans notre bundle

Où doit-on placer le fichier LICENSE ?
> ./LICENSE

Bundle distribué, que doit-on faire ?
- class AcmeDemoBundle.php
- README.md
- LICENSE
- Resources/doc/index.rst

Quelles sont les 6 annotations définies par SensioFrameworkExtraBundle ?
- @Route and @Method
- @ParamConverter
- @Template
- @Cache
- @Security

Bridges
----------
Quels sont les 5 bridges vers des librairies externes inclus dans Symfony ?
- Doctrine
- Monolog
- PhpUnit
- ProxyManager
- Twig

Configuration
----------
Quels sont les formats de configuration supportés par Symfony par défaut ?
> xml, yml, php, ini
> Annotation can only be used for Controllers this is provided by SensioExtraFrameworkBundle https://symfony.com/doc/current/bundles/SensioFrameworkExtraBundle/index.html#annotations-for-controllers

Parmi ces formats, lequel est le plus performant ?
> aucun, ils sont tous compilés en PHP avant l'exécution de l'application

Code organization
----------

Request handling
----------
Quels sont les events dispatchés ?
- KERNEL REQUEST
- KERNEL CONTROLLER
- KERNEL VIEW (si kernel controller renvoie une response, pas appelé)
- KERNEL EXCEPTION
- KERNEL TERMINATE
http://symfony.com/doc/current/components/http_kernel/introduction.html#component-http-kernel-event-table

Exception handling
----------
Quel événement HttpKernel dispatch-t-il lorsqu'une exception est levée ?
> kernel.exception

Si un listener appel `setResponse`  sur le `GetResponseForExceptionEvent`, que se passe-t-il ?
> Propagation will be stopped and the response will be sent to the client

Event dispatcher and kernel events
----------
> Kernel Events ?

- kernel.request (GetResponseEvent)  
- kernel.controller (FilterControllerEvent)  
- kernel.view (GetResponseForControllerResultEvent)  
- kernel.response (FilterResponseEvent)  
- kernel.finish_request (FinishRequestEvent)  
- kernel.terminate (PostResponseEvent)  
- kernel.exception (GetResponseForExceptionEvent)  

http://symfony.com/doc/current/reference/events.html#kernel-request

Official best practices
----------

Release management
----------
Quelle sera la prochaine LTS ?
> 3.4

Quand sera-t-elle release ?
> 11/2017

Quelle est la durée de maintenance des LTS ?
> 36 mois pour les bug fixes et 4 ans pour les security issue fixes

Quelle est la durée de maintenance des version mineurs ?
> 8 mois pour les bug fixes et 14 mois (+6) pour les security issue fixes

Quelle est la durée d'un feature freeze ?
> 2 mois

Backward compatibility promise
----------
Seules les version majeurs peuvent introduire des BC break.  
`@internal` documented code peuvent break  

Deprecations best practices
----------
Quel package Composer permet de lister toutes les dépéciations en ligne de commande ?
> `symfony/phpunit-bridge`


==============================

1. 3
2. 2 -> 1
3. 2 -> 1
4. 2 & 3 -> +1
5. 2 -> all
6. 1 -> +2
7. 1
8. 4
9. 2
10. 1 -> 3
11. 3
12. 2 & 4
13. toutes
14. 1 & 2 & 4 -> 1 & 4
15. 2 -> 1 (cf UNIX)
16. 2
17. 4
18. 4
19. 2
20. ? -> 2
21. 4
