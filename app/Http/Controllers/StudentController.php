<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use App\Models\StudentClass;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    public function Index(){
        $student_class = StudentClass::all();
        // dd($student_class);
        return Inertia::render('Class/Index',compact('student_class'));
    }
    public function CreateClass(){
        return Inertia::render('Class/Create');
    }
    public function StoreClass(Request $request){
        $validator = Validator::make($request->all(), [
            'class_name' => ['required', 'min:3'],
        ]);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }
        StudentClass::create([
            'class_name' => $request->class_name,
        ]);
        return Redirect::route('student.class')->with('success', 'Class created successfully');
    }

    public function EditClass(){
        return Inertia::render('Class/Edit');
    }

    // public function DeleteClass(){
       
    //         $image = $skill->image;
    //         if (File::exists($image)) {
    //             File::delete($image);
    //         }
    
    //         $skill->delete();
    //         return Redirect::route('class.index');
    //     }
    }
    

