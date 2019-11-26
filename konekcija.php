<?php

// objekat konekcije 
$conn = new mysqli('localhost', 'root', '', 'fakultetiv1') or 
        die("Konekcija sa bazom neuspesna".$conn->error);

