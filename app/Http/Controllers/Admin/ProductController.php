<?php

namespace App\Http\Controllers\admin;

use App\Models\Product;
use Flasher\Toastr\Prime\ToastrInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ProductController extends Controller
{

    protected $toastr;

    public function __construct(ToastrInterface $toastr)
    {
        $this->toastr = $toastr;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        if ($request->ajax()) {
            $product = Product::all();
            return DataTables::of($product)
                ->addIndexColumn() 
                ->addColumn('product_image', function ($row) {
                    if ($row->product_image	) {
                        return '<img src="' . asset($row->product_image) . '" alt="product image" class="img-fluid center-image" style="max-width: 40px; display: block; margin: 0 auto;">';
                    } else {
                        return 'No logo uploaded';
                    }
                })
                ->addColumn('action', function ($row) {
                    $actionbtn = '<a href="javascript:void(0)" class="btn btn-primary btn-sm me-1 edit" data-id="' . $row->id . '" data-bs-toggle="modal" data-bs-target="#editModal">
                                    <i class="fa fa-edit"></i>
                                  </a>
                                    <button class="btn btn-danger btn-sm delete" data-id="' . $row->id . '">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                <form id="delete-form-' . $row->id . '" action="' . route('product.destroy', $row->id) . '" method="POST" style="display: none;">
                                    ' . csrf_field() . '
                                    ' . method_field('DELETE') . '
                                </form>';
                    return $actionbtn;
                })
                ->rawColumns(['product_image', 'action'])
                ->make(true);
        }
        return view('admin.pages.product.index');
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'product_title' => 'required|string|max:255',
            'product_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        Product::newProduct($request);
        $this->toastr->success('Product info created successfully!');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.pages.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        // Validate the request
        $validated = $request->validate([
            'product_title' => 'required|string|max:255',
            'product_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        // Check if a new image file is uploaded
        if ($request->hasFile('product_image')) {
            // Delete the old image if it exists
            if ($product->product_image && file_exists(public_path($product->product_image))) {
                unlink(public_path($product->product_image));
            }
    
            // Upload the new image
            $image = $request->file('product_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = 'uploads/products/';
            $image->move(public_path($imagePath), $imageName);
    
            // Update the image path
            $product->product_image = $imagePath . $imageName;
        }
    
        // Update the rest of the fields
        $product->update([
            'product_title' => $validated['product_title'], 
        ]);
    
        // Success message
        toastr()->success('Product info updated successfully!');
        return back();
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        $this->toastr->success('Product info Deleted successfully!');
        return back();
    }
}
