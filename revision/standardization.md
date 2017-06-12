# Standardization

## Naming conventions
Quelle convention de nommage doit-on utiliser pour nommer les variables, les functions et nom de méthode,les arguments ?  
> camelCase

## Coding standards
Quelles PSR Symfony suit ?
> PSR-0 (autoloading standard : namespace)  
> PSR-1 (basic coding standard : files, namespaces and class names, constants, properties and methods)  
> PSR-2 (Coding Style Guide : PSR-1 extended)  
> PSR-4 (improved autoloading)  

## Third-party libraries integration
Comment installer un bundle tierce ?
> Ajouter la dépendance dans composer.json  
> Activer le bundle dans AppKernel (méthode registerBundles)  
> Configurer le bundle (Read the doc)  

Quels fichiers sont obligatoires pour créer un bundle tierce ?
> xxxBundle.php  
> README.md (ou .rst)  
> LICENSE  
> Resouces/doc/index.rst  

## Composer packages handling
Que veut dire ~2.3 (tildé) ?
> \>=2.3 et <2.4

## Development best practices
Où doit-on définir les options relatives au comportement d'une application ?
> dans le fichier app/config/config.yml

## Framework overloading
Que doit-on faire si on a besoin de changer le dossier web par défaut ?
> Renommer le dossier  
> Si déplacement, ne pas oublier de mettre à jour le path des deux require_once dans app.php et app_dev.php  
> Depuis 2.1 et composer, il faut changer l'option 'extra.symfony-web-dir' dans composer.json  

## Semantic versioning
À quels mois sortent les versions mineurs de Symfony ?
> en mai et novembre (tous les 6 mois)

À quelle fréquence sortent les version majeurs de Symfony ?
> tous les deux ans

Quelle est la prochaine LTS de la v3 ?
> 3.4 (qui sortira en même temps que la 4.0)

Quelle est la durée du support des LTS ?
> 36 mois (2 ans)

=========

getCacheDir()  
getLogDir()  

=================
