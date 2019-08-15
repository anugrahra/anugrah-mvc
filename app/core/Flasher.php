<?php

class Flasher {
    public static function setFlash($jenis, $pesan, $aksi, $tipe)
    {
        $_SESSION['flash'] = [
            'jenis' => $jenis,
            'pesan' => $pesan,
            'aksi' => $aksi,
            'tipe' => $tipe
        ];
    }

    public static function flash()
    {
        if (isset($_SESSION['flash'])){
            echo '<div class="flash" style="color:' . $_SESSION['flash']['tipe'] . ';"> ' . $_SESSION['flash']['jenis'] . ' telah <strong>' . $_SESSION['flash']['pesan'] . '</strong> ' . $_SESSION['flash']['aksi'] . '</div>';
            
            unset($_SESSION['flash']);
        }
    }
}