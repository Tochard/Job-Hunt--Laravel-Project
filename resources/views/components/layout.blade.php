<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Hunt</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-black text-white pb-10">

    <div class="px-10">
        <nav class="flex justify-between items-center bg-black border-b border-white/10 py-4">

            <div>
                <a href="/">
                    <img class="h-12" src="{{ Vite::asset('resources/images/logo.png') }}" alt="Logo">
                </a>
            </div>
            <div class="space-x-6 font-semibold">
                <a href="#">Jobs</a>
                <a href="#">Careers</a>
                <a href="#">Salaries</a>
                <a href="#">Companies</a>
            </div>
            <div>
                <a href="#">Post a Job</a>
            </div>

        </nav>

        <main class="mt-10 mx-auto max-w-[986px]">
            {{ $slot }}
        </main>
    </div>

</body>

</html>
