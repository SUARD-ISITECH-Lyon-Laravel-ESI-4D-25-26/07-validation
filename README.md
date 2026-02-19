## Testez vos compétences Laravel — Validation

Ce dépôt est un exercice pratique : réalisez les tâches listées ci-dessous
et faites passer les tests PHPUnit, qui échouent volontairement pour le moment.

Pour vérifier votre progression, les tests se trouvent dans `tests/Feature/ValidationTest.php`.

Au départ, si vous exécutez `php artisan test`, tous les tests échouent.
Votre objectif est de les faire passer un par un.

> ⚠️ **Vous n'avez pas le droit de modifier les fichiers de tests.**


## Installation du projet

```sh
git clone <url-du-depot> projet
cd projet
cp .env.example .env  # Éditez vos variables d'environnement
composer install
php artisan key:generate
```

Puis lancez `php artisan test` pour voir les erreurs à corriger.


## Soumettre votre solution

Créez une Pull Request (ou Merge Request) vers la branche `main`.

---

## Tâche 1. Règles de validation simples

Dans le fichier `app/Http/Controllers/PostController.php`, la méthode `store()` ne contient pas encore
les règles de validation. Complétez-la pour que le champ `title` soit obligatoire (required)
et unique dans la table `posts`.

Méthode de test : `test_simple_validation_rules()`.

---

## Tâche 2. Validation de champs en tableau (Array Validation)

Dans le fichier `app/Http/Controllers/ProfileController.php`, la méthode `update()` ne contient
pas encore les règles de validation. Imaginez que le formulaire Blade contient des champs
de type tableau :

```html
<input name="profile[name]" ... />
<input name="profile[email]" ... />
```

Ajoutez les règles de validation pour que `profile[name]` et `profile[email]` soient
tous les deux obligatoires (required).

Méthode de test : `test_array_validation()`.

---

## Tâche 3. Affichage des erreurs de validation dans Blade

Dans le fichier `resources/views/projects/create.blade.php`, affichez les erreurs de validation
pour les règles `name => required` et `description => required`. Utilisez la structure HTML
de votre choix (par exemple `<ul><li>erreur</li></ul>`). Aucun design n'est requis :
le test vérifie uniquement la présence des messages d'erreur.

Méthode de test : `test_validation_errors_shown_in_blade()`.

---

## Tâche 4. Affichage d'une erreur de validation spécifique dans Blade

Dans le fichier `resources/views/products/create.blade.php`, affichez l'erreur de validation
pour le champ `name` en utilisant une directive Blade dédiée à l'affichage d'une erreur
sur un champ spécifique.

Méthode de test : `test_validation_specific_error_shown_in_blade()`.

---

## Tâche 5. Conservation de l'ancienne valeur après une erreur de validation

Dans le fichier `resources/views/teams/create.blade.php`, la valeur du champ `name`
doit être conservée dans le formulaire après une validation échouée.
Modifiez le fichier Blade pour afficher l'ancienne valeur (old value).

Méthode de test : `test_old_value_stays_in_form_after_validation_error()`.

---

## Tâche 6. Validation via Form Request

Dans le fichier `app/Http/Controllers/ItemController.php`, la validation est effectuée
via la classe `StoreItemRequest`, mais cette classe n'existe pas encore.
Créez-la avec la commande artisan `php artisan make:request StoreItemRequest`,
avec la méthode `authorize()` retournant `true` et les règles de validation suivantes :
`name` et `description` obligatoires (required).

Méthode de test : `test_form_request_validation()`.

---

## Tâche 7. Protection contre la mise à jour d'un champ interdit

Dans le fichier `app/Http/Controllers/UserController.php`, la méthode `update()` met à jour
tous les champs reçus via la requête. Or le champ `is_admin` ne doit jamais pouvoir être
modifié, même s'il est transmis dans la requête.
Modifiez la ligne utilisant `$request->all()` pour n'autoriser que les champs validés
par `UpdateUserRequest`.

Méthode de test : `test_update_forbidden_field()`.

---

## Tâche 8. Personnalisation des messages d'erreur de validation

Dans `app/Http/Requests/StoreBuildingRequest.php`, le Form Request valide le champ `name`
comme obligatoire (required). Personnalisez ce Form Request pour que le message d'erreur
affiché soit `"Please enter the name"` à la place du message par défaut.

Méthode de test : `test_custom_error_message()`.

---

## Tâche 9. Règle de validation personnalisée

Dans le fichier `app/Http/Controllers/ArticleController.php`, la validation utilise une règle
personnalisée `Uppercase` que vous devez créer. Générez-la avec la commande artisan
`php artisan make:rule Uppercase`, puis implémentez-la pour vérifier que la première lettre
du champ `title` est une majuscule. Le message d'erreur attendu est :
`"The title does not start with an uppercased letter"`.

Méthode de test : `test_custom_validation_rule()`.

---

## Questions / Problèmes ?

Si vous rencontrez des difficultés ou avez des suggestions, créez une Issue.

Bon courage !
