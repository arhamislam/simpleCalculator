<!--
    Author: Arham Islam
    File Description: Calculator
    Date Created: July 22, 2023
-->

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="styles.css">
        <link rel="icon" href="favicon.ico">
        <title>Calculator</title>
    </head>
    <body>
        <div class="col-2 m-5 p-1 rounded-4 calcBody">
            <div class="m-3 rounded-3 calcSum" id="calcSum">
                PLACEHOLDER PLACEHOLDER PLACEHOLDER PLACEHOLDER PLACEHOLDER PLACEHOLDER
            </div>
            <!-- <div class="m-3 d-flex justify-content-between">
                <button type="button" class="btn btn-light btn-lg rounded-5">0</button>
                <button type="button" class="btn btn-light btn-lg rounded-5">0</button>
                <button type="button" class="btn btn-light btn-lg rounded-5">0</button>
                <button type="button" class="btn btn-light btn-lg rounded-5">0</button>
            </div>
            <div class="m-3 d-flex justify-content-between">
                <button type="button" class="btn btn-light btn-lg rounded-5">0</button>
                <button type="button" class="btn btn-light btn-lg rounded-5">0</button>
                <button type="button" class="btn btn-light btn-lg rounded-5">0</button>
                <button type="button" class="btn btn-light btn-lg rounded-5">0</button>
            </div>
            <div class="m-3 d-flex justify-content-between">
                <button type="button" class="btn btn-light btn-lg rounded-5">0</button>
                <button type="button" class="btn btn-light btn-lg rounded-5">0</button>
                <button type="button" class="btn btn-light btn-lg rounded-5">0</button>
                <button type="button" class="btn btn-light btn-lg rounded-5">0</button>
            </div>
            <div class="m-3 d-flex justify-content-between">
                <button type="button" class="btn btn-light btn-lg rounded-5">0</button>
                <button type="button" class="btn btn-light btn-lg rounded-5">0</button>
                <button type="button" class="btn btn-light btn-lg rounded-5">0</button>
                <button type="button" class="btn btn-light btn-lg rounded-5">0</button>
            </div>
            <div class="m-3 d-flex justify-content-between">
                <button type="button" class="btn btn-light btn-lg rounded-5">0</button>
                <button type="button" class="btn btn-light btn-lg rounded-5">0</button>
                <button type="button" class="btn btn-light btn-lg rounded-5">0</button>
                <button type="button" class="btn btn-light btn-lg rounded-5">0</button>
            </div> -->
            <div class="m-3 d-flex justify-content-between">
                <button type="button" class="btn btn-light btn-lg rounded-5">C</button>
                <button type="button" class="btn btn-light btn-lg rounded-5">+/-</button>
                <button type="button" class="btn btn-light btn-lg rounded-5">%</button>
                <button type="button" class="btn btn-light btn-lg rounded-5">÷</button>
            </div>
            <div class="m-3 d-flex justify-content-between">
                <button type="button" class="btn btn-light btn-lg rounded-5">7</button>
                <button type="button" class="btn btn-light btn-lg rounded-5">8</button>
                <button type="button" class="btn btn-light btn-lg rounded-5">9</button>
                <button type="button" class="btn btn-light btn-lg rounded-5">×</button>
            </div>
            <div class="m-3 d-flex justify-content-between">
                <button type="button" class="btn btn-light btn-lg rounded-5">4</button>
                <button type="button" class="btn btn-light btn-lg rounded-5">5</button>
                <button type="button" class="btn btn-light btn-lg rounded-5">6</button>
                <button type="button" class="btn btn-light btn-lg rounded-5">-</button>
            </div>
            <div class="m-3 d-flex justify-content-between">
                <button type="button" class="btn btn-light btn-lg rounded-5" onclick="sum('1')">1</button>
                <button type="button" class="btn btn-light btn-lg rounded-5" onclick="sum('2')">2</button>
                <button type="button" class="btn btn-light btn-lg rounded-5" onclick="sum('3')">3</button>
                <button type="button" class="btn btn-light btn-lg rounded-5" onclick="sum('+')">+</button>
            </div>
            <div class="m-3 d-flex justify-content-between">
                <button type="button" class="btn btn-light btn-lg rounded-5">0</button>
                <button type="button" class="btn btn-light btn-lg rounded-5"></button>
                <button type="button" class="btn btn-light btn-lg rounded-5">.</button>
                <button type="button" class="btn btn-light btn-lg rounded-5">=</button>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <script>
            function sum(button) {
                window.location = "index.php?button=" + button;

                // var xhttp = new XMLHttpRequest();

                // xhttp.onreadystatechange = function() {
                //     if(this.readyState == 4 && this.status == 200) {
                //         // calcSum.innerHTML = this.responseText;
                //     }
                // }

                // xhttp.open("GET", "index.php?button=" + button);
                // xhttp.send();
            }

            // var xhttp = new XMLHttpRequest();

            // xhttp.onreadystatechange = function() {
            //     if(this.readyState == 4 && this.status == 200) {
            //         calcSum.innerHTML = this.responseText;
            //     }
            // }

            // xhttp.open("GET", "ajax.php");
            // xhttp.send();
        </script>
    </body>
</html>

