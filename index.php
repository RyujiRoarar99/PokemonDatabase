<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet"
              href="http://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
              integrity=
                  "sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
                  crossorigin="anonymous"> 
        <link rel="stylesheet" href="Table.css"> <!-- Need to come after top line to ref bootstrap -->
        <title>Pokemon Database</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <header>
            <h1>Pokemon Database</h1>
        </header>
        <?php
            $legendary = 0;
            if(array_key_exists('legendary', $_POST))
            {
                ChangeLegendary();
            }
            if(array_key_exists('normal', $_POST))
            {
                ChangeNormal();
            }
            function ChangeLegendary()
            {
                global $legendary;
                $legendary = 1;
            }
            function ChangeNormal()
            {
                global $legendary;
                $legendary = 0;
            }
        ?>
        <form method="post">
            <input type="submit" name="legendary" class="button" value="Show Legendary Only"/>
            <input type="submit" name="normal" class="button" value="Show everything"/>
        </form>
        <main>
            <?php include "DatabaseExtraction.php"?>
        </main>
    </body>
</html>
