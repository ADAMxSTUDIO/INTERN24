# INTERN24

## Sujet
Développement d'une API de gestion des demandes de congés pour les entreprises avec Laravel.

## Description
Développez une API en Laravel permettant aux employés d'une entreprise de soumettre des demandes de congés et aux responsables de les approuver ou les rejeter. L'application doit intégrer un système d'authentification sécurisé avec JWT et respecter l'architecture MVC (Modèle-Vue-Contrôleur) native à Laravel.

## Fonctionnalités principales

### 1. Authentification et autorisation
- **Inscription et connexion des utilisateurs** : Utiliser Laravel Sanctum pour gérer les sessions avec JWT.
- **Gestion des rôles utilisateurs** : Implémenter des rôles distincts (employé, responsable) avec des permissions précises. Utiliser les middleware de Laravel pour protéger les routes et garantir que seuls les utilisateurs autorisés puissent accéder aux fonctionnalités correspondantes.

### 2. Gestion des demandes de congés
- **Soumission des demandes** : Permettre aux employés de soumettre leurs demandes de congés via l'API.
- **Examen des demandes** : Offrir aux responsables la possibilité d'examiner, d'approuver ou de rejeter les demandes de congés via l'API.
- **Historique des demandes** : Maintenir un historique des demandes avec des statuts (en attente, approuvée, rejetée) et des commentaires, en structurant les tables dans la base de données MySQL à l'aide de migrations.

### 3. Notifications
- **Notifications par email** : Utiliser Laravel Notifications avec MailTrap pour envoyer des notifications aux employés et responsables concernant les changements de statut des demandes.

### 4. Rapports
- **Génération de rapports** : Permettre la génération de rapports au format PDF ou Excel sur les demandes de congés pour une période donnée, en utilisant Laravel Excel ou domPDF. Ces rapports aideront à analyser les tendances et à prendre des décisions éclairées.

## Technologies et outils
- **Backend** : API Laravel pour gérer les requêtes via des routes et des contrôleurs.
- **Base de données** : MySQL pour stocker les utilisateurs, les demandes de congés, les rôles, etc.
- **Authentification** : JWT via Laravel Sanctum pour garantir une sécurité optimale.
- **Modèle MVC** : Utilisation de l'architecture MVC de Laravel pour une séparation claire des préoccupations (Modèle, Vue, Contrôleur).

## Problématique réelle
La gestion des demandes de congés est souvent complexe pour les entreprises comptant de nombreux employés. Cette API propose une solution centralisée et automatisée pour la gestion des congés, minimisant ainsi les erreurs humaines et améliorant la transparence entre les employés et les responsables. Elle facilite également le suivi et l'analyse des demandes de congés, contribuant à une meilleure gestion des ressources humaines.

## Outils de test
- **Postman** : Utiliser Postman pour tester l'API et vérifier le bon fonctionnement des endpoints.
