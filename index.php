<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil Séminaire</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        /* Parallax effect */
        .parallax {
            background-image: url('image/bleu.jpg'); 
            height: 100vh;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .parallax h1 {
            font-size: 4rem;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        .cta-btn {
            background-color: #007bff;
            color: white;
            padding: 15px 30px;
            border-radius: 5px;
            font-size: 1.2rem;
            text-decoration: none;
        }

        .cta-btn:hover {
            background-color: #0056b3;
        }

        /* Cards section */
        .cards-section {
            padding: 50px 0;
            background-image: url('image/bleu.jpg'); 
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .card {
            background-color: #e3f2fd; /* Bleu clair */
            transition: transform 0.2s ease-in-out;
            border: none;
            margin: 10px;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        .card-body {
            padding: 20px;
        }

        /* Disposition horizontale */
        .card-group {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        /* Floating CTA button */
        .floating-cta {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            border-radius: 50px;
            font-size: 1.2rem;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .floating-cta:hover {
            background-color: #218838;
        }



    </style>
</head>
<body>

    <!-- Parallax Hero Section -->
    <section class="parallax">
        <div>
            <h1>Bienvenue au Séminaire 2026</h1>
            <a href="form_inscription.php" class="cta-btn">Inscrivez-vous maintenant</a>
        </div>
    </section>

    <!-- Cards Section -->
    <section class="cards-section">
        <div class="container">
            <h2 class="text-center mb-5">Pourquoi participer ?</h2>
            <div class="card-group">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Innovations Réseau</h5>
                        <p class="card-text">Découvrez les dernières technologies <br>
                         et solutions en télécommunication.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Opportunités de Partenariats</h5>
                        <p class="card-text">Rencontrez des décideurs et partenaires stratégiques <br>dans le domaine des réseaux.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Ateliers Pratiques</h5>
                        <p class="card-text">Participez à des ateliers sur la 5G, la fibre optique,<br> et d'autres technologies de pointe.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <a href="form_inscription.php" class="floating-cta">Inscrivez-vous</a>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>
</html>
