

<form action="./index.php" method="get">

<label for="guestName">inserisci nome</label>
<input type="text" name="name" id="guestName">

<label for="guestMail">inserisci mail</label>
<input type="text" name="mail" id="guestMail">

<label for="guestAge">inserisci età</label>
<input type="number" name="age" id="guestAge">

<button type="submit">invia</button>


</form>

<?php 

$guestName = $_GET['name'];
$guestMail = $_GET['mail'];
$guestAge = $_GET['age'];


if (isset($_GET['name'] /*$guestName*/) && ($_GET['mail'] /*$guestMail*/) && ($_GET['age'] /*$guestAge*/)){   //se ci sono name,mail e age allora procedi
    if (strlen($guestName) > 3){
        if (str_contains($guestMail, '.') && str_contains($guestMail, '@' ))     {
            if (is_numeric($guestAge)){
                echo 'accesso riuscito';
            }
            else{
                echo 'accesso negato';
            }

            }else{
                echo ' accesso negato';
            }
        }else{
            echo 'accesso negato';
        }
}   else {
    echo 'accesso negato';
}

?>