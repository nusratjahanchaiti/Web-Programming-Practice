<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index()
    {
        return "List of data";
    }

    public function create()
    {
        return "Create form";
    }

    public function store(Request $request)
    {
        return "Store data";
    }

    public function show($id)
    {
        return "Show " . $id;
    }

    public function edit($id)
    {
        return "Edit " . $id;
    }

    public function update(Request $request, $id)
    {
        return "Update " . $id;
    }

    public function destroy($id)
    {
        return "Delete " . $id;
    }
}