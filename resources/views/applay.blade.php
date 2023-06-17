@extends('layout')

@section('content')
    <div class="flex justify-center h-auto dark:bg-gray-800">
        <div class='px-6 w-full justify-center  xl:w-2/6  '>
            <h1 class='font-semibold text-xl text-teal-500'>Apply for Addmission</h1>

            <form action='{{ route('student.Request') }}' method='post' enctype='multipart/form-data'>
                @csrf
                <div class='w-full flex-col grid grid-flow-row lg:grid-flow-col md:grid-flow-col gap-2 mt-4'>
                    <div class='w-full '>
                        <label class='font-semibold'>Name</label>
                        <input type="text"name="name" class="px-2 py-2 rounded-lg w-full border shadow" />
                        @error('name')
                            <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class='w-full flex-col grid grid-flow-row lg:grid-flow-col md:grid-flow-col gap-2 mt-4'>
                    <div class='w-full '>
                        <label class='font-semibold'>Mother Name</label>
                        <input type="text"name="mother_name" class="px-2 py-2 rounded-lg w-full border shadow" />
                        @error('mother_name')
                            <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class='w-full'>
                        <label class='font-semibold'>Father Name</label>
                        <input type="text" name='father_name' class="px-2 py-2 rounded-lg w-full border shadow" />
                        @error('father_name')
                            <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class='w-full flex-col gap-2 mt-4 grid grid-flow-row lg:grid-flow-col md:grid-flow-col'>
                    <div class='w-full'>
                        <label class='font-semibold'>Contact</label>
                        <input type="number" name='contact' class="px-2 py-2 rounded-lg w-full border shadow" />
                        @error('contact')
                            <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class='w-full'>
                        <label class='font-semibold'>Email</label>
                        <input type="email" name='email' class="px-2 ml-1 py-2 rounded-lg w-full border shadow" />
                        @error('email')
                            <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class='w-full  gap-2  mt-4 grid grid-flow-row lg:grid-flow-col md:grid-flow-col'>
                    <div class='w-full flex-1'>
                        <label class='font-semibold'>Education</label>
                        <input type="text" name="class" class="px-2 py-2 rounded-lg w-full border shadow" />
                        @error('class')
                            <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class='w-full flex-1'>
                        <label class='font-semibold'>Data Of Birth</label>
                        <input type="date" name="dob" class="px-2 py-2 rounded-lg w-full border shadow" />
                        @error('dob')
                            <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class='w-full flex-1'>
                        <label class='font-semibold'>Gender</label>
                        <select type="text" name="gender" class="px-2 py-2 rounded-lg w-full border shadow">
                            <option class='disable'></option>
                            <option class=''>Male</option>
                            <option class=''>Female</option>
                            <option class=''>Other</option>
                        </select>
                        @error('gender')
                            <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class='mt-4 w-full'>
                    <label class='font-semibold'>Address</label>
                    <textarea type="text" name="address" class="border w-full rounded-lg shadow h-24" row='10' col='10'></textarea>
                    @error('address')
                        <p class="text-red-600 text-sm">{{ $message }}</p>
                    @enderror
                </div>
                {{-- <div class="mt-4 gap-5 grid grid-flow-row lg:grid-flow-col md:grid-flow-col w-full">
                    <div class="">
                        <label class='font-semibold'>Select Your Image</label>

                        <input name="image"
                            class="block w-full mb-5 text-xs text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            type="file">
                        @error('image')
                            <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="">
                        <label class='font-semibold'>Select Your sign</label>
                        
                        <input name="sign"
                            class="block w-full mb-5 text-xs text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            type="file">
                        @error('sign')
                            <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                    </div>
                </div> --}}
                <div class='mt-2 w-full'>
                    <div class='w-full flex gap-2  justify-center items-center mt-3'>
                        <input type="submit"
                            class=" w-full px-6 py-3 bg-green-500 text-white text-lg font-semibold leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                            name="save" value="submit">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
