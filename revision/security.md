# Security

##Authentication

Quelle interface faut-il implémenter pour créer un custom Password Encoder ?
> implements `PasswordEncoderInterface`
> implements `public function encodePassword($raw, $salt)`
> implements `public function isPasswordValid($encoded, $raw, $salt)`

Quel tag doit-on utiliser pour activer la l'authentification par `remember me` ?
> `security.remember_me_aware`

##Authorization

##Configuration
Dans la configuration d'un firewall, quel paramètre permet d'utiliser un referer lors du login ?
> use_referer: true

Valeur par défaut ?
> false

Est-ce qu'on peut définir un referer par défaut ?
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

Est-ce qu'on peut être authentifié sur plusieurs Firewalls en même temps ?
> Oui, grâce aux `context` :
```yaml
security:
    firewalls:
        somename:
            context: my_context
        someothername:
            context: my_context
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
Implémenter
> AbsctractGuardAUthenticator
> start()
> getCredentials()
> getUser()
> onAuthenticationFailure() & onAuthenticationSuccess()
```yaml
    guard:
        authenticators:
            - app.guard.jwt_authenticator
```

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

```yaml
security:
    access_decision_manager:
        strategy:             affirmative # One of affirmative, consensus, unanimous
        allow_if_all_abstain:  false
        allow_if_equal_granted_denied:  true
```

## Questions de session de révision

Quels sont les Events liés à l'authentification ? 
> INTERACTIVE_LOGIN : on vérifie à chaque fois les credentials  
> SWITCH_USER  
> AUTHENTICATION_SUCCESS  
> AUTHENTICATION_FAILURE  

Que se passe-t-il quand l'option `pattern` n'est pas présente ?
> Toutes les routes sont catchées

Comment prendre l'identité d'un user ?
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

Comment tester le rôle d'un utilisateur dans un Voter ?
> injecter l'access decisionManager

```php
// ROLE_SUPER_ADMIN can do anything! The power!
if ($this->decisionManager->decide($token, array('ROLE_SUPER_ADMIN'))) {
    return true;
}
```

Comment créer un voter ?
> extends `Vote`
> `voteOnAttribute`
> `supports`
> tag `security.voter`

Forcer HTTPS :
```yaml
security:

    access_control:
        - { path: ^/secure, roles: ROLE_ADMIN, requires_channel: https }
```
ou 

```yaml
secure:
    path:     /secure
    defaults: { _controller: AppBundle:Main:secure }
    schemes:  [https]
```

Quels sont les listeners disponible pour un firewall ?
> Guard
> HttpBasic
> HttpBasicLDAP
> HttpDigest
> RemoteUser
> x509
...  

Comment spécifier un encodeur différent en fonction de l'entity User ?  

Comment configurer deux façons de se loger ?
```yaml
form_login:
    provider: ...
```

Définition d'un chain provider ?
```yaml
security:
    providers:
        chain_provider:
            chain:
                providers: [in_memory, user_db]
        in_memory:
            memory:
                users:
                    foo: { password: test }
        user_db:
            entity: { class: AppBundle\Entity\User, property: username }
```
