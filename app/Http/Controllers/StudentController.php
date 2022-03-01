<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Http\Requests\StudentRequest;
use Exception;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return View('student.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $student = new Student();
        $route = route('student.store');

        return View('student.form', compact('student', 'route'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentRequest $request)
    {
        try {
            $student = new Student();
            $student->fill($request->all());
            $student->matricula = $request->input('matricula');
            $student->save();

            return redirect()->route('student.index')
                ->with('success', 'Student created successfully.');
        } catch (Exception $ex) {
            return redirect()->back()
                ->with('error', $ex->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        $route = route('student.update', $student->id);
        return View('student.form', compact('student', 'route'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StudentRequest $request, Student $student)
    {
        try {
            $student->fill($request->all());
            $student->save();

            return redirect()->route('student.index')
                ->with('success', 'Student updated successfully.');
        } catch (Exception $ex) {
            return redirect()->back()
                ->with('error', $ex->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        try {
            $student->delete();
            return redirect()->route('student.index')
                ->with('success', 'Student delete successfully.');
        } catch (Exception $ex) {
            return redirect()->back()
                ->with('error', $ex->getMessage());
        }
    }
}
