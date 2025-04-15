<?php

function delDB ($conn, $db) {
    $stmt = "DROP DATABASE IF EXISTS $db;";
    
    if (mysqli_query($conn, $stmt)) echo "Database $db udh ilang<br>";
    else { echo "Egk bs hapus database karena " . mysqli_error($conn) . "<br>"; return; }
}

function setDB ($conn, $db) {
    $stmt = "DROP DATABASE IF EXISTS $db; CREATE DATABASE $db;";
    
    if (mysqli_multi_query($conn, $stmt)) echo "Database $db telah dibuatz!<br>";
    else { echo "Egk bs buat database karena " . mysqli_error($conn) . "<br>"; return; }
    $conn = mysqli_connect('localhost', 'root', '', $db);

    $repo_url = 'https://github.com/codewara/indonesian_regions/archive/refs/heads/main.zip';
    $directory = 'repository/indonesian_regions-main/Database/';
    $zip_file = 'repository.zip';

    file_put_contents($zip_file, file_get_contents($repo_url));
    echo "Sedang men-download zip rahasia...<br>";

    $zip = new ZipArchive;
    if ($zip->open($zip_file) === TRUE) {
        echo "Membuka zip RAHASIA...<br>";
        $zip->extractTo('repository');
        $zip->close();
        unlink($zip_file);
        echo "Menghapus jejak zipzipzipzipzip<br>";
    } else echo "Alamao eror zipnya<br>";

    $sql_files = glob($directory . "*.sql");
    for ($i = count($sql_files) - 1; $i >= 0; $i--) {
        $sql_file = $sql_files[$i];
        if ($sql_file == $directory . "districts.sql") continue; // yang enih egk bleh
        echo "Sedang memasak $sql_file...<br>";
        $sql = file_get_contents($sql_file);
        if (mysqli_multi_query($conn, $sql)) {
            do if (mysqli_more_results($conn)) mysqli_next_result($conn);
            while (mysqli_more_results($conn) && mysqli_next_result($conn));
            echo "$sql_file sudah matang!<br>";
        } else echo "File $sql_file gosong gara gara " . mysqli_error($conn) . " chef!<br>";
    }

    if (is_dir('repository')) {
        $iterator = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator('repository', RecursiveDirectoryIterator::SKIP_DOTS),
            RecursiveIteratorIterator::CHILD_FIRST
        );

        foreach ($iterator as $file) {
            if ($file->isDir()) rmdir($file->getPathname());
            else unlink($file->getPathname());
        }

        rmdir('repository');
        echo "Jejak file rahasia udh disembunyikan!<br>";
    } else echo "Tch, knp eror sich.<br>";
}

$conn = mysqli_connect('[HOST]', '[USER]', '[PASSWORD]');
if (!$conn) die("Ga konek ke server krna " . mysqli_connect_error() . "<br>");

setDB($conn, '[DATABASE]'); // ganti jadi delDB kalo mau hapus
mysqli_close($conn);