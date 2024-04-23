<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Blindados y Helicopteros</title>
        <style>
    body, html {
                margin: 0;
                padding: 0;
                width: 100%;
                height: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                background-color: #f4f4f4;
                font-family: Arial, sans-serif;
            }
            .tablet {
                width: 100%;
                max-width: 1024px; /* Horizontal width */
                height: 100%;
                max-height: 768px; /* Horizontal height */
                border: 16px solid #000;
                border-radius: 36px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
                overflow: hidden;
                background-color: #fff;
                display: flex;
                flex-direction: column; /* Stack header and content */
                align-items: center;
                padding: 20px; /* Padding around content */
                box-sizing: border-box;
            }
            .header {
                width: 100%;
                text-align: center;
                margin-bottom: 5px;
            }
            .header a {
                display: inline-block;
                background-color: #333;
                color: white;
                padding: 10px 20px;
                text-decoration: none;
                margin-bottom: 5px;
                border-radius: 4px;
            }
            .options-container {
                width: 100%;
                display: flex;
                justify-content: space-between;
            }
            .column {
                width: 48%; /* Slightly less than half to fit padding and borders */
            }
            .option-group {
                margin-bottom: 20px;
            }
            .option-group label {
                display: block;
                margin-bottom: 5px;
            }
            .option-group select, .option-group input {
                width: 100%;
                padding: 10px;
                margin-bottom: 5px;
                border: 1px solid #ccc;
                border-radius: 4px;
            }
            .total {
                font-size: 20px;
                text-align: right;
                font-weight: bold;
                margin-top: 5px;
                width: 100%;
            }
            .total span {
                color: #4CAF50;
            }
            button, input[type=submit], input[type=number], select {
                cursor: pointer;
                font-size: 16px;
            }        
            .options-container {
                display: flex;
                flex-wrap: wrap; /* Asegura que el contenido se envuelva si es necesario */
                justify-content: space-between;
            }
                    
            .total-container {
                width: 100%; /* Ocupa el ancho completo */
                padding: 10px 20px; /* Padding para que coincida con el interior de las columnas */
                box-sizing: border-box;
            }
            .total {
                font-size: 20px;
                text-align: right;
                font-weight: bold;
                color: #4CAF50;
                margin-top: 20px; /* Espacio por encima del total */
                padding: 10px 0; /* Padding para el texto del total */
                border-top: 2px solid #ccc; /* Línea para separar las opciones del total */
            }
            .button-reset {
    padding: 10px 20px;
    margin-top: 20px;
    background-color: #ff4c4c;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16);
    transition: background-color 0.3s;
}

.button-reset:hover {
    background-color: #e04343;
}
        </style>
    </head>
    <body>

    <div class="tablet">
    <div class="header">
            <a href="index.php">&larr; Volver al menú principal</a>
            <h1>Blindados y Helicopteros</h1>
    </div>    

        <div class="options-container">
        <div class="column">
            <!-- Option groups for column 1 -->
            <div class="option-group">
                <label for="pintura">Precio de Pintura</label>
                <select id="pintura" class="option" name="pintura">
                    <option value="0">Estándar - 0€</option>
                    <option value="100">Metalizada - 100€</option>
                    <option value="200">Mate - 200€</option>
                </select>
            </div>
            <div class="option-group">
                <label for="ruedas">Precio de Ruedas</label>
                <select id="ruedas" class="option" name="ruedas">
                    <option value="0">Estándar - 0€</option>
                    <option value="100">Deportivas - 100€</option>
                    <option value="200">Alta performance - 200€</option>
                </select>
            </div>
            <div class="option-group">
                <label for="neon">Precio de Neon</label>
                <select id="neon" class="option" name="neon">
                    <option value="0">Sin Neon - 0€</option>
                    <option value="50">Neon Azul - 50€</option>
                    <option value="100">Neon Rojo - 100€</option>
                </select>
            </div>
            <div class="option-group">
                <label for="humo">Precio de Humo</label>
                <select id="humo" class="option" name="humo">
                    <option value="0">Sin Humo - 0€</option>
                    <option value="15">Humo Básico - 15€</option>
                    <option value="30">Humo de Colores - 30€</option>
                </select>
            </div>
            <div class="option-group">
                <label for="carroceria">Nivel de Carrocería</label>
                <select id="carroceria" class="option" name="carroceria">
                    <option value="0">Estándar - 0€</option>
                    <option value="100">Reforzada - 100€</option>
                    <option value="200">Carbono - 200€</option>
                </select>
            </div>
        </div>
        <div class="column">
            <!-- Option groups for column 2 -->
            <div class="option-group">
                <label for="blindaje">Nivel de Blindaje</label>
                <select id="blindaje" class="option" name="blindaje">
                    <option value="0">Sin Blindaje - 0€</option>
                    <option value="500">Blindaje Básico - 500€</option>
                    <option value="1000">Blindaje Militar - 1000€</option>
                </select>
            </div>
            <div class="option-group">
                <label for="frenos">Nivel de Frenos</label>
                <select id="frenos" class="option" name="frenos">
                    <option value="0">Estándar - 0€</option>
                    <option value="150">Deportivos - 150€</option>
                    <option value="300">Carrera - 300€</option>
                </select>
            </div>
            <div class="option-group">
                <label for="motor">Nivel de Motor</label>
                <select id="motor" class="option" name="motor">
                    <option value="0">Estándar - 0€</option>
                    <option value="500">Turbo - 500€</option>
                    <option value="1000">Turbo Plus - 1000€</option>
                </select>
            </div>
            <div class="option-group">
                <label for="suspension">Nivel de Suspension</label>
                <select id="suspension" class="option" name="suspension">
                    <option value="0">Estándar - 0€</option>
                    <option value="500">Turbo - 500€</option>
                    <option value="1000">Turbo Plus - 1000€</option>
                </select>
            </div>
            <div class="option-group">
                <label for="transmision">Nivel de Transmision</label>
                <select id="transmision" class="option" name="transmision">
                    <option value="0">Estándar - 0€</option>
                    <option value="500">Turbo - 500€</option>
                    <option value="1000">Turbo Plus - 1000€</option>
                </select>
            </div>
            <!-- Additional options go here -->
        </div>    
    </div> <!-- .options-container -->

    <button class="button-reset" onclick="resetOptions()">Borrar todo</button>

        <div class="total-container">
        <div class="total">
            Total a pagar: <span id="totalCost">0 €</span>
        </div>
    </div>
    </div>

    <script>
        function updateTotalCost() {
            var options = document.querySelectorAll('.option');
            var totalCost = 0;

            options.forEach(function(option) {
                totalCost += parseFloat(option.value);
            });

            document.getElementById('totalCost').textContent = totalCost.toFixed(2) + " €";
        }

        // Asignar el evento 'change' a todos los selectores de opción
        document.querySelectorAll('.option').forEach(function(option) {
            option.addEventListener('change', updateTotalCost);
        });

        // Inicializar el total al cargar la página
        document.addEventListener('DOMContentLoaded', updateTotalCost);

        function resetOptions() {
            var options = document.querySelectorAll('.option');
            
            options.forEach(function(option) {
                option.selectedIndex = 0;
            });

            updateTotalCost(); // Actualizar el total después de restablecer las opciones
        }

    </script>



    </body>
    </html>
