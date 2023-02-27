<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>View Roll Number Attendance</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            @import url(https://fonts.googleapis.com/css?family=Montserrat);


            ** {
                box-sizing: border-box;
            }

            body {
                font-family: Arial;
                padding: 10px;
                background: #f1f1f1;
            }

            .header {
                padding: 30px;
                text-align: center;
                background: white;
            }
            #msform {
                width: 900px;
                margin: 50px auto;
                text-align: center;
                position: relative;
            }
            #msform fieldset {
                background: white;
                border: 0 none;
                border-radius: 3px;
                box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
                padding: 20px 30px;
                box-sizing: border-box;
                width: 80%;
                margin: 0 10%;
                position: relative;
            }
            #msform fieldset:not(:first-of-type) {
                display: none;
            }
            #msform input, #msform textarea {
                padding: 15px;
                border: 1px solid #ccc;
                border-radius: 3px;
                margin-bottom: 10px;
                width: 100%;
                box-sizing: border-box;
                font-family: montserrat;
                color: #2C3E50;
                font-size: 13px;
            }
            #msform .action-button {
                width: 300px;
                background: #ff6633;
                font-weight: bold;
                color: white;
                border: 0 none;
                border-radius: 1px;
                cursor: pointer;
                padding: 10px 5px;
                margin: 10px 5px;
            }
            #msform .action-button:hover, #msform .action-button:focus {
                box-shadow: 0 0 0 2px white, 0 0 0 3px #27AE60;
            }
            .fs-title {
                font-size: 15px;
                text-transform: uppercase;
                color: #ff6633;
                margin-bottom: 10px;

            }
            .fs-subtitle {
                font-weight: normal;
                font-size: 13px;
                color: #ff6633;
                margin-bottom: 20px;
            }

            .img {
                box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
            }
            a:link, a:visited {
                background-color: #ff6633;
                color: white;
                padding: 15px 25px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
            }

            a:hover, a:active {
                background-color: red;}
            table {
                border-collapse: collapse;
                width: 100%;
            }
            th, td {
                padding: 8px;
                border-bottom: 1px solid #DDD;
            }
            tr:hover {background-color: #D6EEEE;}

        </style>
    </head>
    <body>
        <div class="header">
            <img src="images\banner.jpg" alt="TCSC Banner" width="1400" height="150" class="img">
        </div>
        <form id="msform" method="post" action="View_Roll_Number_Attendance.php">
            <fieldset>
                <h3 class="fs-title">View Roll Number Attendance</h3><br>
                Class: <input type="text" name="uid_class" required>
                UID: <input type="text" name="uid_std" required>
                <input type="submit" name="std_btn" class="action-button">
            </fieldset>
        </form>
    </body>
</html>