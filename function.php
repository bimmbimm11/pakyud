<?php 
function register ($post) {
    global $koneksi;
    $username = strtolower(stripslashes($post["username"]));
    $password = mysqli_real_escape_string($koneksi, $post
    ["password"]);
    $password2 = mysqli_real_escape_string($koneksi, $post
    ["password2"]);

    $result = mysqli_query($koneksi, "SELECT * FROM users WHERE
    username = '$username'");
}
?>