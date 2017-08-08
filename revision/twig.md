# Questions

## Part 1

### Auto escaping


### Template inheritance


### Global variables


### Filters and functions


### Template includes


### Loops and conditions


## Part 2

### URLs generation


### Controller rendering


### Translations and pluralization


### String interpolation


### Assets management


### Debugging variables




Comment afficher la valeur d'une constante PHP dans Twig ?
```twig
{{ constant('Namespace\\Classname::CONSTANT_NAME') }}
```
Comment récupérer le nom de la route en cours depuis Twig ?
> `{{ app.request.attributes._route }}`

Quelle est la différence entre `escape` et `espace('html_attr')` ?


Comment définir des variables globales ?
```yaml
twig:
    globals:
        my_variable: 'its_value' # scalar
        my_variable: '%my_parameter%' # parameter
        my_variable: '@AppBundle\Service\MyService' # service
```

# Notes

Toujours utiliser le filtre `raw` en dernier, car les filtres sont exécutés de gauche à droite.
Pour la certif, il faudra connaitre tous les filtres et tous les tags Twig !

Pour un include, il vaut mieux utiliser la fonction `include()` plutôt que le tag.
> tag: {% include 'template.twig' with {'my_var': 'my_value'] only %}  
> fonction: {{ include('template.html', {foo: 'bar'}, with_context = false) }}   

Une fonction renvoie quelquechose, un tag sert plutôt à filtrer une valeur.  

`==` => `equals()`
`===` est remplacé par `sameas()`  

{% trans_default_domain %} n'est définie que pour le template en cours uniquement.  

`{{ absolute_url(asset('images/logo.png')) }}` => c'est une fonction et pas un filtre !  

{{ dump() } : affiche dans le template  
{% dump %} : dans la toolbar  

