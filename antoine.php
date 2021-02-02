<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="script.js"></script>

    <title>Contact</title>
</head>

<body>
    

    <div class="acceuil">
    <a href="index.html">Acceuil</a>
    </div>

    
    <?php
    echo "Hello World";
    ?>

    
    <form action="#" method="post" onsubmit="good()" name="contact">

        <div>
            <input type="radio" id="civilité" name="civilité" value="Monsieur">
            <label for="civilité">Monsieur</label>

            <input type="radio" id="civilité2" name="civilité2" value="Madame">
            <label for="contactChoice2">Madame</label>

            <input type="radio" id="civilité3" name="civilité3" value="Non-binaire">
            <label for="civilité3">Non-Binaire</label>

        </div>

        <br>
        <br>


        <div class="field">
            <label class="label">Votre Nom</label>
            <div class="control">

                <input class="input" type="text" placeholder="Nom">

            </div>
        </div>

        <br>

        <div class="field">
            <label class="label">Votre Prénom</label>
            <div class="control">


                <input class="input" type="text" placeholder="Prénom">



            </div>
        </div>

        <br>

        <div class="field">
            <label class="label">Votre mail</label>
            <div class="control">


                <input class="input" type="email" placeholder="Email">


            </div>
        </div>
        </div>

        <br>

        <div class="field">
            <label class="label">Votre Message</label>
            <div class="control has-icons-left has-icons-right"></div>

            <textarea class="textarea" placeholder="Message" name="message"></textarea>
        </div>
        </div>

        <div class="button">
        <button type="submit">Envoyer le message</button>
        </div>
    </form>





</body>

</html>