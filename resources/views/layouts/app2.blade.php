<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Laravel Livewire App</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @livewireStyles
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen flex flex-col">
        <!-- Navigation -->
        <nav class="bg-gray-800 p-4">
            <div class="container mx-auto flex justify-between items-center">
                <a href="#" class="text-white text-lg font-semibold">Your App</a>
                <!-- Add any navigation links or components here -->
            </div>
        </nav>

        <!-- Page Content -->
        <main class="flex-1 container mx-auto mt-4">
            @yield('content')
        </main>
        
        <!-- Footer -->
        <footer class="bg-gray-800 text-white p-4">
            <div class="container mx-auto text-center">
                <!-- Add footer content here -->
            </div>
        </footer>
    </div>

    @livewireScripts
</body>
</html>
