<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma superbe page</title>
    <link rel="stylesheet" href="./assets/css/app.min.css">
    <script src="./assets/js/app.js" defer></script>
</head>

<body>
    <h1>
        <?php
        echo 'Coucou depuis un super site PHP !';
        ?>
    </h1>

    <div>
        <form action="">
            <fieldset>
                <legend>Ma zik de fou....</legend>
                <input type="file" name="fileAudio" id="fileAudio" />
            </fieldset>
        </form>
    </div>

    <div>
        <audio controls id="audioPreview" class="audioPreview">
            <source src="" />
        </audio>
    </div>

</body>

</html>