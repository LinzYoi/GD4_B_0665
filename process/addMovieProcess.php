<?php
if (isset($_POST['addMovie'])) {
    include('../db.php');
    $judul = $_POST['name'];
    $genre = $_POST['genre'];
    $realese = $_POST['realese'];
    $season = $_POST['season'];
    $synopsis = $_POST['synopsis'];

    $query = mysqli_query(
        $con,
        "INSERT INTO movies(name,genre,realese,season,synopsis) VALUES('$name', '$genre', '$realese', '$season', '$synopsis')") or die(mysqli_error($con));
    if ($query) {
        echo
        '<script>
        alert("Tambah Movie Success"); 
        window.location = "../page/listMoviesPage.php"
        </script>';
    } else {
        echo
        '<script>
        alert("Tambah Movie Failed");
        window.location = "../page/listMoviesPage.php"
        </script>';
    }
}else {
    echo
    '<script>
    window.history.back()
    </script>';
}
?>