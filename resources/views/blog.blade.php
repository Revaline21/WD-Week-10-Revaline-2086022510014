<!DOCTYPE html>
<html lang="en">
@extends('layout.app')
@section('content')
<section class="mt-6 px-4 pb-16 md:px-8 md:pb-24">
    <div class="max-w-4xl mx-auto lg:max-w-6xl">
        <div class="mb-12 max-w-3xl mx-auto text-center md:mb-16">
            <h2 class="text-3xl font-bold mb-6 text-slate-900">Blog Post</h2>
            <p class="text-base text-slate-600 leading-relaxed dark:text-slate-400"> Let’s Explore Some
                Interesting Articles </p>
        </div>

        <div class="grid gap-6 md:gap-8 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($blogs as $blog)
            <article class="bg-white border border-slate-300 shadow-sm p-4 rounded-xl">
                <div class="bg-gray-50 aspect-[22/13] rounded-xl overflow-hidden">
                    <img src="{{$blog ['image'] }}" alt="{{ $blog ['title'] }}" class="w-full h-full object-cover" />
                </div>
                <div class="mt-6">
                    <h3 class="text-base font-semibold text-slate-900 mb-3">{{ $blog['title'] }}</h3>
                    <p class="text-sm text-slate-600">{{ $blog ['description'] }}

                    </p>
                </div>
            </article>
            @endforeach
        </div>
    </div>
</section>
@endsection

</html>
