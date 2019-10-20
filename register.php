 <?php
    $name = filter_var(trim($_POST['name']),
    FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']),
    FILTER_SANITIZE_STRING);
    $phone = filter_var(trim($_POST['phone']),
    FILTER_SANITIZE_STRING);
    
    if(mb_strlen($name) < 5 || mb_strlen($name) > 90){
        echo "Error name";
        exit();
    } else if(mb_strlen($email) < 3 || mb_strlen($email) > 50){
        echo "Error Name";
        exit();
    } else if(mb_strlen($phone) < 2 || mb_strlen($phone) > 20){
        echo "Error Pass";
        exit();
    }

    $mysql = new mysqli('185.136.166.20','test','toster','Dev_db');
    $mysql->query("INSERT INTO `DB_insert_rows` (`name`, `phone`, `email`)
    VALUES('$name', '$phone', '$email')");

    $mysql->close();
?>

<script>alert("Регистрация успешно завершена");
 window.location="index.html";
</script> 

