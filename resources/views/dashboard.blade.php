@extends('layouts.app')

@section('content')
    <main class="flex-1 max-h-full p-5 overflow-hidden overflow-y-scroll">
        <!-- Main content header -->
        <div
        class="
            flex flex-col
            items-start
            justify-between
            pb-6
            space-y-4
            border-b
            lg:items-center lg:space-y-0 lg:flex-row
        "
        >
        <h1 class="text-2xl font-semibold whitespace-nowrap">Dashboard</h1>
        </div>

        <!-- Start Content -->

        <!-- Chart cards (Four columns grid) -->
        <div class="grid grid-cols-1 gap-6 mt-6 md:grid-cols-2 lg:grid-cols-4">
        <!-- Users chart card --><a
            href="#"
            class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg"
        >
            <div class="flex items-start">
            <div class="flex flex-col flex-shrink-0 space-y-2">
                <span class="text-gray-400">Total Users</span>
                <span class="text-lg font-semibold">{{ $users->count() }}</span>
            </div>
            <div class="relative min-w-0 ml-auto h-14">
                <canvas id="usersChart"></canvas>
            </div>
            </div>
            <div>
            <span class="inline-block px-2 text-sm text-white bg-green-300 rounded">14%</span>
            <span>from 2020</span>
            </div>
        </a>

        <!-- Sessions chart card --><a
            href="#"
            class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg"
        >
            <div class="flex items-start">
            <div class="flex flex-col flex-shrink-0 space-y-2">
                <span class="text-gray-400">Sessions</span>
                <span class="text-lg font-semibold">40%</span>
            </div>
            <div class="relative min-w-0 ml-auto h-14">
                <canvas id="sessionsChart"></canvas>
            </div>
            </div>
            <div>
            <span class="inline-block px-2 text-sm text-white bg-green-300 rounded">1.2%</span>
            <span>from 2020</span>
            </div>
        </a>

        <!-- Vists chart card --><a
            href="#"
            class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg"
        >
            <div class="flex items-start">
            <div class="flex flex-col flex-shrink-0 space-y-2">
                <span class="text-gray-400">Vists</span>
                <span class="text-lg font-semibold">300,527</span>
            </div>
            <div class="relative min-w-0 ml-auto h-14">
                <canvas id="vistsChart"></canvas>
            </div>
            </div>
            <div>
            <span class="inline-block px-2 text-sm text-white bg-green-300 rounded">10%</span>
            <span>from 2020</span>
            </div>
        </a>

        <!-- Articles chart card --><a
            href="#"
            class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg"
        >
            <div class="flex items-start">
            <div class="flex flex-col flex-shrink-0 space-y-2">
                <span class="text-gray-400">Articles</span>
                <span class="text-lg font-semibold">600,429</span>
            </div>
            <div class="relative min-w-0 ml-auto h-14">
                <canvas id="articlesChart"></canvas>
            </div>
            </div>
            <div>
            <span class="inline-block px-2 text-sm text-white bg-green-300 rounded">30%</span>
            <span>from 2020</span>
            </div>
        </a>
        </div>
    </main>
@endsection