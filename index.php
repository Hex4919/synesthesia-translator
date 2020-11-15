<?php 
    require_once "./lib.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Buchstaben -> Alina - Übersetzer</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Include Libs -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>
    <!-- Include Libs -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>

<body>
    <div class="container">
        <div class="row" id="head-row">
            <div class="col-md-6 offset-md-3">
                <h3>Übersetzer: Buchstaben zu Alina</h3>
                <p>Hier kannst du ein Normales Wort in die Synästhesie von Alina übersetzen lassen.</p>
                <p>Das umgekehrte Übersetzen funktioniert leider nicht, da eine Farbe mehrere Buchstaben haben kann.
                    Ich versuche aber, da noch eine Lösung zu finden. Wenn mir etwas einfällt, wird es noch
                    veröffentlicht.
                </p>
                <h5>Hinweise zur Nutzung:</h5>
                <p>Der Übersetzer unterstützt derzeit keine Umlaute, daher Empfehle ich z.B. mit Ae statt Ä zu arbeiten.
                    <br/>Alle Zeichen, die der Übersetzer nicht kennt, werden in der Ausgabe einfach wieder angezeigt. </br>
                    Einzelne Wörter werden in der Ausgabe durch ein Semicolon getrennt.
                </p>
                <hr />
            </div>
        </div>
        <div class="row" id="input-row">
            <div class="col-md-6 offset-md-3">
                <form action="/index.php" method="POST">
                    <div class="form-group">
                        <p>Hier den Text eingeben, der übersetzt werden soll:</p>
                        <textarea id="in_text" name="in_text" cols="60" rows="7"></textarea>
                    </div>
                    <button type="submit" class="btn btn-outline-light">Übersetzen</button>
                </form>
                <hr />
            </div>
        </div>
        <?php if(isset($_POST["in_text"])){ ?>
        <div class="row" id="output-row">
            <div class="col-md-6 offset-md-3">
                <p>Übersetzter Text:</p>
                <textarea id="out_text" cols="60" rows="7" readonly><?php echo(convertToColour($_POST["in_text"])); ?></textarea>
        </div>
        <?php } ?>
        <div class="row" id="footer-row">
        <div class="col-sm-12">
        <small>Das ist eine Seite von <a href="https://hex4919.com">hex4919.com</a>. <br/>
            <a href="https://blog.hex4919.com/index.php/impressum/">Impressum</a>
            <a href="https://blog.hex4919.com/index.php/datenschutz/">Datenschutz</a></small>
        </div> 
        </div>
    </div>
    <!-- Include Libs -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
</body>
</html>