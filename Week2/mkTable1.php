<html>
    <body>
        <h1> My Table </h1>
        <table border=1>
            <tr><th> X </th><th> X^2 </th></tr>
            <?php 
                for ($i=0; $i<10; $i++)
                {
                    $i2 = $i*$i;
                    print "<tr><td>$i</td><td>$i2</td></tr>" ;
                }
                ?>
        </table>
    </body>
</html>