# Questions

## Part 1

### Auto escaping
Quel tag permet de changer localement le mode d'échappement ?
> `{% autoescape %} ... {% endautoescape %}`

Quels sont les types d'autoescaping ?
- html (par défaut)
- js
- url
- css
- html_attr

Quelle est la différence entre `escape` et `escape('html_attr')` ?
> `escape` est marqué `safe` pour le HTML, par défaut (tout comme `escape('html')`)  
> `escape('html_attr')` est marqué `safe` pour quelques entités HTML (<, >, & et ?)  

Quel est l'alias de la fonction `escape()` ?
> `e()`  


### Template inheritance
Quelle est la bonne pratique pour organiser l'héritage de template ?
> The three-template model:
- base.html.twig
- <section>/layout.html.twig
- <page>.html.twig


### Global variables
Quelles sont les 5 variables globales exposées par Symfony ?
- app.user (UserInterface|null)
- app.request (Request object)
- app.debug (true|false)
- app.session (Session object)
- app.environment (dev, prod, etc)


Comment définir des variables globales ?
```yaml
# app/config/config.yml
twig:
    globals:
        my_variable: 'its_value' # scalar
        my_variable: '%my_parameter%' # parameter
        my_variable: '@AppBundle\Service\MyService' # service
```

Comment récupérer le nom de la route en cours depuis Twig ?
> `{{ app.request.attributes._route }}`


### Filters and functions
Que fait le filtre `batch(size, fill)` ?
> Il découpe une liste en listes de `size` éléments, et remplis avec `fill` si il en manque pour terminer une liste.

Que fait la fonction `cycle(array, position)` ?
> Elle permet de boucler sur un tableau en sélectionnant l'index  
```twig
{% for year in start_year..end_year %}
    {{ cycle(['odd', 'even'], loop.index0) }}
{% endfor %}
```
Ça évite de faire un modulo.        

Comment afficher la valeur d'une constante PHP dans Twig ?
```twig
{{ constant('Namespace\\Classname::CONSTANT_NAME') }}
```

### Template includes
À quoi sert l'option `ignore_missing` set à `true` dans la fonction `include()` ?
> Evite d'avoir une `Twig_Loader_Error`. On a une chaine de caractère vide à la place.  

Que se passe-t-il si on passe un tableau de template à la fonction `include()` ?
```twig
{{ include(['page_detailed.html', 'page.html']) }}
```
> Le premier template existant sera render.  

Que fait l'option `sandboxed` set à `true` lors d'un `include` ?
> 

### Loops and conditions


## Part 2

### URLs generation


### Controller rendering


### Translations and pluralization


### String interpolation


### Assets management


### Debugging variables


```yaml
twig:
    strict_variables: "%kernel.debug%"
```


# Notes

Toujours utiliser le filtre `raw` en dernier, car les filtres sont exécutés de gauche à droite.
Pour la certif, il faudra connaitre tous les filtres et tous les tags Twig !

Pour un include, il vaut mieux utiliser la fonction `include()` plutôt que le tag.
> tag: {% include 'template.twig' with {'my_var': 'my_value'] only %}  
> fonction: {{ include('template.html', {foo: 'bar'}, with_context = false) }}  
> Une fonction "dit quelque chose"  
> Un tag "fait quelque chose", sert plutôt à filtrer une valeur.  

`==` => `equals()`
`===` est remplacé par `same as()`  

`{% trans_default_domain %}` n'est définie que pour le template en cours uniquement.  

{{ dump() } : affiche dans le template  
{% dump %} : dans la toolbar  

{{ path() }} : génére un chemin, ex: `/blog`  
{{ url() }} : génère une URL absolue, ex: `http://domain.com/blog`  

Supprimer les espaces :
- trim
- {% spaceless %} ... {% endspaceless %}
- {{- ... -}}
