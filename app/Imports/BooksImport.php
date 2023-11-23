<?php

namespace App\Imports;

use App\Models\Book;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class BooksImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new Book([
            'title'        => $row['judul'],
            'author'       => $row['penulis'],
            'year'         => $row['tahun'],
            'publisher'    => $row['penerbit'],
            'city'         => $row['kota'],
            'quantity'     => $row['kuantitas'],
            'bookshelf_id' => $row['kode_rak'],
        ]);

        // return new Book($row);
    }
}
