## PHP object validation
À partir de quelle spécification est basé le composant Validator de Symfony ?
> JSR303 Bean Validation

Quels formats sont supportés pour créer des contraintes de validation ?
> PHP, Yaml, annotations et XML

Quels types de propriétés et de méthodes peuvent être validées ?
> public, protected & private properties and "getter" methods (get, is, has)

## Built-in validation constraints
Quel type d'objet retourne la méthode `validate` du service `validator` ?
> `ConstraintViolationList` qui contient des objets `ConstraintViolation`

Comment activer, dans la configuration, le composant Validator ?
```yaml
# app/config/config.yml
framework:
    validation: 
        enabled: true
        enable_annotations: true
```

Contraintes basiques ([doc](https://symfony.com/doc/current/validation.html#supported-constraints)):
- NotBlank
- Blank
- NotNull
- IsNull
- IsTrue
- IsFalse
- Type

Comment peut-on activer la validation sur un formulaire ?
```php
<?php
Forms::createFormFactoryBuilder()
    ->addExtension(new ValidatorExtension(Validation::createValidator()))
    ->getFormFactory()
;
```

Peut-on créer nos propres contraintes de validation ?
> Oui

Comment créer un custom validator ?
> Créer la classe de Constraint qui étend `Symfony\Component\Validator\Constraint`  
> Utiliser `@Annotation` sur la classe  
> Créer la classe du validator, qui se termine par `Validator`. Ex : "MyConstraintValidator"  
> Y ajouter la méthode `validate()` (dans cette méthod on ajoute des violations au `context` du  validator): 
```php
$this->context->buildViolation()->addViolation();
```

Comment l'ajouter en tant que service ?
> avec le tag : `validator.constraint_validator`

## Validation scopes


## Validation groups


## Group sequence


## Custom callback validators


## Violations builder


