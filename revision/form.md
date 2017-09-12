# Questions

## Part 1

### Forms creation
Comment créer un formulaire depuis un controller, sans FormType ?
```php
<?php
$form = $this->createFormBuilder()
    ->add('task', TextType::class)
    ->getForm()
;
```

Et avec un FormType ?
```php
<?php
$this->createForm(new MyFormType());
```

Quel service est utilisé pour créer un form ou un formBuilder ?
> form.factory

### Forms handling
Dans un controller, comment gérer la soumission d'un Form ?
> `$form->handleRequest($request)`  

À quoi sert le 2ème argument de la méthod `submit($submittedData, $clearMissing = true)` d'un Form ?
> `$clearMissing` est à `true` par défault.   
> En le passant à `false`, Si il y a des valeurs manquantes, cela évite qu'elles soient set à `null`  
> Ex: lors d'un PATCH  

### Form types
Que peut-on faire en utilisant le paramètre **prototype_name** du formType `Symfony\Component\Form\Extension\Core\Type\CollectionType` ?
> When one has a prototype embedding other prototypes, it allows to replace each one with a specific value.   
If you have several collections in your form, or worse, nested collections you may want to change the placeholder so that unrelated placeholders are not replaced with the same value.  

### Forms rendering with Twig
Que fait `{{ from_rest(form) }}` ?
> ça render tous les champs pas encore render  

Que fait `{{ form_end(form) }}` ?
> ça render tous les champs pas encore render et ça affiche la balise de fermeture du formulaire  

Comment faire pour ne pas render tous les champs pas encore render avec `form_end` ?
> `{{ form_end(form, {'render_rest': false}) }}`  

### Forms theming


## Part 2

### CSRF protection

### Handling file upload

### Built-in form types

### Data transformers
Comment ajouter un DataTransformer au champ `tag` ?
```php
<?php
$builder->add('tags', TextType::class);
$builder->get('tags')
        ->addModelTransformer(...);
````
ou 
```php
<?php
$builder->add(
    $builder
        ->create('tags', TextType::class)
        ->addModelTransformer(...)
);
```

### Form events
Quels sont les events déclanchés par la classe Form ?
- Pre propulating the form
    - `FormEvent::PRE_SET_DATA`
    - `FormEvent::POST_SET_DATA`
- Submitting the form
    - `FormEvent::PRE_SUBMIT`
    - `FormEvent::SUBMIT`
    - `FormEvent::POST_SUBMIT`

Comment désactiver la validation d'un formulaire ?
> Il faut ajouter un `addEventListener` sur le builder du form, pour `POST_SUBMIT` et appeler `$event-­‐>stopPropagation()`.  
> L'event listener ajouté doit avoir une priorité supérieur au ` ValidationListener`.

(à vérifier) Pour ajouter/supprimer un champ de formulaire dynamiquement, quel event doit-on écouter ?
> `FormEvent::PRE_SET_DATA`  

À quel genre de données a-t-on accès lors du `PRE_SET_DATA` ?
> Model data

À quel genre de données a-t-on accès lors du `POST_SET_DATA` ?
> Model data

À quel genre de données a-t-on accès lors du `PRE_SUBMIT` ?
> Request data

À quel genre de données a-t-on accès lors du `SUBMIT` ?
> Normalized data

À quel genre de données a-t-on accès lors du `POST_SUBMIT` ?
> View data

### Form type extensions


# Notes:
- Connaitre tous les formType de Symfony  
- Connaitre toures les contraintes de validation de Symfony  
- form_start
- form_end
- form_errors
- form_row
    - label
    - errors
    - widget

-> faire de l'héritage => getParent
-> paramètre 'invalid_message' d'un formType
-> différence isSubmitted et isValid
