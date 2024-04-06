<?php

namespace App\Http\Controllers;

use App\Models\department;
use App\Http\Requests\StoreDepartmentRequest;
use App\Http\Requests\UpdateDepartmentRequest;
use Illuminate\Http\JsonResponse;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        return response()->json(department::get(['*']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDepartmentRequest $request): JsonResponse
    {
        Department::create($request->validated());

        return response()->json();
    }

    /**
     * Display the specified resource.
     */
    public function show(department $department): JsonResponse
    {
        return response()->json($department);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDepartmentRequest $request, department $department): JsonResponse
    {
        return response()->json($department->update($request->validated()));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(department $department): JsonResponse
    {
        return response()->json($department->delete());
    }
}
