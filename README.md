# Carnet d'entrées

Ce projet est une simple API REST qui permet de gérer un carnet d'entrées. Il est écrit en PHP et stocke les données dans un fichier JSON.

## Fonctionnalités

- Ajouter une nouvelle entrée avec un titre, une histoire et une date.
- Récupérer toutes les entrées existantes.

## Installation

1. Assurez-vous qu'un serveur web est installé et configuré sur votre machine.
2. Clonez le projet dans le dossier httpdocs de votre serveur web.
3. Utilisez http://localhost:8888/ApiRest/index.php/carnet en GET et en POST.

## Utilisation

### Ajouter une nouvelle entrée

Pour ajouter une nouvelle entrée, envoyez une requête POST à l'URL `/carnet` avec un corps JSON contenant les clés `title`, `story` et `date`. Par exemple :

```json
{
    "title": "Mon nouveau titre",
    "story": "Ma nouvelle histoire",
    "date": "23-02-2024"
}
```

La date doit être au format "dd-mm-yyyy". La requête renverra l'entrée ajoutée en format JSON.

### Récupérer toutes les entrées

Pour récupérer toutes les entrées, envoyez une requête GET à l'URL `/carnet`. La requête renverra un tableau de toutes les entrées en format JSON.

## Structure du projet

Le projet est composé de trois fichiers principaux :

- `index.php` : C'est le point d'entrée de l'application. Il gère les requêtes entrantes et appelle les fonctions appropriées en fonction de la méthode de la requête.
- `functions.php` : Ce fichier contient les fonctions `add_entry()` et `get_entries()` qui gèrent respectivement l'ajout d'une nouvelle entrée et la récupération de toutes les entrées.
- `entries.json` : C'est le fichier où sont stockées toutes les entrées. Chaque entrée est un objet JSON avec les clés `title`, `story` et `date`.