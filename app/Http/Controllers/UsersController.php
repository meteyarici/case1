<?php

namespace App\Http\Controllers;

use App\Models\Users;


class UsersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * @return \Illuminate\View\View|\Laravel\Lumen\Application
     */
    public function index()
    {
        return view('index', ['users' => Users::with(['positions', 'competences'])->get()]);
    }

    /**
     * @return \Illuminate\View\View|\Laravel\Lumen\Application
     */
    public function listone()
    {
        return view('index', ['users' => Users::with(['positions', 'competences'])->where('position', '=', 3)->get()]);
    }

    /**
     * @return \Illuminate\View\View|\Laravel\Lumen\Application
     */
    public function listtwo()
    {
        return view('index', ['users' => Users::with(['positions', 'competences'])->where('competence', '=', 1)->whereRaw('age BETWEEN ' . 18 . ' AND ' . 23 . '')->get()]);
    }

    /**
     * @return \Illuminate\View\View|\Laravel\Lumen\Application
     */
    public function listhree()
    {
        /*User::whereHas('Udetails',function($query) use ($competence, $city){
            $query->where(function ($query) {
                $query->where('competence', '=', 'country')
                    ->where('value', '=', $competence);
            })->orWwhere(function ($query) {
                $query->where('city', '=', 'city')
                    ->where('value', '=', $city);
            });
        })->get();*/

        return  view('index', ['users' => Users::with(['positions', 'competences'])->where('position', '=', 2)->whereRaw('age BETWEEN ' . 18 . ' AND ' . 25 )->get()]);


    }

}
