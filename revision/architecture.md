# Architecture

## Symfony Standard Edition
Combien y a-t-il de bundles ?
> 11 (pas de DebugBundle en avant 2.6)

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

## Configuration
Quels sont les formats de configuration supportés par Symfony par défaut ?  
> xml, yml, php, ini et annotation  

Parmi ces formats, lequel est le plus performant ?
>aucun, ils sont tous compilés en PHP avant l'exécution de l'application

## Code organization

## Request handling
