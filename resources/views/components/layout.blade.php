<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Add jQuery CDN -->
</head>

<body>
    <div class="min-h-full w-full" id="artifacts-component-root-react">
        <div class="min-h-screen bg-gray-50 py-8">
            <div class="max-w-7xl mx-auto px-4">
                <!-- Add the action attribute with the URL where the form should be submitted -->
                <form class="bg-white rounded-lg shadow-lg p-6" action="/changeall" method="POST">
                    @csrf
                    <h1 class="text-2xl font-bold text-gray-900 mb-6">Database Changes Request - @yield('h1')</h1>

                    @section('search')
                    @show
                    

                    @section('button')
                    @show

                    <!-- Button to add new row -->
                    <div class="flex justify-start">
                        <button type="button" id="add-row-btn" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700">
                            Add New Row
                        </button>
                    </div>

                    <!-- Table for displaying and editing data -->
                    <div class="overflow-x-auto mt-8">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                               @section('table')
                               @show
                        </table>
                    </div>

                    <!-- Submit button (will submit form to /submit-changes) -->
                    <div class="flex justify-end mt-6">
                        <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700">
                            Submit Changes
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
   @section('footer')
   @show
</body>
</html>
