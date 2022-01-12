<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo $_SESSION['public'] ?>public/css/contact.css">

<body>

    <form id="regForm" action="/action_page.php">
        <h1>Rexístrate:</h1>
        <!-- One "tab" for each step in the form: -->
        <div class="tab">Nome:
            <p><input placeholder="Nome..." oninput="this.className = ''" name="fname"></p>
            <p><input placeholder="Apelido..." oninput="this.className = ''" name="lname"></p>
        </div>
        <div class="tab">Información de contacto:
            <p><input placeholder="E-mail..." oninput="this.className = ''" name="email"></p>
            <p><input placeholder="Teléfono..." oninput="this.className = ''" name="phone"></p>
        </div>
        <div class="tab">Data de nacemento:
            <p><input placeholder="dd" oninput="this.className = ''" name="dd"></p>
            <p><input placeholder="mm" oninput="this.className = ''" name="nn"></p>
            <p><input placeholder="aaaa" oninput="this.className = ''" name="yyyy"></p>
        </div>
        <div class="tab">Información de usuario:
            <p><input placeholder="Usuario..." oninput="this.className = ''" name="uname"></p>
            <p><input placeholder="Contrasinal..." oninput="this.className = ''" name="pword" type="password"></p>
        </div>
        <div style="overflow:auto;">
            <div style="float:right;">
                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Anterior</button>
                <button type="button" id="nextBtn" onclick="nextPrev(1)">Seguinte</button>
            </div>
        </div>
        <!-- Circles which indicates the steps of the form: -->
        <div style="text-align:center;margin-top:40px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
        </div>
    </form>
</body>

<script src="<?php echo $_SESSION['public'] ?>public/js/contacto.js"></script>

</html>