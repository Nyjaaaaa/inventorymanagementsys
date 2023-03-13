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
          lg:items-center lg:space-y-0 lg:flex-row"
      >
        <h1 class="uppercase text-2xl font-semibold whitespace-nowrap">Product details</h1>
        <a
            href="{{ route('products.index') }}"
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

      <!-- Start Content -->
      <section class="text-gray-600 body-font overflow-hidden">
        <div class="container px-5 py-24 mx-auto">
          <div class="lg:w-4/5 mx-auto flex flex-wrap">
            <div class="lg:w-1/2 w-full lg:pr-10 lg:py-6 mb-6 lg:mb-0">
              <h2 class="text-sm title-font text-gray-500 tracking-widest uppercase">Product Name</h2>
              <h1 class="text-gray-900 text-3xl title-font font-medium mb-4 border-b border-gray-600 py-2 uppercase">
                {{ $product->name }}
              </h1>
              <div class="flex border-gray-200 py-2 uppercase">
                <span class="text-gray-500">Description</span>
                <span class="ml-auto text-gray-900">{{ $product->description }}</span>
              </div>
              <div class="flex border-t border-gray-200 py-2 uppercase">
                <span class="text-gray-500">Price</span>
                <span class="ml-auto text-gray-900">&#8369;{{ $product->price }}</span>
              </div>
              <div class="flex border-t border-gray-200 py-2 uppercase">
                <span class="text-gray-500">Quantity</span>
                <span class="ml-auto text-gray-900">{{ $product->quantity }}</span>
              </div>
              <div class="flex border-t border-gray-200 py-2 uppercase">
                <span class="text-gray-500">Category</span>
                <span class="ml-auto text-gray-900">{{ $product->category->name }}</span>
              </div>
            </div>
            <img class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="{{ asset('storage/'. $product->image) }}">
          </div>
        </div>
      </section>
  </main>
@endsection
