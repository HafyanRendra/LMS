<?php

namespace App\Http\Controllers;
use App\Models\Student;


use Illuminate\Http\Request;

class StudentController extends Controller
{
    private $students;

    public function __construct()
    {
        
    }

    
    public function index()
    {
        $pageTitle = 'Student List';
        $students = Student::all();
        return view('students.index', ['pageTitle' => $pageTitle,'students' => $students]);
    }

    public function create(){
        $pageTitle = 'New Student';
        $students = $this->students;
        return view('students.create', ['pageTitle' => $pageTitle, 'students'=>$students]);
    }

    public function store(Request $request)
    {
        $request->validate(
            [
            'name'=>'required',
            'student_id'=>'required',
            'course'=>'required',
            ],
            $request->all()
        );

        Student::create([
            'name'=>$request->name,
            'student_id'=>$request->student_id,
            'course'=>$request->course,
        ]);
        return redirect()->route('students.index');

    }

    public function edit($id)
    {
        $pageTitle = 'Edit Student';
        $students = Student::find($id);

        return view('students.edit', ['pageTitle' => $pageTitle, 'students' => $students]);
    }

    public function update(Request $request, $id)
    {
       // dd($request->all());
        $students = Student::find($id);
        $students->update([
            'name'=>$request->name,
            'student_id'=>$request->student_id,
            'course'=>$request->course,
        ]);
        return redirect()->route('students.index');
    }

    public function delete($id)
    {
    $pageTitle = 'Delete Student'; // Menyebutkan judul dari halaman yaitu "Delete Task"
    $students = Student::find($id); //  Memperoleh data task menggunakan $id
    return view('students.delete', ['pageTitle' => $pageTitle, 'students' => $students]);// Menghasilkan nilai return berupa file view dengan halaman dan data task di atas 
    }

    public function destroy($id)
    {
    $students = Student::find($id);// Memperoleh task tertentu menggunakan $id
    $students->delete();
    return redirect()->route('students.index');// Melakukan redirect menuju tasks.index
    }

}

    


