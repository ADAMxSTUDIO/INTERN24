# INTERN24

## Sujet
Développement d'une application web de gestion des demandes de congés pour les entreprises avec Laravel.

## Description
Développez une application web en Laravel permettant aux employés d'une entreprise de soumettre des demandes de congés et aux responsables de les approuver ou les rejeter. L'application doit intégrer un système d'authentification sécurisé avec JWT et respecter l'architecture MVC (Modèle-Vue-Contrôleur) native à Laravel.

## Fonctionnalités principales

### 1. Authentification et autorisation
- Inscription et connexion des utilisateurs en utilisant Laravel Sanctum ou Passport pour la gestion des sessions via JWT.
- Gestion des rôles utilisateurs (employé, responsable, administrateur) avec des permissions distinctes, en s'appuyant sur les middleware de Laravel pour la protection des routes.

### 2. Gestion des demandes de congés
- Interface pour les employés afin de soumettre des demandes de congés.
- Interface pour les responsables pour examiner, approuver ou rejeter les demandes.
- Historique des demandes avec des statuts et des commentaires, en utilisant des migrations pour structurer les tables dans la base de données MySQL.

### 3. Notifications
- Notifications par email via Laravel Notifications (Mail, Slack, etc.) pour informer les employés et les responsables des changements de statut des demandes.

### 4. Tableau de bord
- Tableau de bord pour les responsables, avec un affichage des demandes en attente, approuvées ou rejetées.
- Statistiques sur les demandes de congés (par exemple, nombre de jours pris, solde de congés restant), utilisant Laravel Charts pour visualiser les données.

### 5. Rapports
- Génération de rapports PDF ou Excel sur les demandes de congés pour une période donnée, à l'aide de Laravel Excel ou domPDF.

## Technologies et outils

- **Frontend** : Utiliser React.js avec Redux Toolkit pour la gestion d'état et Tailwind CSS pour le design, connecté à Laravel via une API REST.
- **Backend** : Laravel pour le serveur, avec les routes et contrôleurs gérant les requêtes.
- **Base de données** : MySQL pour stocker les utilisateurs, les demandes de congés, les rôles, etc.
- **Authentification** : JWT via Laravel Sanctum ou Passport.
- **Modèle MVC** : Laravel fournit nativement une architecture MVC pour séparer les préoccupations (Modèle, Vue, Contrôleur).

## Problématique réelle
La gestion des demandes de congés devient souvent compliquée pour les entreprises avec de nombreux employés. Cette application offre une solution centralisée et automatisée pour gérer les congés, minimisant les erreurs humaines et améliorant la transparence entre les employés et les responsables.

Cela permet de travailler sur plusieurs aspects du développement web moderne tout en abordant un besoin réel des entreprises.
