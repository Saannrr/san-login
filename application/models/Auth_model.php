<?php

class Auth_model extends CI_Model
{

    public function login($username, $password)
    {
        // Kode untuk proses login
        // Contoh validasi username dan password
        if ($username === 'admin' && $password === 'admin123') {
            return true; // Login berhasil
        } else {
            return false; // Login gagal
        }
    }

    public function register($username, $password, $email)
    {
        // Kode untuk proses registrasi
        // Contoh penyimpanan data registrasi ke database
        $data = array(
            'username' => $username,
            'password' => $password,
            'email' => $email
        );
        // Simpan data ke database
    }

    // Tambahkan fungsi-fungsi lainnya sesuai kebutuhan

}
