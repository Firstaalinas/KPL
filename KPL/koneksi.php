<?php
/* nama server kita */
$servername = "localhost";

/* nama database kita */
$database = "tugas_kpl";

/* nama user yang terdaftar pada database (default: root) */
$username = "root";

/* password yang terdaftar pada database (default : "") */
$password = "";

/* membuat koneksi */
$conn = mysqli_connect($servername, $username, $password, $database);