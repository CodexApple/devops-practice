<?php

namespace App\Http\Controllers;

use App\Models\school;
use App\Http\Requests\StoreSchoolRequest;
use App\Http\Requests\UpdateSchoolRequest;
use Illuminate\Http\JsonResponse;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        return response()->json(School::get(['*']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSchoolRequest $request): JsonResponse
    {
        School::create($request->validated());

        return response()->json();
    }

    /**
     * Display the specified resource.
     */
    public function show(school $school): JsonResponse
    {
        return response()->json($school);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSchoolRequest $request, school $school): JsonResponse
    {
        return response()->json($school->update($request->validated()));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(school $school): JsonResponse
    {
        return response()->json($school->delete());
    }
}
