<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Mi servono tutti i prodotti per la lista:
        $user = Auth::id();
        $queryLista =  DB::select('select * from products where user_id = ?', [$user]); 
        return view('products.lista', compact('queryLista')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Qui devo passare i dati per la creazione dove li passo anche la categoria:
        $allCategories = Category::all();
        return view('products.create', compact('allCategories')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     
        // Qui salvo i dati nuovi;
        $data = $request->all();
        $product = new Product();
        $this->fillAndSaveProducts($product, $data);
        return redirect()->route('product.index', $product->id);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        // Per la modifica dei prodotti:
        $categories = Category::all();
        $userId = Auth::id();
        if ($userId === $product->user_id) {
            return view('products.edit', compact('product', 'categories')); 
        } else {
            return view('products.error');
        }

    }
    // Funzione per la modifica dell'immagine prodotto:
    public function editImg(Product $product) {
        $userId = Auth::id();
        if ($userId === $product->user_id) {
            return view('products.editImg', compact('product'));
        } else {
            return view('products.error');
        }
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        // salvataggio dei nuovi:
        $data = $request->all();

        $product->name = $data['name'];
        $product->price = $data['price']; 
        $product->description = $data['description'];
        $product->category_id = $data['category'];
        $product->user_id = Auth::id();
        
        $product->save(); 

        return redirect()->route('product.index', $product);
    }

    public function updateImg(Request $request, Product $product)
    {
        $data = $request->all();
        $imgPath = Storage::put('uploadsEdit', $data['filePic']);
        $product->picture = $imgPath; 
        $product->save();
        return redirect()->route('product.index', $product);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function fillAndSaveProducts(Product $product, $data) {
        $product->name = $data['name'];
        $product->price = $data['price']; 
        $product->description = $data['description'];
        $product->category_id = $data['category'];
        $product->user_id = Auth::id();
        $imgPath = Storage::put('uploads', $data['filePic']);
        $product->picture = $imgPath; 
        $product->save(); 
    }

}
