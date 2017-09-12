# Console

## Commandes natives de Symfony

## Commandes personnalisées

## La configuration

## Options et arguments

Comment peut-on définir un argument pouvant contenir plusieurs valeurs ?
> `InputArgument::IS_ARRAY`, et uniquement en dernier argument

Comment peut-on le rendre obligatoire ?
```php
<?php
$this
    //...
    ->addArgument(
        'names',
        InputArgument::IS_ARRAY | InputArgument::REQUIRED,
        'Who do you want to greet (separate multiple names with a space)?'
    );
```

## Entrée et sortie de la console

## Aides de console (« helpers »)

## Événements internes de la console
Quels sont les events dispatchés par une Application ?
- `Symfony\Component\Console\ConsoleEvents\COMMAND`
- `Symfony\Component\Console\ConsoleEvents\TERMINATE`
- `Symfony\Component\Console\ConsoleEvents\EXCEPTION`

## Niveaux de verbosité de la sortie
Quels sont les différents niveaux de verbosité de la console ?
- `VERBOSITY_QUIET` (`-q`)
- `VERBOSITY_NORMAL` (default)
- `VERBOSITY_VERBOSE` (`-v`)
- `VERBOSITY_VERY_VERBOSE` (`-vv`)
- `VERBOSITY_DEBUG` (`-vvv`)

