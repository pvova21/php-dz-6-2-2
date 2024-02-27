<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Models\Group;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $groups = Group::all();
        return view('groups.index', compact('groups'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('groups.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'start_from' => 'required|date',
            'is_active' => 'required|boolean',
        ]);

        $group = new Group([
            'title' => $request->get('title'),
            'start_from' => $request->get('start_from'),
            'is_active' => $request->get('is_active'),
        ]);

        $group->save();

        return redirect()->route('groups.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Group $group)
    {
        $students = $group->students;
        return view('groups.show', compact('group', 'students'));
    }
    public function createStudent(Group $group)
    {
        return view('students.create', compact('group'));
    }

    public function storeStudent(Request $request, Group $group)
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

        $student->save();

        return redirect()->route('groups.show', $group);
    }

    public function showStudent(Group $group, Student $student)
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
