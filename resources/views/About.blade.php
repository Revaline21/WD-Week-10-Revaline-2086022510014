<!DOCTYPE html>
<html lang="en">
@extends('layout.app')
@section('content')
        <section aria-labelledby="banner-heading" class="px-4 md:px-8 mt-6">
            <div
                class="px-6 bg-gradient-to-r from-blue-800 via-blue-700 to-blue-600 rounded-lg overflow-hidden min-h-48 max-w-5xl mx-auto md:px-12">
                <div class="py-6 md:py-8 max-w-3xl mx-auto text-center">
                    <h2 id="banner-heading" class="text-3xl font-bold text-slate-50 mb-4 md:text-4xl">
                        {{ $banner ['title'] }}
                    </h2>
                    <p class="text-base text-slate-100 leading-relaxed">
                        {{ $banner['description'] }}
                    </p>
                </div>
            </div>
        </section>

        <div class="grid gap-6 max-w-5xl mx-auto mt-6 px-4 md:px-8 md:grid-cols-2">

            @foreach ($cards as $card)
                <article class="bg-white border border-slate-200 shadow-sm rounded-lg overflow-hidden">
                    @if ($card['image'])
                        <div class="aspect-[16/10] w-full bg-gray-50">
                            <img src="{{ asset($card['image']) }}" alt="{{ $card['title'] }}"
                                class="w-full h-full object-cover" />
                        </div>
                    @endif
                    <div class="p-4 sm:p-6">
                        <h3 class="text-slate-900 text-base font-semibold">{{ $card['title'] }}</h3>
                        <p class="mt-2 text-sm text-slate-600 leading-relaxed">
                            {{ $card['description'] }}
                        </p>
                    </div>
                </article>
            @endforeach

        </div>
    @endsection
</html>