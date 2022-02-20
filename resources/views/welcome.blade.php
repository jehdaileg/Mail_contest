<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>


        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0 flex-col">

             <div class="text-3xl texte-blue-500 flex justify-center">

              <form action="/contest" method="post">
                  @csrf
                  @method('post')

                <label for="email" class="font-bold text-xl">Email Adress</label>
                <input type="email" class="rounded-lg p-4 shadow-lg bg-gray-400 text-indigo-400" name="email" placeholder="Enter your email..." />

                <div>
                    <button class="bg-pink-400 text-white rounded-lg p-2 shadow-lg default-cursor">Send It</button>
                </div>
              </form>

             </div>
        </div>
    </body>
</html>
