<?php

use App\Models\Product;

function new_formatDate($value)
{
    return date('d M Y', strtotime($value));
}

function stockNotif()
{

    $pd = Product::select('id', 'name', 'qty')->where('qty', '<', 10)->get();

    return $pd;
}

function totalStockNotif()
{
    return count(stockNotif());
}

function formatRP($angka)
{
    $hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
    return $hasil_rupiah;
}
