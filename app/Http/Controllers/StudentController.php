<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Seminar;
use App\Models\Certification;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\QE;

class StudentController extends Controller
{
    public function daftar()
    {
        return view('student.daftar');
    }

    public function course()
    {
        $course = \App\Models\Course::all();

        return view('student.course.index')->with(compact('course'));
    }

    public function seminar()
    {
        $seminar = \App\Models\Seminar::all();

        return view('student.seminar.index')->with(compact('seminar'));
    }

    public function certification()
    {
        $certification = \App\Models\Certification::all();

        return view('student.certification.index')->with(compact('certification'));
    }

    public function vacancy()
    {
        $vacancy = \App\Models\Vacancy::all();

        return view('student.vacancy.index')->with(compact('vacancy'));
    }

    public function checkout(Request $request)
    {
        try {
            Student::create($request->all());
        } catch (QE $e) {
            return redirect()->back();
        }

        $students = \App\Models\Student::all();

        return view('student.checkout')->with(compact('students'));
    }

    public function showcheckout(Request $request)
    {
        $students = \App\Models\Student::all();
        return view('student.checkout')->with(compact('students'));
    }
    public function destroy(Student $student)
    {
        Student::destroy($student->id);
        return redirect('/student')->with('status', 'Data Berhasil Dihapus');
    }
}
