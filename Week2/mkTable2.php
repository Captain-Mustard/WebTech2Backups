<?php

// Print the HTML and table headings.
print <<<EOS
 <html>
	<body>
		<h1> My Table </h1>
		<table border=1>
			<tr> <th> x </th> <th> x^2 </th> </tr>
EOS;

// Print each row of the table.
for ($i = 0; $i < 10; $i++) {
    $i2 = $i * $i;
    print "<tr><td>$i</td><td>$i2</td></tr>";
}

// Close the table.  Close the HTML.
print <<<EOS
		</table>
	</body>
 </html>
EOS;

?>