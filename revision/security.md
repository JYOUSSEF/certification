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

# Questions

1: 2
2: 3
3: 2
4: 3 & 4
5: 3 -> 1
6: 2 & 4
7: ? -> 4
8: 4
9: 1 & 3
10: ? -> 2 (hash_algos())
11: 1
12: 1 -> 2
13: 1
14: 4 -> 2
15: 1 -> 4
16: 2
17: ? -> 1 & 3
