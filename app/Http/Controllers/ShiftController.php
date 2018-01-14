<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shift;
use Mockery\Exception;
use Yajra\DataTables\DataTables;

class ShiftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
               return view('admin/shift/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        Shift::create($input);

        return response()->json([
            'success' => true,
            'message' => 'Data Shift Baru di Buat'
        ]);
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
    public function edit($id)
    {
       $shift = Shift::findOrFail($id);

       return $shift;
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $shift = Shift::findOrFail($id);
        $shift->update($input);
        return response()->json([
            'success' => true,
            'message' => 'Update Shift Berhasil'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $shift = Shift::findOrFail($id);

        Shift::destroy($id);

        return response()->json([
            'success' => true,
            'message' => 'Data Shift di Hapus'
        ]);
    }

    public function apiShift()
    {
        $shift = Shift::all();

        return Datatables::of($shift)
            ->addColumn('action', function($shift){
                return 
                    ' <a href="" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-eye-open"></i> Show</a> ' .
                    ' <a class="btn btn-primary btn-xs" onclick="editForm('. $shift->id_shift .')"><i class="glyphicon glyphicon-edit"></i> Edit</a> ' .
                    ' <a class="btn btn-danger btn-xs" onclick="deleteData('. $shift->id_shift .')"><i class="glyphicon glyphicon-trash"></i> Delete</a> ';
            })
            ->editColumn('shift_lapangan', 'Lapangan {{$shift_lapangan}}')
            ->editColumn('id_shift', 'SHF00{{$id_shift}}')
            ->editColumn('harga', 'Rp. {{$harga}}')
            ->make(true);
    }
}
