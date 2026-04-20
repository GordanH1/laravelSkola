<?php

namespace App\Http\Controllers;

class KnjigaController extends Controller
{
    public function index()
    {
        $knjige = [
            ['naslov' => '1984', 'autor' => 'George Orwell', 'godina' => 1949],
            ['naslov' => 'Metamorfoza', 'autor' => 'Franz Kafka', 'godina' => 1915],
            ['naslov' => 'Proces', 'autor' => 'Franz Kafka', 'godina' => 1925],
            ['naslov' => 'Alkemičar', 'autor' => 'Paulo Coelho', 'godina' => 1988],
            ['naslov' => 'Lovac u žitu', 'autor' => 'J. D. Salinger', 'godina' => 1951],
        ];

        return view('knjige.index', compact('knjige'));
    }
}