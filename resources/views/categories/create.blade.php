@extends('layouts.app')

@section('content')
<!-- Main content -->
    <main class="flex-1 max-h-full p-5 overflow-hidden overflow-y-scroll">
        <!-- Main content header -->
        <div
            class="
            mb-8
            flex flex-col
            items-start
            justify-between
            pb-6
            space-y-4
            border-b
            lg:items-center lg:space-y-0 lg:flex-row"
        >
        <h1 class="text-2xl font-semibold whitespace-nowrap">Add Category</h1>
            <a
                href="{{ route('categories.index') }}"
                class="
                inline-flex
                items-center
                px-4
                py-2
                bg-gray-800
                border
                border-transparent
                rounded-md
                font-semibold
                text-xs
                text-white
                uppercase
                tracking-widest
                hover:bg-gray-700
                active:bg-gray-900
                focus:outline-none
                focus:border-gray-900
                focus:ring
                ring-gray-300
                disabled:opacity-25
                transition
                ease-in-out
                duration-150"
            >
                <svg
                    class="w-6 h-6 text-gray-500"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm.707-10.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L9.414 11H13a1 1 0 100-2H9.414l1.293-1.293z"
                    />
                </svg>
                <span>Back</span>
            </a>
        </div>
        
        <form method="POST" action="{{ route('categories.store') }}">
            @csrf
            <div class="relative z-0 w-full mb-6 group">
                <input type="text" name="name" id="name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('name')
                border-red-500 @enderror" placeholder=" "/>
                @error('name')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror

                <label for="name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-1 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Category name</label>
            </div>
            
            <button type="submit" class="inline-flex items-center px-5 py-3 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                Add
            </button>
        </form>

    </main>
@endsection
