@extends('layouts.main')

@section('main-section')
<div class="flex items-center justify-center h-screen bg-gray-100">
    {{-- {{print_r($student)}} --}}
    <form action="{{route("student.update")}}" method="post" class="max-w-md mx-auto bg-white p-8 rounded-lg shadow-md">
        @csrf
        <h3 class="text-xl font-semibold text-center mb-6">Edit Student Details</h3>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="sname">Student Name:</label>
            <input type="text" name="sname" placeholder="Enter Name" value="{{$student->sname}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:ring-blue-300" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="sclass">Class and Division:</label>
            <input type="text" name="sclass" placeholder="eg. '10/A'" value="{{$student->sclass}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:ring-blue-300" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="rollno">Roll No.:</label>
            <input type="number" name="rollno" value="{{$student->rollno}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:ring-blue-300" required>
        </div>
        <input type="number" name="id" value="{{$student->id}}" hidden>
        <div class="flex items-center justify-center">
            <input type="submit" name="edit" value="Edit Student Details" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring focus:ring-blue-300 cursor-pointer">
        </div>
    </form>
</div>
@endsection