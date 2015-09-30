# Architecture

## Symfony Standard Edition
Combien y a-t-il de bundles ?
> 11 (pas de DebugBundle avant 2.6)

## Components
Combien y a-t-il de composants dans Symfony ?
> 27

## Bundles
Quels sont les 3 bundles qui ne sont pas chargés en environnement de prod ?
> WebProfilerBundle, SensioDistributionBundle et SensioGeneratorBundle

À quoi sert SensioDistributionBundle ?
> Adds functionality for configuring and working with Symfony distributions

À quoi sert SensioGeneratorBundle ?
> Il étend la liste des commandes de Symfony en ajoutant celles générant un bundle, des classes de formulaires, ou des controller de CRUD à partir d'un schéma Doctrine 2.

Que faut-il faire pour mettre en place l'héritage d'un bundle dans un autre bundle ?
> Définir la méthode getParent()
> Créer un fichier avec le même nom, dans notre bundle

Où doit-on placer le fichier LICENSE ?
> Resources/meta/LICENSE

Bundle distribué, que doit-on faire ?
> LICENSE
> Resources/doc/index.rst

## Configuration
Quels sont les formats de configuration supportés par Symfony par défaut ?  
> xml, yml, php, ini et annotation  

Parmi ces formats, lequel est le plus performant ?
>aucun, ils sont tous compilés en PHP avant l'exécution de l'application

## Code organization

## Request handling
Quels sont les events dispatchés ?
> KERNEL REQUEST
> KERNEL CONTROLLER
> KERNEL VIEW (si kernel controller renvoie une response, pas appelé)
> KERNEL EXCEPTION
> KERNEL TERMINATE
http://symfony.com/doc/current/components/http_kernel/introduction.html#component-http-kernel-event-table

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
