<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class Product extends Model
{
     use HasFactory;

    private static $image, $imageName, $directory, $imageUrl;

    // Fillable fields to allow mass assignment
    protected $fillable = [
        'product_image',
        'product_title',
    ];

            // Function to upload and resize image
private static function getImageUrl($request)
{
    self::$image = $request->file('product_image');
    if (self::$image) {
        self::$imageName = time() . '_' . self::$image->getClientOriginalName(); // Unique image name
        self::$directory = "upload/products/";
        self::$image->move(self::$directory, self::$imageName);

        // Resize the image using Intervention Image
        $imageManager = new ImageManager(new Driver());
        $image = $imageManager->read(self::$directory . self::$imageName);
        $image->resize(1200, 600); // Resize to required dimensions
        $image->save(self::$directory . self::$imageName);

        self::$imageUrl = self::$directory . self::$imageName;
        return self::$imageUrl;
    }
    return null;
    }

       // Create a new Rent entry
       public static function newProduct($request)
       {
           self::$imageUrl = $request->file('product_image') ? self::getImageUrl($request) : '';
   
           $product = new self();
           self::saveBasicInfo($product, $request, self::$imageUrl);
       }

               // Update an existing About entry
    public static function updateProduct($request, $id)
    {
    // Fetch the team record using the ID
    $product = self::findOrFail($id);

        if ($request->file('product_image')) {
            if (file_exists($product->product_image)) {
            unlink($product->product_image);
            }
        self::$imageUrl = self::getImageUrl($request);
        } else {
        self::$imageUrl = $product->product_image;
    }

    self::saveBasicInfo($product, $request, self::$imageUrl);
        }

          // Save or update basic info in the database
   private static function saveBasicInfo($product, $request, $imageUrl)
   {
       $product->product_image           = $imageUrl;
       $product->product_title          = $request->product_title;
       $product->save();
   }


   // Delete an Rent entry
public static function deleteProduct($product)
{
    if (file_exists($product->product_image)) {
        unlink($product->product_image);
    }
    
    $product->delete();

    }
}
