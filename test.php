<html>
<head>
<title>Numéro de téléphone de LA GLOBULE</title>
</head>
	<body>
	
	<p>
  <?php
ini_set('display_errors',1);


$dbHost = 'uxdesignzqtonche.mysql.db';
$dbBase = 'uxdesignzqtonche';
$dbUser = 'uxdesignzqtonche';
$dbPassword = '0045Wasabi';

echo "<p>Php version :" . phpversion() . "</p>\n";
echo "<pre>\n";

/*** msqli procédural ***/
$mysqli = mysqli_connect( $dbHost, $dbUser, $dbPassword, $dbBase );
if ( mysqli_connect_errno( $mysqli ) ) {
	echo "Échec connexion mysqli_connect : " . mysqli_connect_error() . "<br>\n";
 } else {
	echo "Connexion possible avec mysqli_connect (procédural)<br>\n";
}
// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT  * FROM `comptability`";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["unite"]. " " . $row["extra"]. "<br>";
        echo "id: " . $row["id"]. " - Name: " . $row["unite"]. " " . $row["extra"]. "<br>";
        echo "id: " . $row["id"]. " - Name: " . $row["unite"]. " " . $row["extra"]. "<br>";
    }
} else {
    echo "0 results";
}
$mysqli->close();
		// Create connection

		echo 'Current PHP version: ' . phpversion();


?>

	</p>
	<p>&nbsp;</p>
	<table data-mysignature-date="2020-01-28T10:35:19.635Z" data-mysignature-is-paid="1" cellspacing="0" width="550" cellpadding="0" border="0">
	  <tbody>
	    <tr>
	      <td><table cellspacing="0" cellpadding="0" border="0">
	        <tbody>
	          <tr>
	            <td valign="top"><table cellspacing="0" cellpadding="0" border="0">
	              <tbody>
	                <tr>
	                  <td>Antoine Schuppisser</td>
                    </tr>
	                <tr>
	                  <td><div>ux designer</div></td>
                    </tr>
                  </tbody>
	              </table></td>
	            <td valign="center"><table cellspacing="0" cellpadding="0" border="0">
	              <tbody>
	                <tr>
	                  <td><div>M   <a href="tel:+32 479500915">+32 479500915</a></div></td>
                    </tr>
	                <tr>
	                  <td><div>E   <a href="mailto:antoineweb@gmail.com" target="_blank">antoineweb@gmail.com</a> </div></td>
                    </tr>
	                <tr>
	                  <td><div><a href="http://www.ux-design.be/" target="_blank">www.ux-design.be</a></div></td>
                    </tr>
                  </tbody>
	              </table></td>
              </tr>
            </tbody>
	        </table></td>
        </tr>
      </tbody>
    </table>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	</body>
	
	</htm>