<?php

namespace App\Http\Controllers;

use App\Models\subject;
use App\Http\Requests\StoreSubjectRequest;
use App\Http\Requests\UpdateSubjectRequest;
use Illuminate\Http\JsonResponse;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        return response()->json(subject::get(['*']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubjectRequest $request): JsonResponse
    {
        Subject::create($request->validated());

        return response()->json();
    }

    /**
     * Display the specified resource.
     */
    public function show(subject $subject): JsonResponse
    {
        return response()->json($subject);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubjectRequest $request, subject $subject): JsonResponse
    {
        return response()->json($subject->update($request->validated()));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(subject $subject): JsonResponse
    {
        return response()->json($subject->delete());
    }
}
