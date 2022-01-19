<?php

namespace App\Imports;

use App\Models\Aset;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class AsetsImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Aset([
            'user_id' => $row["user_id"],
            'kategori_aset_id' => $row["kategori_aset_id"],
            'kode_barang' => $row["kode_barang"],
            'nama_barang' => $row["nama_barang"],
            'merk_tipe' => $row["merktipe"],
            'ukuran' => $row["ukuran"],
            'bahan' => $row["bahan"],
            'tahun_pembelian' => $row["tahun_pembelian"],
            'harga' => $row["harga"],
            'keterangan' => $row["keterangan"],
        ]);
    }
}
