<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="JS/AjoutEvenement.js"></script>
    <title>Page Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body>
    <?php include('include/menu.php'); ?>

    <form id="formEvenement" class="container p-5 my-5 shadow rounded-5">

        <h2 class="text-center fw-bold mb-4 mx-auto" style="max-width: 90%;">Ajouter un Événement</h2>

        <div class="mb-3">
            <label for="titre"></label>
            <input type="text" class="form-control rounded-4 mx-auto" id="titre" name="titre" placeholder="Nom de l'Évènement" required>
        </div>

        <div class="mb-3">
            <label for="nom_type"></label>
            <input type="text" class="form-control rounded-4 mx-auto" id="nom_type" name="nom_type" placeholder="Type" required>
        </div>

        <div class="mb-3">
            <label for="date_evenement"></label>
            <input type="date" class="form-control rounded-4 mx-auto" id="date_evenement" name="date_evenement" required>
        </div>

        <div class="mb-3">
            <label for="lieu"></label>
            <input type="text" class="form-control rounded-4 mx-auto" id="lieu" name="lieu" placeholder="Lieu" required>
        </div>

        <div class="mb-3">
            <label for="description"></label>
            <textarea class="form-control rounded-4 mx-auto" id="description" name="description" placeholder="Description" required></textarea>
        </div>

        <div class="mb-3">
            <label for="image"></label>
            <input type="text" class="form-control rounded-4 mx-auto" id="image" name="image" placeholder="URL de l'image" required>
        </div>

        <button type="submit" class="CTA">Ajouter l'Événement</button>
    </form>


    <?php include('include/footer.php'); ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>