<x-layout title="View">
    <h1>Job View</h1>
    
    @isset($job)
        <h2><strong>{{ $job['title'] }}</strong></h2>
        <h2>Salary: {{ $job['salary'] }}</h2>
    @else
        <p>No job found.</p>
    @endisset

</x-layout>