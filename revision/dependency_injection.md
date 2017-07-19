## Service container

## Built-in services

Comment faire pour avoir une nouvelle instance d'un service ?
```yaml
share: false
```

## Configuration parameters
Dans la configuration d'un service, à qui sert l'option `lazy` ?
> Quand on injecte ce service dans un autre, une classe virtuelle de proxy avec la même signature sera injecté.  
> Le service définit en tant que `lazy` ne sera instancié que lorsqu'il y aura un interaction avec celui-ci, par exemple en appellant une de ses méthodes.  
```yaml
services:
    AppBundle\Twig\AppExtension:
        lazy:  true
```

Comment peut-on définir une dépendance manquante à `null` en YAML ?
> On ne peut pas, uniquement en PHP ou XML
 En XML, on utilise la propriété `on-invalid` :
```xml
    <services>
        <service id="AppBundle\Newsletter\NewsletterManager">
            <argument type="service" id="logger" on-invalid="null" />
        </service>
    </services>
```

Comment peut-on ignorer une dépendance manquante en YAML ?
> Avec `?`

## Services registration

## Tags

## Semantic configuration

## Factories

## Compiler passes

## Services autowiring
