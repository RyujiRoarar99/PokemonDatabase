<?php
    if ($legendary == 0)
    {
        if (($handle = fopen("Pokemon.csv","r")) !== FALSE) {
            echo "<table>";
            while (($data = fgetcsv($handle,1000,",")) !== FALSE) {
                $num = count($data);
                echo "<tr>";
                for ($c=0;$c < $num; $c++) {
                    echo "<td>".$data[$c]."</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        fclose($handle);
        }
    }
    else
    {
        if (($handle = fopen("Pokemon.csv","r")) !== FALSE) {
            echo "<table>";
            while (($data = fgetcsv($handle,1000,",")) !== FALSE) {
                $num = count($data);
                if ($data[$num - 1] == "True")
                {
                    echo "<tr>";
                    for ($c=0;$c < $num; $c++) {
                        echo "<td>".$data[$c]."</td>";
                    }
                    echo "</tr>";
                }
            }
            echo "</table>";
        fclose($handle);
        }
    }
?>
