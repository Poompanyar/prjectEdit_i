@extends('layout')
@section('title')
    
@endsection
@section('content')
    

<div class="container p-2 mx-auto sm:p-4 dark:text-gray-800">
	<h2 class="mb-4 text-2xl font-semibold leading-tight">Users</h2>
	<div class="overflow-x-auto">
		<table class="w-full p-6 text-xs text-left whitespace-nowrap">
			<colgroup>
				<col class="w-5">
				<col>
				<col>
				<col>
				<col>
				<col>
				<col class="w-5">
			</colgroup>
			<thead>
				<tr class="dark:bg-gray-300">
					<th class="p-3">Name / Email</th>
					<th class="p-3">Line / Phone</th>
					<th class="p-3">Address / Birth</th>
					<th class="p-3">profile_picture</th>
					<th class="p-3">qualification</th>
					<th class="p-3">graduation_year</th>
					<th class="p-3">Action</th>
				</tr>
			</thead>
			@foreach ($dataUsers as $item)
            <tbody class="border-b dark:bg-gray-50 dark:border-gray-300">
				<tr>
					<td class="px-3 py-2">{{$item->name}}</td>
					<td class="px-3 py-2">
						<p>{{$item->line}}</p>
					</td>
					<td class="px-3 py-2">
						<span>{{$item->address}}</span>
					</td>
					<td class="px-3 py-2">
						<p>{{$item->profile_picture}}</p>
					</td>
					<td class="px-3 py-2">
						<p>{{$item->qualification}}</p>
					</td>
					<td class="px-3 py-2">
						<p>{{$item->graduation_year}}</p>
					</td>
					<td class="px-3 py-2">
						<a href="{{route('editData', $item->id)}}" class="p-1 rounded-full dark:text-gray-400 hover:dark:bg-gray-300 focus:dark:bg-gray-300">
                            Edit
						</a>
					</td>
				</tr>
				<tr>
					<td class="px-3 py-2">{{$item->email}}</td>
					<td class="px-3 py-2">
						<p>{{$item->phone}}</p>
					</td>
					<td class="px-3 py-2">
						<span>{{$item->birthdate}}</span>
					</td>
					<td class="px-3 py-2">
						{{-- <p>555-129-0761</p> --}}
					</td>
					<td class="px-3 py-2">
						{{-- <p>richie@allen.com</p> --}}
					</td>
					<td class="px-3 py-2">
						{{-- <p>Knesebeckstrasse 32, Obersteinebach</p>
						<p class="dark:text-gray-600">Germany</p> --}}
					</td>
					<td class="px-3 py-2">
						<a href="{{route('delete', $item->id)}}" class="p-1 rounded-full dark:text-gray-400 hover:dark:bg-gray-300 focus:dark:bg-gray-300">
                            Delete
						</a>
					</td>
				</tr>
			</tbody>
            @endforeach
		</table>
	</div>
</div>


@endsection