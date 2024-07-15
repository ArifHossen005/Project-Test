<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected static $product;
    protected $fillable = [
        'category_id',
        'subCategory_id',
        'pname',
        'price',
        'product_date',
        'image',
        'status',
    ];

    protected static $productImage, $imageName, $imageDirectory, $imageUrl;

    public static function createProduct($request)
    {
        self::$productImage = $request->file('image');
        self::$imageName = rand(10, 1000) . self::$productImage->getClientOriginalName();
        self::$imageDirectory = 'backend/img/';
        self::$productImage->move(self::$imageDirectory, self::$imageName);
        self::$imageUrl = self::$imageDirectory . self::$imageName;

        self::$product = new Product();
        self::$product->category_id = $request->category_id;
        self::$product->subCategory_id = $request->subCategory_id;
        self::$product->pname = $request->pname;
        self::$product->price = $request->price;
        self::$product->product_date = $request->product_date;
        self::$product->image = self::$imageUrl;
        self::$product->status = $request->status;
        self::$product->save();
    }

    public static function updateProduct($request, $id)
    {
        self::$product = Product::find($id);

        self::$productImage = $request->file('image');
        if (self::$productImage) {
            if (file_exists(self::$product->image)) {
                unlink(self::$product->image);
            }
            self::$imageName = rand(10, 1000) . self::$productImage->getClientOriginalName();
            self::$imageDirectory = 'backend/img/';
            self::$productImage->move(self::$imageDirectory, self::$imageName);
            self::$imageUrl = self::$imageDirectory . self::$imageName;
        } else {
            self::$imageUrl = self::$product->image;
        }

        self::$product->category_id = $request->category_id;
        self::$product->subCategory_id = $request->subCategory_id;
        self::$product->pname = $request->pname;
        self::$product->price = $request->price;
        self::$product->product_date = $request->product_date;
        self::$product->image = self::$imageUrl;
        self::$product->status = $request->status;
        self::$product->save();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class, 'sub_category_id');
    }
}
