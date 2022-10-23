# [Welcome to Cameroon](https://welcome-to-cameroon.herokuapp.com/about-us)

## À propos de Welcome to Cameroon

**Welcome to Cameroon** est un site internet qui donne l'heure de mon pays le Cameroun. C'est un projet Symfony de base.

## À propos de Code Ouvert

**Code Ouvert** est un blog de codage où je publie des artlcles liés à HTML, CSS, JavaScript, PHP… ainsi que des framework tels que symfony, laravel… Ici, je fournis également gratuitement les codes sources de chacune de mes vidéos YouTube et vous pouvez utiliser ces codes sans aucune restriction ni limitation. Je crois que mes vidéos ou codes aident à inspirer les concepteurs et développeurs Web et aident également à améliorer leurs compétences.

## À propos du développeur

Je m'appelle **Yassin El Kamal NGUESSU** et je suis un **développeur backend** d'abord autodidacte puis diplomé d'une licence en genie informatique. J'ai également travaillé sur de nombreux **projets front-end** dans le passé et j'y travaille toujours. Internet et le développement Web sont ma passion et je crois qu'il est important d'aider les gens avec mes capacités et mes connaissances. J'apprends ces choses depuis 2016 et j'ai l'impression que l'apprentissage fait désormais partie de ma vie.

## Site internet

[Lien du site internet **Welcome to Cameroon**](https://welcome-to-cameroon.herokuapp.com/about-us)

## Prérequis

- PHP 7.2
- Composer
- MySQL 8.0
- Symfony CLI

Vous pouvez vérifier la pré-requis (sauf Docker et Docker-compose) avec la commande suivante (de la CLI Symfony):

```bash
symfony book:check-requirements
symfony check:requirements
```

## affiche des informations sur le projet

Lorsque vous travaillez pour la première fois sur une application Symfony existante, il peut être utile d'exécuter cette commande qui affiche des informations sur le projet :

```bash
php bin/console about
```

## Lancer l'environnement de développement

```bash
symfony serve -d
symfony open:local
```

## Purger le cache HTTP pour les tests

```bash
symfony console cache:clear
```

Vous pouvez supprimer manuellement tout le cache HTTP en supprimant le répertoire var/cache/dev/http_cache/ :

```bash
rm -rf var/cache/dev/http_cache/
```

## Ressources

- [Code Ouvert (Site internet)](https://code-ouvert.gitlab.io/code-ouvert/)

- [Code Ouvert (Youtube)](https://code-ouvert.gitlab.io/code-ouvert/)

- [Symfony.com](https://symfony.com/doc/6.0/the-fast-track/fr/index.html)
