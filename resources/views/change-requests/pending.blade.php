<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Pending Change Requests</title>
</head>

<body>
    <div class="min-h-full w-full" id="artifacts-component-root-react">
        <div class="min-h-screen bg-gray-50 p-8">
            <div class="max-w-7xl mx-auto">
                <div class="flex justify-between items-center mb-8">
                    <div>
                        <h1 class="text-2xl font-bold text-gray-900">Pending Change Requests</h1>
                        <p class="text-gray-500">Manage and track pending change requests</p>
                    </div>
                    <button class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground shadow hover:bg-primary/90 h-9 px-4 py-2">Create New Request</button>
                </div>

                <!-- Pending Change Requests -->
                <div class="space-y-4">
                    @foreach($pendingRequests as $request)
                        <div class="bg-card text-card-foreground rounded-xl border shadow hover:shadow-md transition-shadow">
                            <div class="p-6 pt-0">
                                <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                                    <div class="flex-1">
                                        <div class="flex items-start gap-4">
                                            @svg('db')
                                            <div>
                                                <h3 class="text-lg font-semibold hover:text-blue-600">
                                                    <a href="">{{ $request->title }}</a>
                                                </h3>
                                                <p class="text-gray-600 text-sm mt-1">{{ $request->description }}</p>
                                                <div class="flex flex-wrap items-center gap-4 mt-3 text-sm text-gray-500">
                                                    <div class="flex items-center">
                                                        @svg('user')
                                                        {{ $request->user->name }}
                                                    </div>
                                                    <div class="flex items-center">
                                                        @svg('calendar')
                                                        {{ $request->created_at->format('M d, Y, h:i A') }}
                                                    </div>
                                                    <div class="flex items-center">
                                                        @svg('db', 'w-4 h-4')
                                                        Table: {{ $request->table_name }}
                                                    </div>
                                                    <div>{{ $request->changes_count }} changes</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <div class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground bg-yellow-100 text-yellow-800 border-yellow-200">
                                            @svg('pending')
                                            Pending
                                        </div>
                                        <button class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 px-4 py-2 ml-2">View Details</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                @if($pendingRequests->isEmpty())
                    <div class="mt-4 text-gray-500">No pending change requests found.</div>
                @endif
            </div>
        </div>
    </div>
</body>

</html>
