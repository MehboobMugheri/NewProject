<?php

namespace App\Http\Controllers;

use App\Http\Requests\studentRequest;
use App\Models\teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use App\Rules\CustomVAlidation;
use Illuminate\Support\Facades\Validator;
use Closure;
class StudentController extends Controller
{
    public function showData(){
        $showData = DB::table('students')
        // ->join('teachers','students.teacher', '=', 'teachers.teacher_id')
        // ->orderBy('id', 'desc')
        // ->select(DB::raw('count(*) as studentName', 'students.student_name'))
        // ->groupBy('student_name')
        // ->having('student_name', '=' , 'Altamash')
        ->get();
        // return view('studentView',['data' => $showData]);
        return $showData;
    }

    // public function joinUnion(){
    //     $union = DB::table('lecturers')
    //             ->select('name' , 'email' , 'teacher_name')
    //             ->join('teachers','lecturers.teacher', '=' , 'teachers.teacher_id')
    //             ->where('email', '=', 'mehboob@gmail.com');

    //     $student = DB::table('students')
    //             ->union($union)
    //             ->select('name' , 'email' , 'teacher_name')
    //             ->join('teachers','students.teacher' , '=' , 'teachers.teacher_id')
    //             ->where('email', '=', 'arfeen@gmail.com')
    //             ->get();
    //     // return view('studentView',['data' => $student]);

    //             return $student;

    // }

    // public function whenData(){
    //     $whenData = DB::table('lecturers')
    //             ->when(false, function($data){
    //                 $data->where('age' , '>' , 20);
    //             },function($data){
    //                 $data->where('age', '<' , 20);
    //             })
    //             ->get();
    //             return $whenData;
    // }

    // public function chunkData(){
    //     $chunk = DB::table('students')
    //             ->orderBy('id')
    //             ->chunk(4,function($values){
    //                 foreach($values as $value){
    //                     echo " <br><br>";
    //                     echo $value->name;
    //                 }
    //             });
    // }

    // public function rawQuery(){
    //     // $raw = DB::select('select name,email from students
    //     // where id = :id ',['id'=> 4]);

    //     // $raw = DB::insert('insert into students (name , email , age , teacher)
    //     //                 values(?, ?, ? , ? )',['Ronaldo','ronaldo@gmail.com',30,3]);
                        
    //     // $raw = DB::update('update students set email = "mohtasham123@gmail.com" where id = ?',[5]);

    //     // $raw = DB::delete('delete from students where id = ?',[5]);

    //     $raw = DB::table('students')
    //                 ->selectRaw('count(*) as total_count,age')
    //                 // ->whereRaw('age < ? and name like ?',[20,'M%'])
    //                 // ->orderByRaw('email DESC')
    //                 ->groupBy('age')
    //                 // ->havingRaw('age < ?',[20])
    //                 ->havingRaw('age > ?',[20])
    //                 ->get();
    //                 // ->toSql();

    //     return $raw;
    // }

    // public function addForm(studentRequest $request){

    //     return $request->all();
    //     // return $request->only(['username','usercity']);
    //     // return $request->except(['username','usercity']);
    // }

    // public function addForm(Request $request){

    //     $validate = $request->validate([
    //         'username' => ['required', function(string $attribute, mixed $value , Closure $fail){
    //             if (strtoupper($value) !== $value) {
    //                 $fail('The :attribute is must be a UPPERCASE');
    //             }
    //         }],
    //         'useremail' => 'required',
    //     ]);
        


    //     return $request->all();
      
    // }
    
}
