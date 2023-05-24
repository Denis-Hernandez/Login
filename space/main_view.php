<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    //echo $_SESSION['usuario'];
    // La sesión está iniciada
    header("Location: index.php");
    //exit;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Test_1</title>
    <link rel="stylesheet" href="./style.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
  </head>
  <body>
    <header class="header">
      <h1 class="header__title">Solar System</h1><h1 class="header__title"><a href="../pagina_principal.php">Regresar</a></h1>
    </header>
    <section class="main">
      <section class="solar-system">
        <section class="solar-system__panel">
          <input
            class="panel__checkbox"
            type="radio"
            name="my-input"
            id="sun-buttom"
          /><label class="panel__button" id="sun" for="sun-buttom" onclick="requestData(this)">
            <img class="panel__img" src="../src/icons8-sun-60.png" alt="" />
            Sun</label
          >
          <input
            class="panel__checkbox"
            type="radio"
            name="my-input"
            id="mercury-buttom"
          />
          <label class="panel__button" id="mercury" for="mercury-buttom" onclick="requestData(this)">
            <img class="panel__img" src="../src/icons8-mercury-60.png" alt="" />
            Mercury</label
          >
          <input
            class="panel__checkbox"
            type="radio"
            name="my-input"
            id="venus-buttom"
          />
          <label class="panel__button" id="venus" for="venus-buttom" onclick="requestData(this)">
            <img class="panel__img" src="../src/icons8-venus-60.png" alt="" />
            Venus</label
          >
          <input
            class="panel__checkbox"
            type="radio"
            name="my-input"
            id="earth-buttom"
          />
          <label class="panel__button" id="earth" for="earth-buttom" onclick="requestData(this)">
            <img class="panel__img" src="../src/icons8-earth-60.png" alt="" />
            Earth</label
          >
          <input
            class="panel__checkbox"
            type="radio"
            name="my-input"
            id="mars-buttom"
          />
          <label class="panel__button" id="mars" for="mars-buttom" onclick="requestData(this)">
            <img class="panel__img" src="../src/icons8-mars-60.png" alt="" />
            Mars</label
          >
          <input
            class="panel__checkbox"
            type="radio"
            name="my-input"
            id="jupiter-buttom"
          />
          <label class="panel__button" id="jupiter" for="jupiter-buttom" onclick="requestData(this)">
            <img class="panel__img" src="../src/icons8-jupiter-60.png" alt="" />
            Jupiter</label
          >
          <input
            class="panel__checkbox"
            type="radio"
            name="my-input"
            id="saturn-buttom"
          />
          <label class="panel__button" id="saturn" for="saturn-buttom" onclick="requestData(this)">
            <img class="panel__img" src="../src/icons8-saturn-60.png" alt="" />
            Saturn</label
          >
          <input
            class="panel__checkbox"
            type="radio"
            name="my-input"
            id="neptune-buttom"
          />
          <label class="panel__button" id="neptune" for="neptune-buttom" onclick="requestData(this)">
            <img class="panel__img" src="../src/icons8-neptune-60.png" alt="" />
            Neptune</label
          >
          <input
            class="panel__checkbox"
            type="radio"
            name="my-input"
            id="uranus-buttom"
          />
          <label class="panel__button" id="uranus" for="uranus-buttom" onclick="requestData(this)">
            <img class="panel__img" src="../src/icons8-uranus-60.png" alt="" />
            Uranus</label
          >
          <input
            class="panel__checkbox"
            type="radio"
            name="my-input"
            id="pluto-buttom"
          />
          <label class="panel__button" id="pluto" for="pluto-buttom" onclick="requestData(this)">
            <img class="panel__img" src="../src/icons8-pluto-60.png" alt="" />
            Pluto</label
          >
        </section>
        <!--section class="solar-system__central-panel">
          <p class="solar-system__central-panel__text">hola</p>
        </section-->
        <div class="solar-system__sun"></div>
        <div class="solar-system__orbit-mercury">
          <img
            class="solar-system__planet-mercury"
            src="../src/icons8-mercury-60.png"
            alt="Planeta Mercurio"
          />
        </div>
        <div class="solar-system__orbit-venus">
          <img
            class="solar-system__planet-venus"
            src="../src/icons8-venus-60.png"
            alt="Planeta Venus"
          />
        </div>
        <div class="solar-system__orbit-earth">
          <img
            class="solar-system__planet-earth"
            src="../src/icons8-earth-60.png"
            alt="Planeta Tierra"
          />
        </div>
        <div class="solar-system__orbit-mars">
          <img
            class="solar-system__planet-mars"
            src="../src/icons8-mars-60.png"
            alt="Planeta Marte"
          />
        </div>
        <div class="solar-system__orbit-jupiter">
          <img
            class="solar-system__planet-jupiter"
            src="../src/icons8-jupiter-60.png"
            alt="Planeta Jupiter"
          />
        </div>
        <div class="solar-system__orbit-saturn">
          <img
            class="solar-system__planet-saturn"
            src="../src/icons8-saturn-60.png"
            alt="Planeta Saturno"
          />
        </div>
        <div class="solar-system__orbit-uranus">
          <img
            class="solar-system__planet-uranus"
            src="../src/icons8-uranus-60.png"
            alt="Planeta Urano"
          />
        </div>
        <div class="solar-system__orbit-neptune">
          <img
            class="solar-system__planet-neptune"
            src="../src/icons8-neptune-60.png"
            alt="Planeta Neptuno"
          />
        </div>
        <div class="solar-system__orbit-pluto">
          <img
            class="solar-system__planet-pluto"
            src="../src/icons8-pluto-60.png"
            alt="Planeta Pluton"
          />
        </div>
      </section>
    </section>
    <footer class="footer">
      <label class="footer__display" for="footer__check">
        <h3 class="footer__subtitle">Nunca pares de aprender</h3>
        <span class="footer__material-icon"> expand_less </span>
        <input
          class="footer__check"
          type="checkbox"
          id="footer__check"
          onclick="footer_onClick(this)"
        />
      </label>
    </footer>
    <script src="./main_view.js"></script>
  </body>
</html>
