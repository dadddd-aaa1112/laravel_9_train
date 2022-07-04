<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hobbie;

class HobbieController extends Controller
{
    public function Hobbie() {
       $hobbies = Hobbie::all();

       return view('hobbiess', compact('hobbies'));
    }

    public function create() {
        $hobbieArr = [
            [
                'desc' => 'dessc1'
        ], [
                'desc' => 'dessc2'
        ]
    ];

    foreach ( $hobbieArr as $hobbie) {
        Hobbie::create($hobbie);
    }

    dd('creare');
    }

    public function delete() {
        $hobbie = Hobbie::find(1);
        $hobbie->delete();
        dd('delete');

    }

    public function update() {
        $hobbie = Hobbie::find(3);
        $hobbie->update([
            'desc' => 'updaaaare'
        ]);

        dd('update');
    }
}
