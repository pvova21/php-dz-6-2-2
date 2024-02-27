<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Group;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Group $group)
    {
        $students = $group->students;
    return view('students.index', compact('group', 'students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Group $group)
    {
        dd('Create method is called for group ' . $group->id);
        return view('students.create', compact('group'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Group $group)
    {
         // Валидация данных, которые вы получаете из формы
         $request->validate([
            'surname' => 'required|string',
            'name' => 'required|string',
        ]);

        // Создание нового студента для группы
        $student = new Student([
            'group_id' => $group->id,
            'surname' => $request->get('surname'),
            'name' => $request->get('name'),
        ]);

        $group->students()->save($student);

        return redirect()->route('groups.show', $group);
    }

    /**
     * Display the specified resource.
     */
    public function show(Group $group, Student $student)
    {
        return view('students.show', compact('group', 'student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
