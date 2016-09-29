# Security

##Authentication

##Authorization

##Configuration
Lors du login, quel paramètre permet d'utiliser un referer ?
> use_referer: true

Valeur par défaut ?
> false

Est-ce qu'on peut définir un réferer par défaut ?
> Non

##Providers

##Firewalls
Comment peut-on activer un firewall uniquement pour certaines méthodes HTTP ?
>
```yaml
    security:
        firewalls:
            secured_area:
                methods: [GET, POST]
```

##Users
Quelles sont les cinq méthodes de `UserInterface` à implémenter ?
> getRoles
> eraseCredentials
> getPassword
> getSalt
> getUsername

##Passwords encoders
Quelle commande Symfony permet d'encoder à la volée un mot de passe ?
> bin/console security:encode-password

##Roles

##Access Control Rules

##Authentication with Guard

##Voters and Voting Strategy
Quelle est la signature de la méthode `vote` de l'interface `VoterInterface` ?
>
```php
    /**
     * Returns the vote for the given parameters.
     *
     * This method must return one of the following constants:
     * ACCESS_GRANTED, ACCESS_DENIED, or ACCESS_ABSTAIN.
     *
     * @param TokenInterface $token      A TokenInterface instance
     * @param mixed          $subject    The subject to secure
     * @param array          $attributes An array of attributes associated with the method being invoked
     *
     * @return int either ACCESS_GRANTED, ACCESS_ABSTAIN, or ACCESS_DENIED
     */
    public function vote(TokenInterface $token, $subject, array $attributes);
```
> `ACCESS_GRANTED` 1  
> `ACCESS_ABSTAIN` 0  
> `ACCESS_DENIED` -1  

Stratégies:
> affirmative (par défaut, au moins 1)  
> consensus (majorité)  
> unanimous (tous)  

## Questions de session de révision

Quels sont les Events liés à l'authentification ? 
> INTERACTIVE_LOGIN : on vérifie à chaque fois les credentials  
> SWITCH_USER  
> AUTHENTICATION_SUCCESS  
> AUTHENTICATION_FAILURE  

Que se passe-t-il quand l'option `pattern` n'est pas présente ?
> Toutes les routes sont catchées

Comment prendre l'idendité d'un user ?
> Rôle `ALLOWED_TO_SWITCH`
```yaml
    switch_user:
        provider:  ~
        parameter: _switch_user
        role:      ROLE_ALLOWED_TO_SWITCH
```

To switch back to the original user, use the special `_exit` username

Roles hierarchy : c'est un service
```yaml
    role_hierarchy:
        ROLE_ADMIN:       ROLE_USER
        ROLE_SUPER_ADMIN: [ROLE_ADMIN, ROLE_ALLOWED_TO_SWITCH]
```

Par défaut, il n'y a pas d'encoder
> No encoder has been configured for account Symfony\Component\Security\Core\User\User".
