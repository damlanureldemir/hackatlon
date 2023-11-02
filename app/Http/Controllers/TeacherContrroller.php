<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class TeacherContrroller extends Controller
{
    public  function index(){
        return view('panel.app');
    }
    public function fetch(Request $request){
        $user=User::get();
        return DataTables::of($user)
            ->editColumn('name', function ($data) {
                return $data->name;
            })
            ->editColumn('surname', function ($data) {
                return $data->surname;
            })
            ->editColumn('okulno', function ($data) {
                return $data->okulno;
            })
            ->editColumn('email', function ($data) {
                return $data->email;
            })
            ->addColumn('detay', function ($data) {
                return '<a class="btn btn-primary" href="#" role="button"  onclick="detay('.$data->id.')">Detay</a>';
            })
            ->addIndexColumn()
            ->rawColumns(['name', 'surname', 'okulno', 'email', 'detay'])
            ->make(true);
    }
}
