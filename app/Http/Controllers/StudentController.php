<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Flight;
use App\Models\Student;
use App\Models\Address;
use App\Models\Love;
use Illuminate\Support\Facades\Redirect;

use App\Exports\StudentsExport;
use Maatwebsite\Excel\Facades\Excel;

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
        // $phone = User::find(1)->phone;
        // $data = Student::find(2)->address;
        $data = Student::with(['address', 'loves'])->get();
        // dd($data);
        // dd($data);
        // $data = Student::with('address')->get();
        // $users = User::with('podcasts')->get();
        // $data = Student::find(2)->loves;
        // dd($data);

        // foreach ($data as $key => $value) {
        //     dump ("$value->address");
        // }



        // $data = Student::get();
        // dd($data);
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
        $item->save();

        // $lastData = Student::orderBy('id','desc')->take(1)->get();
        $lastData = Student::orderBy('id', 'desc')->first();
        $student_id = $lastData['id'];

        // dd($lastData[0]['id']);
        // $student_id = $lastData[0]['id'];
        // $student_id = $lastData[0]['id'];

        // 新增 student
        // get student_id
        // 新增 address
        // 新增 love

        // 新增 address
        if (!empty($data['address'])) {
            $itemAddress = new Address;
            $itemAddress->student_id = $student_id;
            $itemAddress->addr = $data['address'];
            $itemAddress->save();
        }

        // 新增 love
        // data['love'] = 's1,s2,s3,s4';
        // loveArr = [s1,s2,s3,s4];
        // dd($loveArr);

        if (!empty($data['love'])) {
            $loveArr = explode(",", $data['love']);
            foreach ($loveArr as $key => $value) {
                $itemLove = new Love;
                $itemLove->student_id = $student_id;
                $itemLove->name = $value;
                $itemLove->save();
            }
        }


        // Love::insert([
        //     ['student_id' => '2', 'name' => 'test 2221'],
        //     ['student_id' => '2', 'name' => 'test 2222'],
        //     ['student_id' => '2', 'name' => 'test 2223']
        // ]);


        

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

        // dd($data['loves']);
        $myTextArr = [];
        foreach ($data['loves'] as $key => $value) {
            array_push($myTextArr, $value['name']);
        }
        // dd($myTextArr);
        $myText = join(',',$myTextArr);
        // dd($myText);
        $data['myText'] = $myText;

        // dd($data);

        return view('student.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     * 
     */
    public function update(Request $request, string $id)
    {
        $data = $request->except('_token', '_method');
        // dd($data);

       

        $item = Student::find($id);

        $item->name = $data['name'];
        $item->mobile = $data['mobile'];

        $item->save();

        
        Address::where('student_id',$id)->delete();
        Love::where('student_id',$id)->delete();

        // dd('123');
        
        $student_id = $item['id'];

        if (!empty($data['address'])) {
            $itemAddress = new Address;
            $itemAddress->student_id = $student_id;
            $itemAddress->addr = $data['address'];
            $itemAddress->save();
        }

        if (!empty($data['love'])) {
            $loveArr = explode(",", $data['love']);
            foreach ($loveArr as $key => $value) {
                $itemLove = new Love;
                $itemLove->student_id = $student_id;
                $itemLove->name = $value;
                $itemLove->save();
            }
        }


        return redirect()->route('students.index');

        // dd($item);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // dd("$id del ok");
        $data = Student::find($id);
        $data->delete();
        return redirect()->route('students.index');
    }

    public function test()
    {
        dd('hello studentController test');
    }

    public function export() 
    {
        return Excel::download(new StudentsExport, 'students.xlsx');
    }
}
