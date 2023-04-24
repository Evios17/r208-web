<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Settings -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Infos -->
    <title>BlackLaTex v1.0</title>
    <meta name="title" content="BlackLaTex v1.0">
    <meta name="author" content="Antoine Doro">
    <meta name="description" content="Étudiant en réseaux et télécommunication, ce portfolio résume mon parcours et mes travaux réalisés. N'hésitez pas à y jeter un coup d’œil !">
    
    <!-- Import -->
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="sources/css/root.css">
    <link rel="stylesheet" href="sources/css/index.css">
    <link rel="stylesheet" href="sources/css/loader.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <script src="sources/js/darkmode.js"></script>
</head>
<body>
    <div class="loader-layout">
        <div class="loader-box">
            <div class="loader"></div>
            <span>Chargement</span>
        </div>
    </div>

    <main class="application">
        <div class="left">
            <nav class="onglet-box">
                <button class="onglet a-onglet" data-onglet="1">
                    <span>Etape 1</span>
                </button>
                <i class="fa-solid fa-chevron-right"></i>
                <button class="onglet" data-onglet="2">
                    <span>Etape 2</span>
                </button>
                <i class="fa-solid fa-chevron-right"></i>
                <button class="onglet" data-onglet="3">
                    <span>Etape 3</span>
                </button>
                <i class="fa-solid fa-chevron-right"></i>
                <button class="onglet" data-onglet="4">
                    <span>Etape 4</span>
                </button>
            </nav>
            <div class="box">
                <div class="onglet-container">
                    <button onclick="test()">Test</button>
                    <div class="onglet-layout a-onglet-layout" data-onglet="1">
                        <div class="onglet-content">
                            <form action="" method="post" enctype="multipart/form-data" class="dropzone-from">
                            <input type="hidden" name="MAX_FILE_SIZE" value="1000000000000">
                            <!-- Le champs 'hidden' doit être défini avant le champs 'file'  -->   
                                <div class="dropzone">
                                    <i class="fa-solid fa-file-arrow-up onglet-content-logo"></i>
                                    <span class="dropzone-output"></span>
                                    <div class="dropzone-content">
                                        <span>Drag and drop file here.</span>
                                        <span>OR</span>
                                        <button class="dropzone-btn">Browse File</button>
                                    </div>
                                    <input type="file" accept=".pgn" name="dropzone-file" id="dropzone-file" class="dropzone-file">
                                </div>
                                <input type="submit" name="submit" value="Submit">
                            </form>
                        </div>
                    </div>
                    <div class="onglet-layout" data-onglet="2">
                        <div class="onglet-content">
                            <a href="index.html" class="btn1"><i class="fa-solid fa-rotate-left"></i></a>
                            <i class="fa-solid fa-file-circle-exclamation onglet-content-logo"></i>
                            <span class="message">Wrong file or extension file.</span>
                        </div>
                    </div>
                    <div class="onglet-layout" data-onglet="3">
                        <div class="onglet-content">
                            <i class="fa-solid fa-file-signature onglet-content-logo"></i>
                            <span class="message">In conversion, please wait.</span>
                        </div>
                    </div>
                    <div class="onglet-layout" data-onglet="4">
                        <div class="onglet-content">
                            <i class="fa-solid fa-file-arrow-down onglet-content-logo"></i>
                            <span class="message">Your file as been converted, your can download bellow.</span>
                        </div>
                    </div>
                </div>
                <div>
                    <input type="checkbox" id="switch-button" onclick="toggleDarkMode()">
                    <label for="switch-button">
                        <i class="fas fa-sun"></i>
                        <i class="fas fa-moon"></i>
                    </label>
                    <h1 class="title">BlackLaTex</h1>
                    <span class="subtitle">PGN to LaTeX converter.</span>
                </div>
                <div class="onglet-container">
                    <div class="onglet-layout a-onglet-layout" data-onglet="1">
                        <span class="description">Once uploaded, your file will be converted automatically.</span>
                    </div>
                    <div class="onglet-layout" data-onglet="2">
                        <span class="description">2Once uploaded, your file will be converted automatically.</span>
                    </div>
                    <div class="onglet-layout" data-onglet="3">
                        <span class="description">3Once uploaded, your file will be converted automatically.</span>
                    </div>
                    <div class="onglet-layout" data-onglet="4">
                        <span class="description">4Once uploaded, your file will be converted automatically.</span>
                    </div>
                </div>
            </div>
            <div class="onglet-container">
                <div class="onglet-layout a-onglet-layout" data-onglet="1"></div>
                <div class="onglet-layout" data-onglet="2"></div>
                <div class="onglet-layout" data-onglet="3"></div>
                <div class="onglet-layout" data-onglet="4">
                    <div class="dowl">
                        <div>
                            <i class="fa-solid fa-file"></i>
                            <span>exemple.tex</span>
                        </div>
                        <a href="" class="dowl-link">Download</a>
                        <a href="index.html" class="dowl-close"><i class="fa-regular fa-circle-xmark"></i></a href="index.html">
                    </div>
                </div>
            </div>
        </div>
        <div class="right">
        <script>
            function test () {
                $.ajax({
                    method: "POST",
                    url: "test.php",
                    data: { action: "charger-donnees" }
                });
                $.done(function(data) {
                    // Affiche les données renvoyées par le script PHP
                    $("#resultat").html(data);
                });
            }
        </script>
            <?php
                if(isset($_POST['submit'])){
                    if ($_FILES['dropzone-file']['error']) {
                        switch ($_FILES['dropzone-file']['error']){
                            case 1: // UPLOAD_ERR_INI_SIZE
                                echo "Le fichier dépasse la limite autorisée par le serveur (fichier php.ini) !";
                                break;
                            case 2: // UPLOAD_ERR_FORM_SIZE
                                echo "Le fichier dépasse la limite autorisée dans le formulaire HTML !";
                                break;
                            case 3: // UPLOAD_ERR_PARTIAL
                                echo "L'envoi du fichier a été interrompu pendant le transfert !";
                                break;
                            case 4: // UPLOAD_ERR_NO_FILE
                                echo "Le fichier que vous avez envoyé a une taille nulle !";
                                break;
                        }
                    }else{
                        $target_nom = $_FILES['dropzone-file']["tmp_name"];
                        $target_dir = '/var/www/html/cours/r208/r208-web/';
                        $target_path = $target_dir . basename($target_nom);
                        //echo getcwd()."/".$target_nom;
                        if(move_uploaded_file($target_nom, $target_path)){
                            echo "Le fichier que vous avez envoyé a bien était réceptioné !";
                            $target_nom = substr($target_nom, 5);
                            // Chemin vers l'exécutable en C
                            $executable = '/var/www/html/cours/r208/r208-web/blacktex';

                            // Argument à passer au programme
                            $argument = ' -n 5 -i ' . $target_nom;

                            // Exécute le programme en C avec l'argument
                            $resultat = exec("$executable $argument", $output, $status);

                            // Affiche le résultat
                            if ($status == 0) {
                                echo "Le programme a été exécuté avec succès. Résultat : $resultat";
                            } else {
                                echo "L'exécution du programme a rencontré une erreur.";
                            }

                            // Affiche la sortie du shell
                            echo "<pre>";
                            echo implode("\n", $output);
                            echo "</pre>";
                        } else {
                            echo "Le fichier que vous avez envoyé n'a pas bien était réceptioné !";
                        }
                        
                    }
                }

                // $output=null;
                // $retval=null;
                // exec('blacktex', $output, $retval);
                // echo "Returned with status $retval and output:\n";
                // print_r($output);

                
            ?>
        </div>
    </main>

    <script src="sources/js/loader.js"></script>
    <script src="sources/js/onglet.js"></script>
    <script src="sources/js/dropzone.js"></script>
</body>
</html>