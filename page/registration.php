<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Registration Form</title>
    <link rel="stylesheet" href="../data/style_conect.css" type="text/css">
</head>
<body>
    <h1>Registration Form</h1>
    <form id="form1" action="index.html">
        <table>
            <tr>
                <td><label for="username">Username:</label></td>
                <td><input type="text" id="txtUsername" name="UserName" size="12" 
                    minlength="7" maxlength="12" required/></td>

            </tr>
           
            
           
            <tr>
                <td><label for="zipcode">Mastery</label></td>
                <td><input type="number" id="txtZipcode" name="Mastery" size="12" 
                    required/></td>
            </tr>
            
            <tr>
                <td><label for="Gender">Gender:</label></td>
                
                    <td>
                    <input type="radio" id="btnMale" name="gender" value="male"/>
                    <span for="btnMale">Male</span>
                    
                    <input type="radio" id="btnFemale" name="gender" value="female"/>
                    <span for="btnFemale">Female</span>
                    </td>
            </tr>
            <tr>
                <td> </td>
                <td><input type="submit" id="btnSubmit" value="Register" onclick="validateForm()" />
                    <input type="submit" id="btnClear" value="Clear" />
                    <input type="submit" id="invit" value="Continue to invited" src="index.html"/>
                </td>
            </tr>
        </table>
    </form>
<php 
$dsn = 'mysql:host=localhost;dbname=player;
        port=3306';


$pdo = new PDO($dsn, 'root' , '');
?>

</body>
</html>