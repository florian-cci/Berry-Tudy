# Berry Tudy
 Berry Tudy Extranet
 # <center>Projet Extranet BerryTudy</center> <!-- omit in toc -->
<center>Auteur : Jules Hemery</center>


## Table des matières <!-- omit in toc -->
- [Introduction](#introduction)
- [Choix de technologie](#choix-de-technologie)
- [Installation](#installation)
- [Test automatique (Cypress)](#test-automatique-cypress)
## Introduction
Dans le cadre d'un stage en entreprise, il m'a été demandé de réaliser un projet pour l'association BerryTudy.

L’association Centre de Vacances Berry-Tudy organise depuis 1946 des séjours pour enfants de 6 à 16 ans dans son centre situé dans la commune de l’Ile Tudy dans le Finistère.

Le client demande une interface extranet permettant de numériser les formulaires d'inscription aux séjours qu'ils proposent.
## Choix de technologie
Ayant déja réaliser un projet E-commerce avec le frameworks Laravel au cours de ma formation de Developpeur Web et Web Mobile à la CCI de Bourges, j'ai choisi de réaliser ce projet en utilisant ce framework.
J'y ajouterais quelques paquets nodes en fonction de mes besoins

J'utiliserais également Jquery pour la gestion des évènements ainsi que Bootstrap pour la mise en forme des pages.

En ce qui concerne la base de données, j'utiliserais une base MySQL.
## Installation
- Pré-requis :
  - PHP v7.4.19
  - Node.js v16.14.2 (LTS)
  - Composer v2.3.4
1. Cloner le projet sur votre machine depuis le [repo GitHub.](https://github.com/Couvbat/BerryTudy.git)
2. Créer un base de données et renseigner les informations (nom, username, password) dans le fichier ".env.example" , puis le renommer en ".env"
3. Executer dans l'ordre les commandes suivante dans un terminal :
   - composer install
   - npm install
   - npm run dev
   - php artisan key:generate
   - php artisan migrate
   - php artisan db:seed
   - php artisan serve

## Test automatique (Cypress)

Executer "npx cypress open" dans un terminal pour ouvrir le dashboard Cypress.

Le dashboard tente de détecter automatiquement les navigateurs installer sur la machine. [(Voir Documentation)](https://docs.cypress.io/guides/getting-started/installing-cypress#Switching-browsers)
Si aucun navigateur n'est détecté ou que vous utilisez un navigateur custom (Brave, Opera...), Electron est proposé par défaut, sinon se référer à [ce guide](https://docs.cypress.io/api/plugins/configuration-api#Customize-available-browsers).

Les tests réalisables sont listé dans le dashboard cypress.
