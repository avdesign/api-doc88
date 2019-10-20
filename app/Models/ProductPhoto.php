<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductPhoto extends Model
{
    const BASE_PATH = 'app/public';
    const DIR_PRODUCTS = 'products';

    const PRODUCTS_PATH = self::BASE_PATH . '/' . self::DIR_PRODUCTS;

    protected $fillable = ['file_name','product_id'];


    /**
     * Caminho absoluto até a pasta que vai conter as imagens dos produtos
     *
     * @param $productId
     * @return string
     */
    public static function photosPath($productId)
    {
        $dir = self::PRODUCTS_PATH;
        return storage_path("{$dir}/{$productId}");
    }
}
