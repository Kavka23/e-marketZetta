<?php

namespace App\Http\Controllers;

use App\Models\pemasok;
use App\Http\Requests\StorepemasokRequest;
use App\Http\Requests\UpdatepemasokRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
use PDO;
use PDOException;
use Exception;

class PemasokController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // try {

        $data['pemasok'] = Pemasok::orderBy('created_at', 'DESC')->get();
        return view('pemasok.index')->with($data);
        //} catch (QueryException | Exception | PDOException $error) {
        // $this->failResponse($error->getMessage(), $error->getCode());
        // return 'awokwao eror' . $error->getMessage();
        // }
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
    public function store(StorepemasokRequest $request)
    {
        //try {
        //  DB::beginTransaction();
        Pemasok::create($request->all());

        //DB::commit();

        return redirect('pemasok')->with('success' . "Input data berhasil");
        //} catch (QueryException | Exception | PDOException $error) {
        //  DB::rollBack();
        // $this->failResponse($error->getMessage(), $error->getCode());
        //return 'awokwao eror' . $error->getMessage();
        //}
    }

    /**
     * Display the specified resource.
     */
    public function show(pemasok $pemasok)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pemasok $pemasok)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepemasokRequest $request, pemasok $pemasok)
    {
        $pemasok->update($request->all());

        return redirect('pemasok')->with('success', 'Update data berhasil!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pemasok $pemasok)
    {
        $pemasok->delete();
        return redirect('pemasok')->with('success', 'delete data berhasil!');
    }
}
