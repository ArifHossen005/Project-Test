<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Laravel\Prompts\select;

class Category extends Model
{
    protected $fillable = ['cat_name', 'sub_name', 'status'];

    protected static $category;

    public static function createCategory($request)
    {
        self::$category = new Category();
        self::$category->name = $request->name;
        self::$category->status = $request->status;
        self::$category->save();
    }

    public static function updateCategory($request, $id)
    {
        self::$category = Category::find($id);
        self::$category->name = $request->name;
        self::$category->status = $request->status;
        self::$category->save();
    }
}
