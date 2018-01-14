<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use App\Shift;
use Mockery\Exception;
use Yajra\DataTables\DataTables;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
               return view('admin/booking/index');
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

        Booking::create($input);

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
       $booking = Booking::findOrFail($id);

       return $booking;
       
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
        $booking = Booking::findOrFail($id);
        $booking->update($input);
        return response()->json([
            'success' => true,
            'message' => 'Update booking Berhasil'
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
        $booking = Booking::findOrFail($id);

        Booking::destroy($id);

        return response()->json([
            'success' => true,
            'message' => 'Data booking di Hapus'
        ]);
    }

    public function apiBooking()
    {   
        
        $query = Booking::with('shift')->select('booking.*');

        return Datatables::of($query)
            ->addColumn('action', function($booking){
                return 
                    ' <a href="" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-eye-open"></i> Show</a> ' .
                    ' <a class="btn btn-primary btn-xs" onclick="editForm('. $booking->id_booking .')"><i class="glyphicon glyphicon-edit"></i> Edit</a> ' .
                    ' <a class="btn btn-danger btn-xs" onclick="deleteData('. $booking->id_booking .')"><i class="glyphicon glyphicon-trash"></i> Delete</a> ';
            })
            ->make(true);
    }
}
