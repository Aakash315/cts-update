@extends('components.layout')

@section('title', 'Country Change')
@section('h1', 'Countries')

@section('search')
<!-- Search Bar -->
<div class="mb-6">
    <input
        type="text"
        id="search-input"
        class="w-full p-2 border rounded-md"
        placeholder="Search countries..." />
</div>
@endsection

@section('button')
<div class="flex border-b border-gray-200 mb-6">
    <button type="button" class="py-2 px-4 border-b-2 font-medium border-blue-500 text-blue-600">Countries</button>
    <button type="button" class="py-2 px-4 border-b-2 font-medium border-transparent text-gray-500 hover:text-gray-700">
        <a href="/statechange">States</a>
    </button>
    <button type="button" class="py-2 px-4 border-b-2 font-medium border-transparent text-gray-500 hover:text-gray-700">
        <a href="/citieschange">Cities</a>
    </button>
</div>
@endsection

@section('table')
<tr>
    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ISO2</th>
    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ISO3</th>
    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Phone Code</th>
    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Currency</th>
    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Region</th>
    <th class="px-6 py-3 text-right">Actions</th>
</tr>
</thead>
<tbody class="bg-white divide-y divide-gray-200" id="countries-table-body">
    <!-- Dynamic rows will be inserted here -->
</tbody>
@endsection

@section('footer')
@vite('resources/js/script.js')
@endsection