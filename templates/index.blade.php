@extends('layouts.app')

@section('content')
    <div class="flex items-center h-screen bg-blue-900 bg-example">
        <div class="max-w-5xl m-auto bg-white rounded-lg w-3/4 h-64 flex items-center shadow-xl" x-data="{ open:false}">
        	<button class="border-0 mx-8 my-4" @click="open = ! open">Toggle</button>
            <h1 class="w-full text-center text-3xl md:text-5xl font-mono" x-show="open">
           		AlpineWind
            </h1>
        </div>
    </div>
@endsection
