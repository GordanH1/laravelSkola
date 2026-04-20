<?php

namespace App\Http\Controllers;

class BlogController extends Controller
{
    private $clanci = [
        [
            'id' => 1,
            'naslov' => 'Prvi članak',
            'sadrzaj' => 'Ovo je sadržaj prvog članka.',
            'autor' => 'Ivan',
            'datum' => '2026-04-01'
        ],
        [
            'id' => 2,
            'naslov' => 'Drugi članak',
            'sadrzaj' => 'Ovo je sadržaj drugog članka.',
            'autor' => 'Marko',
            'datum' => '2026-04-05'
        ],
        [
            'id' => 3,
            'naslov' => 'Treći članak',
            'sadrzaj' => 'Ovo je sadržaj trećeg članka.',
            'autor' => 'Ana',
            'datum' => '2026-04-10'
        ],
        [
            'id' => 4,
            'naslov' => 'Četvrti članak',
            'sadrzaj' => 'Ovo je sadržaj četvrtog članka.',
            'autor' => 'Petra',
            'datum' => '2026-04-15'
        ]
    ];

    public function index()
    {
        return view('blog.index', ['clanci' => $this->clanci]);
    }

    public function show(int $id)
    {
        foreach ($this->clanci as $clanak) {
            if ($clanak['id'] == $id) {
                return view('blog.show', ['clanak' => $clanak]);
            }
        }

        abort(404);
    }
}