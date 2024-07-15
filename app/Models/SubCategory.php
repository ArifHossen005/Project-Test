<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $fillable = ['category_id', 'sname', 'status'];

    protected static $subCategory;

    public static function createSubCategory($request)
    {
        self::$subCategory                      = new SubCategory();
        self::$subCategory->category_id         = $request->category_id;
        self::$subCategory->sname               = $request->sname;
        self::$subCategory->status              = $request->status;
        self::$subCategory->save();
    }

    public static function updateSubCategory($request, $id)
    {
        self::$subCategory = SubCategory::find($id); // Corrected to find the SubCategory
        if (self::$subCategory) {
            self::$subCategory->category_id = $request->category_id;
            self::$subCategory->sname = $request->sname;
            self::$subCategory->status = $request->status;
            self::$subCategory->save();
        } else {
            throw new \Exception("SubCategory not found");
        }
    }
}
