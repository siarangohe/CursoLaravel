<html>
    <head>
        <script src="../../../Simon/public/assets/js/app.js"></script>
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <!-- El script anterior sirve para importar un archivo JavaScript, en este caso app.js-->
        <script src="../../../Simon/public/libs/alertify/lib/alertify.min.js"></script>
        <!-- El script anterior sirve para importar el plugin de jQuery Alertify -->
        <script src="../../../Simon/public/libs/pickadate/lib/legacy.js"></script>
        <script src="../../../Simon/public/libs/pickadate/lib/picker.js"></script>
        <script src="../../../Simon/public/libs/pickadate/lib/picker.date.js"></script>
        <script src="../../../Simon/public/libs/pickadate/lib/picker.time.js"></script>
        <!-- El script anterior sirve para importar jQuery -->
        <link rel="stylesheet" type="text/css" href="../../../Simon/public/libs/alertify/themes/alertify.core.css">
        <link rel="stylesheet" type="text/css" href="../../../Simon/public/libs/alertify/themes/alertify.default.css">
        <!-- Los dos link anterior sirve para traer el CSS de Alertify, un plugin de jQuery -->

        <link rel="stylesheet" type="text/css" href="../../../Simon/public/libs/pickadate/lib/themes/default.css">
        <link rel="stylesheet" type="text/css" href="../../../Simon/public/libs/pickadate/lib/themes/default.date.css">
        <link rel="stylesheet" type="text/css" href="../../../Simon/public/libs/pickadate/lib/themes/default.time.css">
    </head>
    
    <body>
        <button onclick="ms.saludar()">Saludar</button>
        <button onclick="ms.desvanecer()">Desvanecer</button>
        <button onclick="ms.cambiarColorFondo('green')">Verde</button>
        <button onclick="ms.cambiarColorFondo('red')">Rojo</button>
        <button onclick="ms.ocultarParrafoConID()">Ocultar parrafo con ID</button>
        <button onclick="ms.ocultarTodosLosParrafos()">Ocultar todos los parrafos</button>
        <button onclick="ms.mostrarTodosLosParrafos()">Mostrar todos los parrafos</button>
        <button onclick="ms.alertify()">Alertify</button>
        <input onclick="ms.pickerDate()" class="datepicker">
        <input onclick="ms.pickerTime()" class="timepicker">
        <p id="parrafo">Esto es un parrafo</p>
        <p>Esto es un parrafo1</p>
        <p>Esto es un parrafo2</p>
    </body>
</html>