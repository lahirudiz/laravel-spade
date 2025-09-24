<x-layout title="Jobs">
    <h1>Jobs</h1>
    
    <ul>
        @foreach ($jobs as $job)
            <li class="space-y-4">
                <a href="/jobs/{{ $job['id']}}" target="_blank">
                    <small>{{ $job->employer->name }}</small>
                    <div>
                        <strong>{{ $job['title']}}</strong>, Salary: {{ $job['salary']}}
                    </div>
                </a>
                <hr>
            </li>
        @endforeach        
    </ul>

</x-layout>