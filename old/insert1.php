<style>
<?php include 'style1.css'; ?>
</style>
<?php
if (isset($_POST['sumbrit'])) {
    if (isset($_POST['username']) && isset($_POST['password'])&& 
		isset($_POST['email']) && isset($_POST['phone'])) {
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
		$create_date = date("Y-m-d");

        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "login_sys";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Select = "SELECT email FROM users WHERE email = ? LIMIT 1";
            $Insert = "INSERT INTO users(username, password, email, phone, create_date) values(?, ?, ?, ?, ?)";

            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;

            if ($rnum == 0) {
                $stmt->close();

                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("sssis",$username, $password, $email, $phone, $create_date);
                if ($stmt->execute()) {
                    echo "<div class='form'>
                  <h3>New record inserted sucessfully.</h3><br/>
                  </div>";
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo "<div class='form'>
                  <h3>Someone has already registered using this email.</h3><br/>
                  </div>";
            }
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo "All field are required.";
        die();
    }
}
else {
    echo "Sumbrit button is not set";
}
?>