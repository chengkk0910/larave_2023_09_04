<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Flight;
use App\Models\Student;
use Illuminate\Support\Facades\Redirect;

// use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // $url = route('students.edit', ['student' => 1]);
        // dd($url);

        $data = Student::all();
        // $data = Student::where('id', '>', 3)->orderBy('id', 'desc')->get();
        // dd($data);

        // dd('student controller index ok');
        return view('student.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // dd('hello StudentController create');
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $data = $request->all();
        $data = $request->except('_token');
        // dd($data);
        // dd($request);
        $item = new Student;
        // dd($item);

        $item->name = $data['name'];
        $item->mobile = $data['mobile'];
        // dd($item);


        $item->save();

        // return redirect('/flights');
        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
 
        $data = Student::find($id);

       
        return view('student.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd('update ok');
        $data = $request->except('_token','_method');
        // dd($data);

        $item = Student::find($id);
        $item->name = $data['name'];
        $item->mobile = $data['mobile'];
        $item->save();
        return redirect()->route('students.index');

        // dd($item);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function test(){
        dd('hello studentController test');
    }
}
