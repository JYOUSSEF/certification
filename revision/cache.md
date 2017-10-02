# Cache

Comment activer le cache HTTP ?
> wrap the default AppKernel with the AppCache one:
 ```php
$kernel = new AppCache($kernel);
```

Quelle méthode de HttpCache permet de valider/debugger la stratégie de cache ?
> getLog()
```php
error_log($kernel->getLog());
```

Comment peut-on modifier des options du cache ?
> AppCache::getOptions()

Quelles sont les méthodes HTTP cachables ?
> GET & HEAD

Comment activer la surcharge de méthode ?
> framework.http_method_override: true
> Request::enableHttpMethodParameterOverride();

Quel genre de Response est considérée comme NON cachable ?
> != GET or HEAD
> Status code différent de 200, 203, 300, 301, 302, 404, 410
> Cache-Control = no-store or private
> Sans Header Last-Modified ou ETag
> Avec un TTL == 0
c.f Response::isCacheable()  

Que fait Response::setNotModified() ?
> Set le status code à 304
> Set à null le content de la Response

## Types de cache (clients, proxies et reverse proxies)


## Expiration (Expires, Cache-Control)
Cache-Control
    max-age : indique la quantité de temps maximale où la représentation sera considérée fraîche  
    s-max-age : similaire à max-age, sauf qu'elle ne s'applique qu'aux caches partagés (par exemple, un mandataire)  
    public : marque les réponses authentifiées comme cachables  
    no-cache : force à chaque fois les caches à soumettre la requête au serveur original  
    must-revalidate : en indiquant cette en-tête, vous dites au cache que vous voulez un respect strict de vos règles  
Expires 
    ex : Fri, 30 Oct 1998 14:19:41 GMT  
    N'est plus top utilisé car limité  

## Validation (ETag, Last-Modified)
Last-Modified 
    header dans la Request = If-Modified-Since  
ETag  
    header dans la Request = If-None-Match  
-> 304 Not Modified (sans générer le body)  

## Cache côté client


## Cache côté serveur


## Edge Side Includes
Comment activer ESI ?
> framework.esi.enable: true dans le fichier config.yml

Une ESI Request est une Master ou un Sub Request ?
> Master Request


---

> gateway, surrogate, reverse proxy cahce

Expiration:
Pas de requête HTTP envoyée.
- Expires
- Cache-Control
    - max-age
    - s-maxage
    - private / public

Validation:
200 OK ou 304 Not Modified
    - ETag (If-None-Match)
    - Last-Modified (If-Modified-Since)
