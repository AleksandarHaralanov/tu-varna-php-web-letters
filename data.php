<?php
if (isset($_POST["Submit"])) {
    $receiverFirstName = $_POST["firstName_Receiver"];
    $receiverLastName = $_POST["lastName_Receiver"];
    $firstContext = $_POST["firstContext"];
    $secondContext = $_POST["secondContext"];
    $afterword = $_POST["Afterword"];
    $senderFirstName = $_POST["firstName_Sender"];
    $senderLastName = $_POST["lastName_Sender"];

    if (!file_exists("letters.txt")) {
        $letters = fopen("letters.txt", "w+");
        fwrite($letters,
            "Уважаеми (а), $receiverFirstName $receiverLastName<br />\n" .
            "$firstContext<br />\n" .
            "$secondContext<br />\n" .
            "$afterword, $senderFirstName $senderLastName!" . "\n\n"
        );
    } else {
        $letters = fopen("letters.txt", "a+");
        fwrite($letters,
            "<hr />Уважаеми (а), $receiverFirstName $receiverLastName<br />\n" .
            "$firstContext<br />\n" .
            "$secondContext<br />\n" .
            "$afterword, $senderFirstName $senderLastName!" . "\n\n"
        );
    }
    fclose($letters);
    echo file_get_contents("letters.txt");
}
?>
