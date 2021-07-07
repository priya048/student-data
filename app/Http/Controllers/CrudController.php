<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class CrudController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
    $crudobj=new Crud();
    $crudobj->name=$request->input('fname');
    $crudobj->lastname=$request->input('lname');
    $crudobj->rollno=$request->input('rollno');
    $crudobj->mobileno=$request->input('mobileno');
    $crudobj->email=$request->input('email');
    $crudobj->address=$request->input('address');
    $crudobj->branch=$request->input('branch');
    $crudobj->gender=$request->input('gender');

    if($request->hasFile('file'))
    {
        $file = $request->file('file');
        $extension = $file->getClientOriginalExtension();
        $filename = time().'.'.$extension;
        $file->storeAs('public/image/',$filename);
        $crudobj->image = $filename;
    }

        $crudobj->save();
        return redirect('show');

    }

    public function show()
    {

        return view('show')->with('crudArr',Crud::all());
    }


    public function edit($id)
    {
        return view('edit')->with('crudArr',Crud::find($id));
    }

    public function update(Request $request)
    {
        $crudobj=Crud::find($request->id);
        $crudobj->name=$request->input('fname');
        $crudobj->lastname=$request->input('lname');
        $crudobj->rollno=$request->input('rollno');
        $crudobj->mobileno=$request->input('mobileno');
        $crudobj->email=$request->input('email');
        $crudobj->address=$request->input('address');
        $crudobj->branch=$request->input('branch');
        $crudobj->gender=$request->input('gender');

        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->storeAs('public/image/',$filename);
            $crudobj->image = $filename;
        }


        $crudobj->save();
        return redirect('show');
    }

    public function search(Request $request){

        $search = $request->input('search');
        $query = Crud::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->orwhere('rollno', 'LIKE', "%{$search}%")
            ->get();

        return view('show', ['crudArr'=>$query]);

    }

    public function destroy($id,Request $request)
    {

        $crudobj = Crud::find( $id );
        $crudobj ->delete();

        return redirect('show');
    }
}
