@extends('layouts.main')

@section('main-section')
    <div class="container mx-auto p-6 bg-gray-100">
        <h3 class="text-2xl font-semibold text-center mb-6">
            <a href="{{route("addStudent")}}" class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
                Add Student Data
            </a>
        </h3>
        <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-md">
            <thead>
                <tr class="bg-blue-500 text-white">
                    <th class="py-3 px-4 text-left">Name</th>
                    <th class="py-3 px-4 text-left">Class/Division</th>
                    <th class="py-3 px-4 text-left">Roll No.</th>
                    <th class="py-3 px-4 text-left">Edit</th>
                    <th class="py-3 px-4 text-left">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                <tr class="border-b hover:bg-gray-100">
                    <td class="py-3 px-4">{{$student->sname}}</td>
                    <td class="py-3 px-4">{{$student->sclass}}</td>
                    <td class="py-3 px-4">{{$student->rollno}}</td>
                    <td class="py-3 px-4">
                        <a href="{{route("student.edit",$student->id)}}" class="text-blue-500 hover:text-blue-700">
                            <button class="bg-blue-500 text-white py-1 px-3 rounded hover:bg-blue-600">Edit</button>
                        </a>
                    </td>
                    <td class="py-3 px-4">
                        <a href="{{route("student.delete",$student->id)}}" class="text-red-500 hover:text-red-700">
                            <button class="bg-red-500 text-white py-1 px-3 rounded hover:bg-red-600">Delete</button>
                        </a>
                    </td>
                </tr>
                @endforeach
                {{-- <tr>
                    <td colspan="5" class="py-3 px-4 text-center text-gray-500">
                        No student data
                    </td>
                </tr> --}}
            </tbody>
        </table>
    </div>
@endsection