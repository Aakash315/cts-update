<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Change Request</title>
</head>

<body>
    <div class="min-h-full w-full" id="artifacts-component-root-react">
        <div class="min-h-screen bg-gray-50 p-8">
            <div class="max-w-7xl mx-auto">
                <div class="flex justify-between items-center mb-8">
                    <div>
                        <h1 class="text-2xl font-bold text-gray-900">Change Requests</h1>
                        <p class="text-gray-500">Manage and track database change requests</p>
                    </div>
                    <button class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground shadow hover:bg-primary/90 h-9 px-4 py-2">Create New Request</button>
                </div>
                <div class="bg-card text-card-foreground rounded-xl border shadow mb-8">
                    <div class="p-6 pt-0">
                        <div class="flex flex-col md:flex-row gap-4">
                            <div class="flex-1">
                                <div class="relative">
                                    @svg('search',)
                                    <input class="border-input placeholder:text-muted-foreground focus-visible:ring-ring flex h-9 w-full rounded-md border bg-transparent px-3 py-1 text-sm shadow-sm transition-colors file:border-0 file:bg-transparent file:text-sm file:font-medium focus-visible:outline-none focus-visible:ring-1 disabled:cursor-not-allowed disabled:opacity-50 pl-10" placeholder="Search requests..." type="text" value="">
                                </div>
                            </div>
                            <div class="flex gap-4">
                                
                                <!-- Dropdown for Status (Approved, Rejected, Pending) -->
                                <div class="relative">
                                    <button type="button" class="border-input ring-offset-background placeholder:text-muted-foreground focus:ring-ring flex h-9 items-center justify-between whitespace-nowrap rounded-md border bg-transparent px-3 py-2 text-sm shadow-sm focus:outline-none focus:ring-1 disabled:cursor-not-allowed disabled:opacity-50 w-[180px]" id="status-dropdown">
                                        <span style="pointer-events: none;">All Statuses</span>
                                        @svg('dropdown')
                                    </button>
                                    <!-- Dropdown Menu for Status -->
                                    <div class="absolute hidden mt-1 w-full bg-white border border-gray-200 rounded-md shadow-lg" id="status-menu">
                                        <ul class="py-1 text-sm text-gray-700">
                                            <li>
                                                <a href="{{ route('change-requests.approved') }}" class="block px-4 py-2 text-sm hover:bg-gray-100">Approved</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('change-requests.rejected') }}" class="block px-4 py-2 text-sm hover:bg-gray-100">Rejected</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('change-requests.pending') }}" class="block px-4 py-2 text-sm hover:bg-gray-100">Pending</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Dropdown for Tables (Country, States, Cities) -->
                                <div class="relative">
                                    <button type="button" class="border-input ring-offset-background placeholder:text-muted-foreground focus:ring-ring flex h-9 items-center justify-between whitespace-nowrap rounded-md border bg-transparent px-3 py-2 text-sm shadow-sm focus:outline-none focus:ring-1 disabled:cursor-not-allowed disabled:opacity-50 w-[180px]" id="tables-dropdown">
                                        <span style="pointer-events: none;">All Tables</span>
                                        @svg('dropdown')
                                    </button>
                                    <!-- Dropdown Menu -->
                                    <div class="absolute hidden mt-1 w-full bg-white border border-gray-200 rounded-md shadow-lg" id="tables-menu">
                                        <ul class="py-1 text-sm text-gray-700">
                                            <li>
                                                <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Countries</a>
                                            </li>
                                            <li>
                                                <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">States</a>
                                            </li>
                                            <li>
                                                <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Cities</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="space-y-4">
                    <div class="bg-card text-card-foreground rounded-xl border shadow hover:shadow-md transition-shadow">
                        <div class="p-6 pt-0">
                            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                                <div class="flex-1">
                                    <div class="flex items-start gap-4">
                                        @svg('db')
                                        <div>
                                            <h3 class="text-lg font-semibold hover:text-blue-600">
                                                <a href="/change-requests/3">Update Country Currency Codes</a>
                                            </h3>
                                            <p class="text-gray-600 text-sm mt-1">Updating outdated currency information</p>
                                            <div class="flex flex-wrap items-center gap-4 mt-3 text-sm text-gray-500">
                                                <div class="flex items-center">
                                                    @svg('user')
                                                    Mike Johnson
                                                </div>
                                                <div class="flex items-center">
                                                    @svg('calendar')
                                                    Jan 3, 2024, 02:45 PM
                                                </div>
                                                <div class="flex items-center">
                                                    @svg('db', 'w-4 h-4')
                                                    Table: countries</div>
                                                <div>12 changes</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-4">
                                    <div class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground bg-red-100 text-red-800 border-red-200">
                                        @svg('reject')
                                        Rejected</div>
                                    <button class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 px-4 py-2 ml-2">View Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-card text-card-foreground rounded-xl border shadow hover:shadow-md transition-shadow">
                        <div class="p-6 pt-0">
                            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                                <div class="flex-1">
                                    <div class="flex items-start gap-4">
                                        @svg('db')
                                        <div>
                                            <h3 class="text-lg font-semibold hover:text-blue-600">
                                                <a href="/change-requests/1">Update US States Information</a>
                                            </h3>
                                            <p class="text-gray-600 text-sm mt-1">Updating state capitals and population data</p>
                                            <div class="flex flex-wrap items-center gap-4 mt-3 text-sm text-gray-500">
                                                <div class="flex items-center">
                                                    @svg('user')
                                                    John Doe</div>
                                                <div class="flex items-center">
                                                    @svg('calendar')
                                                    Jan 2, 2024, 04:00 PM</div>
                                                <div class="flex items-center">
                                                    @svg('db', 'w-4 h-4')
                                                    Table: states</div>
                                                <div>5 changes</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-4">
                                    <div class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground bg-yellow-100 text-yellow-800 border-yellow-200">
                                        @svg('pending')
                                        Pending</div>
                                    <button class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 px-4 py-2 ml-2">View Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-card text-card-foreground rounded-xl border shadow hover:shadow-md transition-shadow">
                        <div class="p-6 pt-0">
                            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                                <div class="flex-1">
                                    <div class="flex items-start gap-4">
                                        @svg('db')
                                        <div>
                                            <h3 class="text-lg font-semibold hover:text-blue-600">
                                                <a href="/change-requests/2">Add New Cities to California</a>
                                            </h3>
                                            <p class="text-gray-600 text-sm mt-1">Adding newly incorporated cities</p>
                                            <div class="flex flex-wrap items-center gap-4 mt-3 text-sm text-gray-500">
                                                <div class="flex items-center">
                                                    @svg('user')
                                                    Jane Smith</div>
                                                <div class="flex items-center">
                                                    @svg('calendar')
                                                    Jan 1, 2024, 09:15 PM</div>
                                                <div class="flex items-center">
                                                    @svg('db', 'w-4 h-4')
                                                    Table: cities</div>
                                                <div>3 changes</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-4">
                                    <div class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground bg-green-100 text-green-800 border-green-200">
                                        @svg('approved')
                                        Approved</div>
                                    <button class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 px-4 py-2 ml-2">
                                        View Details
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const tablesDropdownButton = document.getElementById('tables-dropdown');
            const tablesDropdownMenu = document.getElementById('tables-menu');
            const statusDropdownButton = document.getElementById('status-dropdown');
            const statusDropdownMenu = document.getElementById('status-menu');

            // Toggle the dropdown menu for Tables when the button is clicked
            tablesDropdownButton.addEventListener('click', function () {
                tablesDropdownMenu.classList.toggle('hidden');
            });

            // Toggle the dropdown menu for Status when the button is clicked
            statusDropdownButton.addEventListener('click', function () {
                statusDropdownMenu.classList.toggle('hidden');
            });

            // Close the dropdowns if clicked outside
            document.addEventListener('click', function (e) {
                if (!tablesDropdownButton.contains(e.target) && !tablesDropdownMenu.contains(e.target)) {
                    tablesDropdownMenu.classList.add('hidden');
                }
                if (!statusDropdownButton.contains(e.target) && !statusDropdownMenu.contains(e.target)) {
                    statusDropdownMenu.classList.add('hidden');
                }
            });
        });
    </script>
</body>

</html>