## PHP 5.3 to PHP 5.6 API
### 5.3
- support des namespaces
- support natif des Closures

### 5.4
- Traits
- Short array syntax
- Support de function()[0]
- Built-in web server (`php -S`)

### 5.5
- Generators
- try/catch `finally` ajouté
- Résolution des noms de classes avec `::class`
- Ajout de l'extension OPCache

### 5.6
 ...

## Object Oriented Programming

$user = (new ReflectionClass(User::class))->newInstance('John Smith');    
$user = new User('John Smith');  
$user = (new ReflectionClass('User'))->newInstanceArgs(['John Smith']);  

## Namespaces
- On peut définir plusieurs namespaces dans le même fichier PHP.
- `__NAMESPACE`

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
- 

## Exception and error handling (slide 40)
- error_reporting(-1): turn off error reporting
- error_reporting(-1): report all PHP errors
- error_reporting():
    - E_ALL
    - E_ERROR
    - E_NOTICE
    - E_WARNING
## Traits
## PHP extensions
## SPL
## Web security (XSS, CSRF, etc.)
