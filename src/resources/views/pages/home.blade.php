@extends('layouts.app')

@section('content')
<section
    id="hero"
    class="reveal py-24 min-h-screen flex items-center pt-20">

    <div class=" absolute inset-0 -z-10 opacity-30 ">

            <div
                class="
                    h-full
                    w-full
                    bg-[linear-gradient(to_right,#e2e8f0_1px,transparent_1px),linear-gradient(to_bottom,#e2e8f0_1px,transparent_1px)]
                    bg-[size:40px_40px]
                ">
            </div>

        </div>
                <div class="container mx-auto px-6">

        <div class="grid lg:grid-cols-2 gap-16 items-center">

            {{-- Content --}}
            <div>

                <span
                    class="inline-flex items-center px-4 py-2 rounded-full bg-blue-100 text-blue-700 text-sm font-medium mb-6">
                    Computer Science Student
                </span>

                <h1 class="text-5xl lg:text-7xl font-bold leading-tight mb-4">
                    {{ $profile?->name }}
                </h1>

                <h2 class="text-2xl text-slate-600 mb-6">
                    {{ $profile?->headline }}
                </h2>

                <p class="text-slate-500 leading-8 max-w-xl mb-8">
                    {{ $profile?->about }}
                </p>

                <div class="flex flex-wrap gap-4 mb-10">

                    <a
                        href="#contact"
                        class="px-6 py-3 rounded-xl bg-blue-600 text-white font-medium hover:bg-blue-700 transition">
                        Contact Me
                    </a>

                    @if($profile?->cv)
                        <a
                            href="{{ asset('storage/' . $profile->cv) }}"
                            target="_blank"
                            class="px-6 py-3 rounded-xl border border-slate-300 hover:border-blue-600 transition">
                            Download CV
                        </a>
                    @endif

                </div>

                {{-- Tech Stack --}}
                <div class="flex flex-wrap gap-3">

                    @foreach([
                        'Laravel',
                        'Filament',
                        'Livewire',
                        'MariaDB',
                        'Docker'
                    ] as $skill)
                        <span
                            class="px-4 py-2 rounded-lg bg-slate-100 text-slate-700 text-sm">
                            {{ $skill }}
                        </span>
                    @endforeach

                </div>

                <div class="mt-10 flex gap-8">

                    <div>

                        <h3 class="text-3xl font-bold text-blue-600">
                            {{ $projects->count() }}+
                        </h3>

                        <p class="text-slate-500">
                            Projects
                        </p>

                    </div>

                    <div>

                        <h3 class="text-3xl font-bold text-blue-600">
                            {{ $certifications->count() }}+
                        </h3>

                        <p class="text-slate-500">
                            Certifications
                        </p>

                    </div>

                </div>

            </div>

            {{-- Image --}}
            <div class="flex justify-center">

                <div
                    class=" group relative rounded-3xl p-3 bg-gradient-to-br from-blue-600 to-indigo-700 shadow-2xl">

                    @if($profile?->photo)
                        <img    
                            src="{{ asset('storage/' . $profile->photo) }}"
                            alt="{{ $profile->name }}"
                            class=" h-60 w-full object-cover transition duration-700 group-hover:scale-110 ">
                    @else
                        <div
                            class="w-[420px] h-[520px] rounded-2xl bg-slate-200">
                        </div>
                    @endif

                </div>

            </div>

            <div class="flex gap-4 mt-8">

    @if($profile?->github)
        <a
            href="{{ $profile->github }}"
            target="_blank"
            class="text-slate-500 hover:text-blue-600">

            GitHub

        </a>
    @endif

    @if($profile?->linkedin)
        <a
            href="{{ $profile->linkedin }}"
            target="_blank"
            class="text-slate-500 hover:text-blue-600">

            LinkedIn

        </a>
    @endif

    </div>

            </div>

        </div>
</section>
<section id="about" class="reveal py-24 bg-white">

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid lg:grid-cols-2 gap-16 items-center">

            {{-- Left --}}
            <div>

                <span
                    class="text-blue-600 font-semibold">

                    About Me

                </span>

                <h2
                    class="text-5xl font-bold mt-4 mb-8">

                    Passionate Laravel Developer

                </h2>

                <p
                    class="text-slate-600 leading-8">

                    {{ $profile->about }}

                </p>

                <div class="flex flex-wrap gap-3 mt-8">

                @foreach([
                    'Laravel',
                    'Filament',
                    'Livewire',
                    'PHP',
                    'MariaDB',
                    'Docker'
                ] as $skill)

                    <span
                        class="
                            px-4 py-2
                            bg-blue-50
                            text-blue-700
                            rounded-xl
                            text-sm
                        ">

                        {{ $skill }}

                    </span>

                @endforeach

            </div>

            </div>

            {{-- Right --}}
            <div
                class="grid grid-cols-2 gap-6">

                <div
                    class="bg-slate-50 rounded-3xl p-8">

                    <h3
                        class="text-4xl font-bold text-blue-600">

                        {{ $projects->count() }}+

                    </h3>

                    <p class="mt-2 text-slate-600">
                        Projects
                    </p>

                </div>

                <div
                    class="bg-slate-50 rounded-3xl p-8">

                    <h3
                        class="text-4xl font-bold text-blue-600">

                        {{ $experiences->count() }}+

                    </h3>

                    <p class="mt-2 text-slate-600">
                        Experiences
                    </p>

                </div>

                <div
                    class="bg-slate-50 rounded-3xl p-8">

                    <h3
                        class="text-4xl font-bold text-blue-600">

                        {{ $educations->count() }}+

                    </h3>

                    <p class="mt-2 text-slate-600">
                        Educations
                    </p>

                </div>

                <div
                    class="bg-slate-50 rounded-3xl p-8">

                    <h3
                        class="text-4xl font-bold text-blue-600">

                        {{ $certifications->count() }}+

                    </h3>

                    <p class="mt-2 text-slate-600">
                        Certifications
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>
<section id="experience" class="reveal py-24">

    <div class="max-w-5xl mx-auto px-6">

        <div class="text-center mb-20">

            <span class="text-blue-600 font-semibold">
                Experience
            </span>

            <h2 class="text-5xl font-bold mt-3">
                Work Experience
            </h2>

        </div>

        <div class="relative">

            <div
                class="absolute left-4 top-0 bottom-0 w-0.5 bg-slate-300">
            </div>

            @foreach($experiences as $experience)

                <div class="relative pl-16 pb-12">

                    <div
                        class="absolute left-0 top-2 w-8 h-8 rounded-full bg-blue-600 border-4 border-white shadow">
                    </div>

                    <div class=" bg-white rounded-3xl p-8 shadow-sm border border-slate-200 hover:shadow-xl hover:-translate-y-1 transition duration-300 ">

                        <div
                            class="flex flex-col md:flex-row md:justify-between gap-2">

                            <div>

                                <h3
                                    class="text-2xl font-bold text-slate-900">

                                    {{ $experience->position }}

                                </h3>

                                <p class="text-blue-600 font-medium">

                                    {{ $experience->company }}

                                </p>

                            </div>

                            <span
                                class="text-sm text-slate-500 font-medium">

                                {{ \Carbon\Carbon::parse($experience->start_date)->format('M Y') }}
                                -

                                {{ $experience->end_date
                                    ? \Carbon\Carbon::parse($experience->end_date)->format('M Y')
                                    : 'Present'
                                }}

                            </span>

                        </div>

                        <p class="mt-6 text-slate-600 leading-8">

                            {{ $experience->description }}

                        </p>

                    </div>

                </div>

            @endforeach

        </div>

    </div>

</section>
<section id="education" class="reveal py-24 bg-slate-50">

    <div class="max-w-5xl mx-auto px-6">

        <div class="text-center mb-20">

            <span class="text-blue-600 font-semibold">
                Education
            </span>

            <h2 class="text-5xl font-bold mt-3">
                Academic Journey
            </h2>

            <p class="text-slate-500 mt-4">
                My educational background and learning path.
            </p>

        </div>

        <div class="space-y-8">

            @foreach($educations as $education)

                <div
                    class="
                        bg-white
                        rounded-3xl
                        border
                        border-slate-200
                        p-8
                        hover:shadow-xl
                        transition
                    ">

                    <div
                        class="
                            flex
                            flex-col
                            lg:flex-row
                            lg:justify-between
                            gap-4
                        ">

                        <div>

                            <h3
                                class="
                                    text-2xl
                                    font-bold
                                    text-slate-900
                                ">

                                {{ $education->institution }}

                            </h3>

                            <p
                                class="
                                    text-blue-600
                                    font-medium
                                    mt-2
                                ">

                                {{ $education->major }}

                            </p>

                        </div>

                        @if($education->gpa)

                            <div
                                class="
                                    inline-flex
                                    mt-4
                                    px-3
                                    py-1
                                    rounded-lg
                                    bg-green-50
                                    text-green-700
                                    text-sm
                                ">

                                GPA {{ $education->gpa }}

                            </div>

                        @endif

                        <div
                            class="
                                flex
                                items-center
                            ">

                            <span
                                class="
                                    px-4
                                    py-2
                                    bg-blue-50
                                    text-blue-700
                                    rounded-xl
                                    text-sm
                                    font-medium
                                ">

                                {{ $education->start_year }}
                                -
                                {{ $education->end_year ?? 'Present' }}

                            </span>

                        </div>

                    </div>

                    @if(!empty($education->description))

                        <p
                            class="
                                mt-6
                                text-slate-600
                                leading-8
                            ">

                            {{ $education->description }}

                        </p>

                    @endif

                </div>

            @endforeach

        </div>

    </div>

</section>
<section id="projects" class="reveal py-24">

    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-16">

            <span class="text-blue-600 font-semibold">
                Portfolio
            </span>

            <h2 class="text-5xl font-bold mt-3">
                Featured Projects
            </h2>

            <p class="text-slate-500 mt-4">
                Selected projects I've worked on.
            </p>

        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

            @foreach($projects as $project)

                <article
                    class="
                        group
                        bg-white
                        rounded-3xl
                        overflow-hidden
                        border
                        border-slate-200
                        hover:shadow-2xl
                        hover:-translate-y-2
                        transition
                        duration-300
                    ">

                    {{-- Thumbnail --}}
                    @if($project->thumbnail)

                        <img
                            src="{{ asset('storage/'.$project->thumbnail) }}"
                            alt="{{ $project->title }}"
                            class="
                                h-60
                                w-full
                                object-cover
                                group-hover:scale-105
                                transition
                                duration-500
                            ">

                    @else

                        <div
                            class="
                                h-60
                                bg-gradient-to-br
                                from-blue-600
                                to-indigo-700
                            ">
                        </div>

                    @endif

                    {{-- Content --}}
                    <div class="p-8">

                        <h3
                            class="
                                text-2xl
                                font-bold
                                mb-4
                                text-slate-900
                            ">

                            {{ $project->title }}

                        </h3>

                        <p
                            class="
                                text-slate-600
                                leading-7
                                mb-6
                            ">

                            {{ Str::limit($project->description, 120) }}

                        </p>

                        <div class="flex gap-3 mt-6">

                        @if($project->github_url)
                            <a
                                href="{{ $project->github_url }}"
                                target="_blank"
                                class="text-sm text-slate-600 hover:text-blue-600">

                                Github
                            </a>
                        @endif

                        @if($project->demo_url)
                            <a
                                href="{{ $project->demo_url }}"
                                target="_blank"
                                class="text-sm text-slate-600 hover:text-blue-600">

                                Live Demo
                            </a>
                        @endif

                    </div>

                        <div class="flex justify-between items-center">

                            <span
                                class="
                                    text-sm
                                    font-medium
                                    text-blue-600
                                ">
                                View Project →
                            </span>

                        </div>

                    </div>

                </article>

            @endforeach

        </div>

    </div>

</section>
<section id="certifications" class="reveal py-24 bg-slate-50">

    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-16">

            <span class="text-blue-600 font-semibold">
                Certifications
            </span>

            <h2 class="text-5xl font-bold mt-3">
                Learning Journey
            </h2>

            <p class="text-slate-500 mt-4">
                Courses and certifications that support my development career.
            </p>

        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

            @foreach($certifications as $certification)

                <div
                    class="
                        bg-white
                        rounded-3xl
                        border
                        border-slate-200
                        p-8
                        hover:shadow-xl
                        hover:-translate-y-1
                        transition
                    ">

                    <div
                        class="
                            w-14
                            h-14
                            rounded-2xl
                            bg-blue-100
                            flex
                            items-center
                            justify-center
                            mb-6
                        ">

                        🎓

                    </div>

                    <h3
                        class="
                            text-xl
                            font-bold
                            mb-3
                        ">

                        {{ $certification->title }}

                    </h3>

                    <p
                        class="
                            text-slate-500
                            mb-4
                        ">

                        {{ $certification->issuer }}

                    </p>

                    @if(isset($certification->issued_at))
                        <span
                            class="
                                text-sm
                                text-blue-600
                                font-medium
                            ">

                            {{ \Carbon\Carbon::parse($certification->issued_at)->format('M Y') }}

                        </span>
                    @endif

                </div>

            @endforeach

        </div>

    </div>

</section>
<section class="py-20">

    <div class="max-w-4xl mx-auto px-6">

        <div
            class="
                bg-slate-100
                rounded-3xl
                p-10
            ">

            <h2
                class="
                    text-3xl
                    font-bold
                    mb-4
                ">

                Current Focus

            </h2>

            <p
                class="
                    text-slate-600
                    leading-8
                ">

                Currently focusing on Laravel,
                Filament v3, Docker, MariaDB,
                and building scalable web applications.

            </p>

        </div>

    </div>

</section>
<section id="contact" class="reveal py-24">

    <div class="max-w-6xl mx-auto px-6">

        <div
            class="
                bg-gradient-to-r
                from-blue-600
                to-indigo-700
                rounded-[32px]
                overflow-hidden
            ">

            <div class="p-12 lg:p-16">

                <div class="grid lg:grid-cols-2 gap-12 items-center">

                    <div>

                        <span
                            class="
                                inline-flex
                                px-4
                                py-2
                                rounded-full
                                bg-white/10
                                text-white
                                text-sm
                            ">

                            Contact Me

                        </span>

                        <h2
                            class="
                                text-4xl
                                lg:text-5xl
                                font-bold
                                text-white
                                mt-6
                                mb-6
                            ">

                            Let's Build Something Amazing Together

                        </h2>

                        <p
                            class="
                                text-blue-100
                                leading-8
                            ">

                            Open for internships, freelance opportunities,
                            collaborations, and exciting software development projects.

                        </p>

                    </div>

                    <div
                        class="
                            bg-white
                            rounded-3xl
                            p-8
                        ">

                        <div class="space-y-6">

                            @if($profile?->email)
                                <div>

                                    <p class="text-sm text-slate-500">
                                        Email
                                    </p>

                                    <a
                                        href="mailto:{{ $profile->email }}"
                                        class="font-semibold text-lg">

                                        {{ $profile->email }}

                                    </a>

                                </div>
                            @endif

                            @if($profile?->phone)
                                <div>

                                    <p class="text-sm text-slate-500">
                                        Phone
                                    </p>

                                    <p class="font-semibold text-lg">
                                        {{ $profile->phone }}
                                    </p>

                                </div>
                            @endif

                            @if($profile?->location)
                                <div>

                                    <p class="text-sm text-slate-500">
                                        Location
                                    </p>

                                    <p class="font-semibold text-lg">
                                        {{ $profile->location }}
                                    </p>

                                </div>
                            @endif

                            <div class="flex gap-4 pt-4">

                                @if($profile?->github)
                                    <a
                                        href="{{ $profile->github }}"
                                        target="_blank"
                                        class="
                                            px-4 py-2
                                            rounded-xl
                                            bg-slate-100
                                            hover:bg-slate-200
                                            transition
                                        ">

                                        GitHub

                                    </a>
                                @endif

                                @if($profile?->linkedin)
                                    <a
                                        href="{{ $profile->linkedin }}"
                                        target="_blank"
                                        class="
                                            px-4 py-2
                                            rounded-xl
                                            bg-slate-100
                                            hover:bg-slate-200
                                            transition
                                        ">

                                        LinkedIn

                                    </a>
                                @endif

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
<footer class="py-10 border-t border-slate-200">

    <div
        class="
            max-w-7xl
            mx-auto
            px-6
            flex
            flex-col
            md:flex-row
            justify-between
            items-center
            gap-4
        ">

        <div>

            <h3 class="font-bold text-xl">
                {{ $profile?->name }}
            </h3>

            <p class="text-slate-500">
                {{ $profile?->headline }}
            </p>

        </div>

        <p class="text-slate-500 text-sm">
            © {{ now()->year }} {{ $profile?->name }}.
            All Rights Reserved.
        </p>

    </div>

</footer>
<script>

    const reveals =
        document.querySelectorAll('.reveal');

    const observer =
        new IntersectionObserver(entries => {

            entries.forEach(entry => {

                if (entry.isIntersecting) {

                    entry.target.classList.add(
                        'show'
                    );

                }

            });

        });

    reveals.forEach(el => observer.observe(el));

</script>
@endsection