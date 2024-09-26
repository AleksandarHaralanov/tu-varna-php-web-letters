<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Letters</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <form method="post">
        <table>
            <tr>
                <td>
                    <center>
                        <h1>СЪЗДАВАНЕ НА ПИСМО(А)</h1>
                        <label for="firstName_Receiver">Име на получател:</label>
                        <input type="text" id="firstName_Receiver" name="firstName_Receiver" required /><br />
                        <label for="lastName_Receiver">Фамилия на получател:</label>
                        <input type="text" id="lastName_Receiver" name="lastName_Receiver" required /><br />
                        <hr />
                        <p>Съдържания:</p><br />
                        <textarea placeholder="Напр. 'Имаме удоволствието да ви поканим на открито изложение'" name="firstContext" rows="6" cols="65" required></textarea><br /><br />
                        <textarea placeholder="Напр. 'Бъдете 10 минути преди откритето!'" name="secondContext" rows="6" cols="65" required></textarea><br /><br />
                        <p>Послепис:</p><br />
                        <textarea placeholder="Напр. 'С уважение'" name="Afterword" rows="4" cols="40" required></textarea>
                        <hr />
                        <label for="firstName_Sender">Вашето име:</label>
                        <input type="text" id="firstName_Sender" name="firstName_Sender" required /><br />
                        <label for="lastName_Sender">Вашата фамилия:</label>
                        <input type="text" id="lastName_Sender" name="lastName_Sender" required /><br />
                        <hr />
                        <input type="submit" value="Изпрати" name="Submit" />
                        <input type="reset" value="Изчисти" />
                    </center>
                </td>
            </tr>
        </table>
    </form>
    <?php
    require "data.php";
    ?>
</body>
</html>
