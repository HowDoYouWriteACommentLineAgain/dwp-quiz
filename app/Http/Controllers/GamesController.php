<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GamesController extends Controller
{
    protected $game_list;

    public function __construct()
    {
        $this->game_list = require __DIR__ . '/../../../database/datasource.php';
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Step 3. Your code here.
        return view('games.list', ['games' => $this->game_list]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //Step 4.
        // $results = array_filter($this->game_list, function ($game) use ($id) {
        //     return $game['id'] != $id;
        // });
        //array applies the function ($game)
        //which can only take one paramter which
        // is why $id is supplie with use. When 
        //the function returns true then it adds it to the $results

        $results = array_filter($this->game_list, function ($game) use ($id){
            return $game['id'] == $id;
        });

        $game = reset($results);

        return view('games.show', ['games' => $game]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $results = array_filter($this->game_list, function ($game) use ($id) {
            return $game['id'] != $id;
        });
        return response()->json([
            'message' => 'Record Successfull Deleted.',
            'content' => $results
        ], 200);
    }
}
