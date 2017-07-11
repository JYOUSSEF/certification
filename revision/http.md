# HTTP
## Interactions Client / Server

## Codes de statut

## Requête HTTP

## Réponse HTTP

## Méthodes HTTP

## Cookies

## Cache HTTP

## Négociation de contenu

## Détection de la langue du client



##  Questions

### Interactions Client / Server
Quel header pour savoir si une resource a été modifiée ?
> `If-Not-Modified`

### Codes de statut
Quelle classe contient une lise de constantes des codes de status ?
> `Symfony\Component\HttpFoundation\Response`

Quel est le code de status pour `Gone` ?
> 410, différent de 404 dans le sens où il indique à l'utilisateur que c'est de façon intentionnelle que cette ressource n'est plus accessible.

Quels sont les codes de status pour les redirection ?
- 301 : `HTTP_MOVED_PERMANENTLY` (For historical reasons, a user agent MAY change the request method from POST to GET for the subsequent request)  
- 302 : `HTTP_FOUND ` (trouvé mais temporairement, For historical reasons, a user agent MAY change the request method from POST to GET for the subsequent request)  
- 307 : `HTTP_TEMPORARY_REDIRECT ` (This status code is similar to 302 Found, except that it does not allow changing the request method from POST to GET)  
- 308 : `HTTP_PERMANENTLY_REDIRECT` (This does not allow changing the request method from POST to GET)  

### Requête HTTP
Première ligne d'un requête HTTP ?
> GET URI Protocol

Comment est formée une requête HTTP ?
> Première ligne, Headers, CRLF, Body (à vérifier)

Quelle méthode statique permet de créer un objet `Request` ?
> `Request::createFromGlobals()`

Comment accéder aux valeurs de `$_SERVER` avec un objet `Request` ?
> `$request->server`

Quel est son type ?
> `\Symfony\Component\HttpFoundation\ServerBag`

Quelles informations de la requête d'un client peut-on retrouver ?
- `request`: equivalent of $_POST;  
- `query`: equivalent of $_GET ($request->query->get('name'));  
- `cookies`: equivalent of $_COOKIE;  
- `attributes`: no equivalent - used by your app to store other data (see below);  
- `files`: equivalent of $_FILES;  
- `server`: equivalent of $_SERVER;  
- `headers`: mostly equivalent to a subset of $_SERVER ($request->headers->get('User-Agent')).  

Différence entre HEAD et OPTIONS ?
> HEAD récupère les headers d'une ressource, OPTIONS check si on a le droit de faire telle ou telle requête (c.f call Ajax).

Comment récupérer la valeur de la query string `foo[bar]=baz` ?
> `$request->query->get('foo')['bar'];`

Quelle méthode permet de récupérer la liste des Content-Type accepté par le navigateur ?
> `$request->getAcceptableContentTypes()`

### Réponse HTTP
Quelle méthode permet de s'assurer qu'une `Response` respecte bien la spécification HTTP ?
> `prepare(Request $request)`  
Elle respecte la RFC 2616  
Concrêtement, elle regarde le status code de la réponse et la change en conséquence. 







### Méthodes HTTP
Quelles méthodes HTTP sont indépotentes ?

### Cookies
Comment setter un cokkie ?
> $response->headers->setCookie(new Cookie('foo', 'bar'));

### Cache HTTP

### Négociation de contenu

### Détection de la langue du client
