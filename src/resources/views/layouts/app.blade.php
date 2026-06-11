<!DOCTYPE html>
<html lang="en">
<head>
<meta
    name="description"
    content="{{ $profile?->headline }}">

<meta
    property="og:title"
    content="{{ $profile?->name }}">

<meta
    property="og:description"
    content="{{ $profile?->headline }}">

    <title>{{ $profile?->name ?? 'Portfolio' }}</title>


    @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            html{
    scroll-behavior:smooth;
}
</style>
</head>
<body class="bg-slate-50 text-slate-900">
    
    <nav
        id="navbar"
        class="
            fixed
            top-0
            left-0
            right-0
            z-50
            backdrop-blur-md
            bg-white/80
            border-b
            border-slate-200
        ">

        <div class="max-w-7xl mx-auto px-6">

            <div class="h-20 flex items-center justify-between">

                <div class="flex items-center gap-3">

                    <div>

                        <img src="public/pumpkin.png" alt="">

                    </div>

                    <div>

                        <h3 class="font-bold">
                            Bayu Johari
                        </h3>

                        <p class="text-xs text-slate-500">
                            Laravel Developer
                        </p>

                    </div>

                </div>
                {{-- Desktop --}}
                <div class="hidden md:flex items-center gap-8">

                    <a href="#about">About</a>
                    <a href="#experience">Experience</a>
                    <a href="#education">Education</a>
                    <a href="#projects">Projects</a>
                    <a href="#certifications">Certifications</a>

                </div>

                {{-- Mobile Button --}}
                <button
                    id="menu-toggle"
                    class="md:hidden">

                    ☰

                </button>

            </div>

        </div>

        {{-- Mobile Menu --}}
        <div
            id="mobile-menu"
            class="
                hidden
                md:hidden
                bg-white
                border-t
                border-slate-200
            ">

            <div class="flex flex-col p-6 gap-4">

                <a href="#about">About</a>
                <a href="#experience">Experience</a>
                <a href="#education">Education</a>
                <a href="#projects">Projects</a>
                <a href="#certifications">Certifications</a>
                <a href="#contact">Contact</a>

            </div>

        </div>

    </nav>

    @yield('content')

<script>
    document.addEventListener('DOMContentLoaded', () => {

    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('nav a[href^="#"]');

    window.addEventListener('scroll', () => {

        let current = '';

        sections.forEach(section => {

            const sectionTop = section.offsetTop - 120;

            if (scrollY >= sectionTop) {
                current = section.getAttribute('id');
            }

        });

        navLinks.forEach(link => {

            link.classList.remove(
                'text-blue-600',
                'font-semibold'
            );

            if (
                link.getAttribute('href') === `#${current}`
            ) {

                link.classList.add(
                    'text-blue-600',
                    'font-semibold'
                );

            }

        });

    });

 });
</script>
<script>
    window.addEventListener('scroll', () => {

        const nav = document.getElementById('navbar');

        if (window.scrollY > 50) {

            nav.classList.add(
                'shadow-lg'
            );

        } else {

            nav.classList.remove(
                'shadow-lg'
            );

        }

    });
</script>
<script>

    document
        .getElementById('menu-toggle')
        .addEventListener('click', () => {

            document
                .getElementById('mobile-menu')
                .classList
                .toggle('hidden');

        });

</script>
</body>
</html>