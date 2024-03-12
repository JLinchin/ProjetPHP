$(document).ready(function() {
    $('#chansonForm').submit(function(event) {
        // Empêcher le formulaire d'être soumis de manière traditionnelle
        event.preventDefault();

        // Envoyer le formulaire via AJAX
        $.ajax({
            type: 'POST',
            url: 'views/pageAcceuil.php', // URL de votre script PHP
            data: $('#chansonForm').serialize(), // Sérialiser les données du formulaire
            success: function(response) {
                // Gérer la réponse du serveur (si nécessaire)
                alert('La chanson a été ajoutée avec succès !');
                // Vous pouvez rediriger l'utilisateur vers une autre page ici si nécessaire
            },
            error: function(xhr, status, error) {
                // Gérer les erreurs (si nécessaire)
                console.error(error);
                alert('Une erreur s\'est produite lors de l\'ajout de la chanson.');
            }
        });
    });
});