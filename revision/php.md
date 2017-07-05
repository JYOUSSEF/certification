## PHP 5.3 to PHP 5.6 API
### 5.3
- support des namespaces
- support natif des Closures

### 5.4
- Traits
- Short array syntax
- Support de function()[0]
- Accès aux attributs d'un objet dès l'instanciation, exemple: (new Foo)->bar().
- Built-in web server (`php -S`)

### 5.5
- Generators
- try/catch `finally` ajouté
- Résolution des noms de classes avec `::class`
- Ajout de l'extension OPCache
- DateTimeImmutable

### 5.6
- opération sur les constantes
- arguments variadic

## Object Oriented Programming
...

## Namespaces
- On peut définir plusieurs namespaces dans le même fichier PHP.
- `__NAMESPACE__`

## Interfaces
- Définie quelles méthodes (toutes) une classe doit implémenter
- Toutes les méthodes doivent être `public`
- Des interfaces peuvent être étendues (avec `extends`)
- Les constantes d'interface sont héritées mais ne peuvent pas être overridée
- Il existe des interfaces prédéfinies :
    - Traversable (la classe peut-elle être parcourue via un `foreach` ?)
    - Iterator ()
    - IteratorAggregate (pour créer un itérateur externe)
    - ArrayAccess (pour accéder à des objets comme si c'étaient des arrays)
    - Serializable (sérializer/désérializer)

## Anonymous functions and closures
Fonctions anonymes surtout utilisées en tant que valeur de retour de callback.  

## Abstract classes
- Ne peuvent pas être instanciées
- Les méthodes abstraites ne définissent que la signature, pas l'implémentation
- Toutes les méthodes abstraites héritées d'une classe abstraites 
doivent être redéfinie par la classe fille avec la même visibilité ou une moins restrainte.


## Exception and error handling (slide 40)
- error_reporting(-1): turn off error reporting
- error_reporting(-1): report all PHP errors
- error_reporting():
    - E_ALL
    - E_ERROR
    - E_NOTICE
    - E_WARNING

Les exceptions prédéfinies :
> Exception (classe de base pour toutes les exceptions)  
> ErrorException (prévue pour être utilisée avec `set_error_handler()`)  

Il y a aussi les [exceptions SPL](http://us1.php.net/manual/fr/spl.exceptions.php) :  
- BadFunctionCallException
- BadMethodCallException
- DomainException
- InvalidArgumentException
- LengthException
- LogicException
- OutOfBoundsException
- OutOfRangeException
- OverflowException
- RangeException
- RuntimeException
- UnderflowException
- UnexpectedValueException

## Traits
Les traits servent à pallier au manque d'héritage multiple de PHP.

## PHP extensions


## SPL (Standard PHP Library)
- LimitIterator, InfiniteIterator, etc (pour boucler sur des objets)
- Countable
- SplObserver & SplSubject (implémentation native du pattern Observer)
- BadMethodCallException, UnexpectedValueException, etc
- class_implements, class_parents, class_uses (pour vérifier les classes injectées dans notre code)

## Web security (XSS, CSRF, etc.)
- XSS : htmlspecialchars, strip_tags
- Cross-Site Request Forgery : se servir de l'identité d'un utilisateur en envoyant à son navigateur une requète HTTP


# Questions
À quelle version `goto` a été ajouté ?
> 5.3.0

Comment peut-on créer une nouvelle instance de la classe en utilisant des arguments fournis avec la Reflection ?
```php
$myClass = (new ReflectionClass(MyClass::class))->newInstance('my arg');  
$myClass = (new ReflectionClass(MyClass::class))->newInstanceArgs(['my arg']);  
$myClass = (new ReflectionClass(MyClass::class))->newInstanceWithoutConstructor;
```

Est-ce qu'on peut utiliser `list()` dans une boucle `foreach` ?
> Oui, depuis 5.5 
```php
<?php
$array = [
   [1, 2],
   [3, 4],
];

foreach ($array as list($a, $b)) {
   echo "A: $a; B: $b\n";
}
```

Est-ce qu'on peut imbriquer des namespaces ?
> Non
```php
<?php
namespace mes\trucs {
    namespace nested {
        class foo {}
    }
}
```

Les fonctions anonymes sont disponibles depuis quelle version ?
> 5.3

Est-ce qu'on peut appeler une fonction anonyme de façon récursive ?
> Oui, en passant par référence dans le `use` la fonction anonyme elle-même
```php
<?php 
$recursive = function () use (&$recursive){ 
    // The function is now available as $recursive 
};
```

Quelles sont les exceptions prédéfinies ?
> Exception  
> ErrorException 

À quoi sert `ErrorException` ?
> Elle été prévue pour être utilisée avec `set_error_handler()` et donc définir un gestionnaire d'exception custom


Est-ce qu'on peut imbriquer des exceptions ?
> Oui, depuis 5.3 :
```php
try {} catch (Exception $e) {
    throw new BadFunctionCallException($message, $code, $exceptionPrécédente);
}
```
