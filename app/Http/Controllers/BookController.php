<?php

namespace App\Http\Controllers;

class BookController extends Controller
{
    public function index()
    {
        $books = [
            [
                'title' => 'Pemrograman PHP',
                'author' => 'Andi Pratama',
                'year' => 2022
            ],
            [
                'title' => 'Laravel untuk Pemula',
                'author' => 'Budi Santoso',
                'year' => 2023
            ],
            [
                'title' => 'Basis Data',
                'author' => 'Citra Lestari',
                'year' => 2021
            ],
            [
                'title' => 'Algoritma dan Pemrograman',
                'author' => 'Dewi Anggraini',
                'year' => 2024
            ],
            [
                'title' => 'Pemrograman Berorientasi Objek',
                'author' => 'Eko Saputra',
                'year' => 2023
            ],
            [
                'title' => 'Sistem Informasi',
                'author' => 'Fajar Nugraha',
                'year' => 2022
            ],
            [
                'title' => 'Jaringan Komputer',
                'author' => 'Gita Permata',
                'year' => 2024
            ],
            [
                'title' => 'Pengembangan Web',
                'author' => 'Hana Putri',
                'year' => 2025
            ]
        ];

        $stock = 7;

        return view('books.index', compact('books', 'stock'));
    }

    public function show($id)
    {
        return view('books.show', compact('id'));
    }
}