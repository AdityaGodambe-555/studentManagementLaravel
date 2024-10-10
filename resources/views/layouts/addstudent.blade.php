@extends('layouts.main')

@section('main-section')
<div class="flex items-center justify-center h-screen bg-gray-100">
    <form action="{{route("student.store")}}" method="post" class="max-w-md mx-auto bg-white p-8 rounded-lg shadow-md">
        @csrf
        <h3 class="text-xl font-semibold text-center mb-6">Add Student</h3>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="sname">Student Name:</label>
            <input type="text" name="sname" placeholder="Enter Name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:ring-blue-300" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="sclass">Class and Division:</label>
            <input type="text" name="sclass" placeholder="eg. '10/A'" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:ring-blue-300" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="rollno">Roll No.:</label>
            <input type="number" name="rollno" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:ring-blue-300" required>
        </div>
        <div class="flex items-center justify-center">
            <input type="submit" name="send" value="Add Student" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring focus:ring-blue-300">
        </div>
    </form>
</div>
@endsection