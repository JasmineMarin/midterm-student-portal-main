@extends('layouts.app') {{-- or your layout file --}}

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-6">Course Offerings by Department</h1>

    @foreach($departments as $department)
        <div class="mb-8 border p-4 rounded-lg shadow-sm">
            <h2 class="text-xl font-semibold mb-4">{{ $department->name }} ({{ $department->code }})</h2>
            
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="border-b bg-gray-100">
                        <th class="p-2">Code</th>
                        <th class="p-2">Title</th>
                        <th class="p-2">Units</th>
                        <th class="p-2">Year Level</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($department->courses as $course)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="p-2 font-mono">{{ $course->code }}</td>
                            <td class="p-2">{{ $course->title }}</td>
                            <td class="p-2">{{ $course->units }}</td>
                            <td class="p-2">Year {{ $course->year_level }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="p-2 text-gray-500">No courses available.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    @endforeach
</div>
@endsection