## 1. Les entités

### VILLE
- **id_ville** (Identifiant)
- nom_ville

### AUTEUR
- **id_auteur** (Identifiant)
- nom_auteur
- prenom_auteur
- email_auteur

### ARTICLE
- **id_article** (Identifiant)
- titre_article
- contenu_article
- date_publication
- statut_article
- image_article

### CATEGORIE
- **id_categorie** (Identifiant)
- nom_categorie

---

## 2. Les relations et cardinalités

### Relation 1 : habite
VILLE (0,N) —— habite —— (1,1) AUTEUR

- Une ville peut avoir zéro ou plusieurs auteurs.
- Un auteur habite dans une seule ville.

### Relation 2 : rédige
AUTEUR (0,N) —— rédige —— (1,1) ARTICLE

- Un auteur peut rédiger zéro ou plusieurs articles.
- Un article est rédigé par un seul auteur.

### Relation 3 : regroupe
CATEGORIE (0,N) —— regroupe —— (1,1) ARTICLE

- Une catégorie peut regrouper zéro ou plusieurs articles.
- Un article appartient à une seule catégorie.

---

## 3. Schéma global du MCD

```text
┌──────────────────────┐
│         VILLE        │
├──────────────────────┤
│ _id_ville_           │
│ nom_ville            │
└──────────┬───────────┘
           │ (0,N)
        (habite)
           │ (1,1)
┌──────────┴───────────┐
│        AUTEUR        │
├──────────────────────┤
│ _id_auteur_          │
│ nom_auteur           │
│ prenom_auteur        │
│ email_auteur         │
└──────────┬───────────┘
           │ (0,N)
        (rédige)
           │ (1,1)
┌──────────┴───────────┐
│        ARTICLE       │
├──────────────────────┤
│ _id_article_         │
│ titre_article        │
│ contenu_article      │
│ date_publication     │
│ statut_article       │
│ image_article        │
└──────────┬───────────┘
           │ (1,1)
        (regroupe)
           │ (0,N)
┌──────────┴───────────┐
│       CATEGORIE      │
├──────────────────────┤
│ _id_categorie_       │
│ nom_categorie        │
└──────────────────────┘
