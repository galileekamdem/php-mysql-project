# php-mysql-project

#  Projet DevOps - Stack PHP / MySQL avec CI/CD GitLab

Ce projet est une application web PHP connectée à une base de données MySQL, conteneurisée avec Docker et Docker Compose, et déployée automatiquement via une pipeline CI/CD GitLab.

---

## Technologies utilisées

- PHP 8
- MySQL 5.7
- Docker
- Docker Compose
- GitLab CI/CD

---

⚙️ Étapes d'installation et d'exécution

1. Cloner le projet

Copier
Modifier

git clone https://gitlab.com/votre-utilisateur/votre-projet.git
cd votre-projet

2. Lancer les conteneurs en local

Copier
Modifier
docker-compose up -d --build
Accédez ensuite à : http://localhost:8000

 CI/CD avec GitLab
Le fichier .gitlab-ci.yml automatise les étapes suivantes :

Build de l’image Docker PHP

Test de connexion avec MySQL (ping ou script test)

Push éventuel sur un registre

Déploiement automatique si tout est OK

✅ À faire / TODO
   Déploiement local avec Docker Compose

   Configuration pipeline GitLab CI

   Ajouter des tests PHP unitaires

   Déploiement sur un environnement distant (EC2, Render…)

 Aperçu

php
<?php
$mysqli = new mysqli("mysql", "root", "rootpassword", "demo");
echo "Connexion MySQL réussie !";
?>

👨‍💻 Auteur
Kevin Maruis Kamdem
Architect solution | Cloud AWS Learner | Open Source Enthusiast

