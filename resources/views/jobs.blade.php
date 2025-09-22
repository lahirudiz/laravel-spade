<x-layout>
    <h1>Jobs</h1>
    
    <ul>
        @foreach ($jobs as $job)
            <li>
                <strong>{{ $job['title']}}</strong>, Salary: {{ $job['salary']}}
            </li>
        @endforeach        
    </ul>

</x-layout>