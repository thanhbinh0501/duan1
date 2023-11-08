<?php
include './process_send_mail.php';
$mail = $_POST['mail'];
$sub = $_POST['sub'];
$mess = $_POST['mess'];
$name = $_POST['name'];
send_email($mail, $sub, $mess, $name);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
        <div class="form-group">
            mail
            <input id="my-input" class="form-control" type="text" name="mail">
            tieu de
            <input id="my-input" class="form-control" type="text" name="sub">
            mess
            <input id="my-input" class="form-control" type="text" name="mess">
            ten
            <input id="my-input" class="form-control" type="text" name="name">
            <input type="submit" value="Send">
        </div>
    </form>
</body>

</html>