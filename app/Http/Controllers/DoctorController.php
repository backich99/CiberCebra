<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DoctorController extends Controller
{
    public function index(Request $request): View
    {
        $doctors = Doctor::query()
            ->when($request->search, fn ($q, $search) => $q->where('name', 'like', "%{$search}%")
                ->orWhere('specialty', 'like', "%{$search}%")
                ->orWhere('city', 'like', "%{$search}%"))
            ->withCount('recommendations')
            ->paginate(15);

        return view('doctors.index', compact('doctors'));
    }

    public function show(Doctor $doctor): View
    {
        $doctor->load('recommendations.user');

        return view('doctors.show', compact('doctor'));
    }
}
