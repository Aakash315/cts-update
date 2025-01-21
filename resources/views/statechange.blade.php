@extends('components.layout')

@section('title', 'States Change')
@section('h1', 'States')


@section('search')
<!-- Search Bar -->
<div class="mb-6">
    <div class="mb-4 flex gap-4">
        <div class="relative flex-1">
            <input
                type="text"
                id="search-input"
                class="w-full p-2 border rounded-md"
                placeholder="Search States..." />
        </div>
        <select class="w-64 p-2 border rounded-lg">
            <option value="">All Countries</option>
        </select>
    </div>
</div>
@endsection

@section('button')
<div class="flex border-b border-gray-200 mb-6">
    <button type="button" class="py-2 px-4 border-b-2 font-medium border-transparent text-gray-500 hover:text-gray-700">
        <a href="/countrychange">Countries</a>
    </button>
    <button type="button" class="py-2 px-4 border-b-2 font-medium border-blue-500 text-blue-600">States</button>
    <button type="button" class="py-2 px-4 border-b-2 font-medium border-transparent text-gray-500 hover:text-gray-700">
        <a href="/citieschange">Cities</a>
    </button>
</div>
@endsection



@section('table')
<tr>
    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">State Code</th>
    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Country</th>
    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Type</th>
    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Latitude</th>
    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Longitude</th>
    <th class="px-6 py-3 text-right">Actions</th>
</tr>
</thead>
<tbody class="bg-white divide-y divide-gray-200" id="states-table-body">
    <!-- Dynamic rows will be inserted here -->
</tbody>
@endsection


@section('footer') 
@vite('resources/js/scriptstates.js')
@endsection