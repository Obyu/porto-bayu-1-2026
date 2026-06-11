@extends('layouts.app')

@section('content')
<section class="min-h-screen flex items-center">
    <div class="container mx-auto px-6">

        <div class="grid lg:grid-cols-2 gap-10 items-center">

            {{-- Left --}}
            <div>
                <p class="text-blue-600 font-semibold mb-2">
                    Hello, I'm
                </p>

                <h1 class="text-5xl font-bold mb-4">
                    {{ $profile?->name }}
                </h1>

                <h2 class="text-2xl text-gray-600 mb-6">
                    {{ $profile?->headline }}
                </h2>

                <p class="text-gray-500 leading-relaxed mb-8">
                    {{ $profile?->about }}
                </p>

                <div class="flex gap-4">
                    <a
                        href="#contact"
                        class="px-6 py-3 bg-blue-600 text-white rounded-lg"
                    >
                        Contact Me
                    </a>

                    @if($profile?->cv)
                        <a
                            href="{{ asset('storage/' . $profile->cv) }}"
                            target="_blank"
                            class="px-6 py-3 border rounded-lg"
                        >
                            Download CV
                        </a>
                    @endif
                </div>
            </div>

            {{-- Right --}}
            <div class="flex justify-center">

                @if($profile?->photo)
                    <img
                        src="{{ asset('storage/' . $profile->photo) }}"
                        alt="{{ $profile->name }}"
                        class="w-80 h-80 rounded-full object-cover shadow-xl"
                    >
                @else
                    <div class="w-80 h-80 rounded-full bg-gray-200"></div>
                @endif

            </div>

        </div>

    </div>
</section>
@endsection