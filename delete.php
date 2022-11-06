<?php
    $polaczennie = new mysqli('localhost', 'root', '', 'studenci');

    $sql = "DELETE FROM Studenci WHERE id_studenta = $_GET[id_s]";

    $wynik=$polaczennie->query($sql);
?>