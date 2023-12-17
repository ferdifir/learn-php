<?php

echo 'Nama : ';
echo 'Ferdi Firmansyah';
echo "\n";

echo "Nama : ";
echo "Ferdi\t Firmansyah\n";

echo <<<FERDI
Selamat belajar PHP
Sekarang, kita belajar tipe data string
Ini adalah cara ke-3 membuat string
bisa menggunakan heredoc


FERDI;

echo <<<'FERDI'
Selamat belajar PHP
Sekarang, kita belajar tipe data string
Ini adalah cara ke-3 membuat string
bisa menggunakan nowdoc
FERDI;