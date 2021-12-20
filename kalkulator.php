<?php
include "config.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Firdaus Masitha</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
    <div class="header">
        <div class="header-logo">Kalkulator Sederhana</div>
    </div>
    <div class="satu">
        <table>
            <tr>
                <td colspan="5">
                    <input type="text" disabled id="output" value="0">
                </td>
            </tr>
            <tr>
                <td><button class="btn" onclick="btn('1')">1</button></td>
                <td><button class="btn" onclick="btn('2')">2</button></td>
                <td><button class="btn" onclick="btn('3')">3</button></td>
                <td><button class="btn opr" onclick="btn_opr(1)">*</button></td>
            </tr>
            <tr>
                <td><button class="btn" onclick="btn('4')">4</button></td>
                <td><button class="btn" onclick="btn('5')">5</button></td>
                <td><button class="btn" onclick="btn('6')">6</button></td>
                <td><button class="btn opr" onclick="btn_opr(2)">/</button></td>
            </tr>
            <tr>
                <td><button class="btn" onclick="btn('7')">7</button></td>
                <td><button class="btn" onclick="btn('8')">8</button></td>
                <td><button class="btn" onclick="btn('9')">9</button></td>
                <td><button class="btn opr" onclick="btn_opr(3)">-</button></td>
            </tr>
            <tr>
                <td><button class="btn" onclick="btn('0')">0</button></td>
                <td><button class="btn" onclick="koma()">.</button></td>
                <td><button class="btn clr" onclick="clr()">C</button></td>
                <td><button class="btn opr" onclick="btn_opr(4)">+</button></td>
            </tr>
            <tr>
                <td colspan="5"><button class="btn hsl" style="width: 100%" onclick="hitung()">=</button></td>
            </tr>
        </table>
        <script type="text/javascript" src="myscript.js"></script>  
    </div>
    <a href="logout.php" class="btn">Logout</a>
</body>
</html>
