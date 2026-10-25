<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return 'All Students';
    }

    public function show($id)
    {
        return 'Student ID: ' . $id;
    }
    public function create()
{
    return 'Create Student Form';
}
public function store()
{
    return 'Student Created';
}
public function update($id)
{
    return 'Student Updated: ' . $id;
}
public function destroy($id)
{
    return 'Student Deleted: ' . $id;
}
}