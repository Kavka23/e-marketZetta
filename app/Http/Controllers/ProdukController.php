<?php

namespace App\Http\Controllers;

use App\Models\produk;
use App\Http\Requests\StoreprodukRequest;
use App\Http\Requests\UpdateprodukRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
use PDO;
use PDOException;
use Exception;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {

            $data['produk'] = Produk::orderBy('created_at', 'DESC')->get();
            return view('produk.index')->with($data);
        } catch (QueryException | Exception | PDOException $error) {
            // $this->failResponse($error->getMessage(), $error->getCode());
            return 'awokwao eror' . $error->getMessage();
        }
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
    public function store(StoreprodukRequest $request)
    {
        try {
            DB::beginTransaction();
            Produk::create($request->all());

            DB::commit();

            return redirect('produk')->with('success' . "Input data berhasil");
        } catch (QueryException | Exception | PDOException $error) {
            DB::rollBack();
            // $this->failResponse($error->getMessage(), $error->getCode());
            return 'awokwao eror' . $error->getMessage();
        }
    }



    /**
     * Display the specified resource.
     */
    public function show(produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(produk $produk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateprodukRequest $request, produk $produk)
    {
        $produk->update($request->all());

        return redirect('produk')->with('success', 'Update data berhasil!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(produk $produk)
    {
        $produk->delete();
        return redirect('produk')->with('success', 'delete data berhasil!');
    }
}
