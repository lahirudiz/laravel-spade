<x-layout title="Jobs">
    <h1>Jobs</h1>
    
    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id']}}" target="_blank">
                    <strong>{{ $job['title']}}</strong>, Salary: {{ $job['salary']}}
                </a>
            </li>
        @endforeach        
    </ul>

</x-layout>