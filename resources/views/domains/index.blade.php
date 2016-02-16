@extends('layouts.app')

@section('pageTitle', 'Current Domains')

@section('content')
    <h1>Current Domains</h1>
    <table class="table table-bordered table-responsive">
        <thead>
        <tr>
            <th>ID</th>
            <th>Domain Name</th>
            <th>Username</th>
            <th>WordPress</th>
            <th>Created</th>
            <th>Created By</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($domains as $domain)
            <tr>
                <td class="text-center">{{ $domain->id }}</td>
                <td><a href="http://{{ $domain->name }}" target="_blank">{{ $domain->name }}</a></td>
                <td>{{ $domain->username }}</td>
                <td class="text-center">{{ $domain->isWordPress ? 'Yes' : 'No' }}</td>
                <td class="text-center">{{ $domain->createdAt }}</td>
                <td class="text-center">{{ $domain->userId }}</td>
                <td class="text-center">{{ $domain->trashed() ? 'Created' : 'Queued' }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection