<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Login</title>
</head>

<body class="h-screen bg-cover bg-center bg-slate-300">
    <div class="h-screen flex items-center justify-center"> <!-- Centering content vertically and horizontally -->
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-xl">
            <div class="sm:mx-auto sm:w-full sm:max-w-md mt-5">
                <h2 class="text-center text-3xl font-extrabold text-gray-900">Database Change Request System</h2>
                <p class="mt-2 text-center text-sm text-gray-600">Sign in to manage database changes</p>
            </div>

            <div class="flex items-center justify-center h-full bg-opacity-50">
                <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-sm">
                    <h2 class="text-2xl font-semibold text-center mb-6"><u>Login</u></h2>
                    <div class="mb-4">
                        <a href="https://github.com/login" target="_blank" class="w-full py-3 px-[135px] bg-black text-white rounded-md hover:bg-slate-700 focus:outline-none focus:ring-2 focus:ring-slate-500">GitHub</a>
                    </div>
                    <h1 class="font-bold text-center">OR</h1>
                    <form action="/login-page" method="post">
                        <div class="mb-4">
                            <label for="username" class="block text-sm font-medium text-gray-700">Email Address</label>
                            <input type="text" id="username" name="username" placeholder="Enter your username" required
                                class="w-full mt-2 p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <button type="submit" class="w-full py-3 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            Login
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
