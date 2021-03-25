<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\ClientsDatatable;
use App\DataTables\ReservationsDatatable;
use App\Models\Reservation;
use App\Models\Client;
use Yajra\DataTables\Facades\DataTables;


class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {   
        // $users = User::all();
        // //$id = User::find(1)->id;

        // return view('client.index', [
        //     'users' => $users,
        //     //'id' => $id
        // ]);  
        //return view('client.index');
    }

    public function my_reservation(ReservationsDatatable $client)
    {
         return $client->render('client.my_reservation');
        //eturn view('client.my_reservation');
    }

    public function make_reservation(){
        return view('client.make_reservation');
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
        //
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
        //
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
        //
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
}
