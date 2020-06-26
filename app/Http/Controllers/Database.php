<?php

namespace App\Http\Controllers;
use App\student;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Database extends Controller
{
    public function insert(Request $request){                        //function used to inset data to database

        $reg_no = $request->input("reg_no");
        // $reg_no=$_GET["reg_no"];
        $name = $request->input("name");
        // $name=$_GET["name"];
        $mark=$request->input("mark");
        // $mark=$_GET["mark"];
        $grade=$request->input("grade");
        // $grade=$_GET["grade"];
        $class=$request->input("Student_class");
        // $class=$_GET["Student_class"];
        DB::table('students_table')->insert(
            ['reg_no' =>$reg_no, 'name' => $name,'mark'=>$mark, 'grade'=>$grade, 'class'=>$class]
        );
        return view('student');
    }
    public function select(){                                   //function used to render data from database
        $datas = DB::table('students_table')->get();
        // $datas = DB::select('select * from students_table');
        return view('data',
                    ['datas'=>$datas]
                );
    }
}
