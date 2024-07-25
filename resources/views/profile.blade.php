@extends('app')

@section('content')
@vite(['resources/css/app.css', 'resources/js/app.js'])
<div class="profile-page">
    <h1>Profile</h1>

    <section class="projects">
        <h2>Ongoing Projects</h2>
        @foreach($ongoingProjects as $project)
        <div class="project-card">
            <h3>{{ $project->title }}</h3>
            <p>{{ $project->description }}</p>
            <p>Status: <span class="status ongoing">{{ $project->status }}</span></p>
        </div>
        @endforeach
    </section>

    <section class="projects">
        <h2>Pending Projects</h2>
        @foreach($pendingProjects as $project)
        <div class="project-card">
            <h3>{{ $project->title }}</h3>
            <p>{{ $project->description }}</p>
            <p>Status: <span class="status pending">{{ $project->status }}</span></p>
        </div>
        @endforeach
    </section>

    <section class="projects">
        <h2>Completed Projects</h2>
        @foreach($completedProjects as $project)
        <div class="project-card">
            <h3>{{ $project->title }}</h3>
            <p>{{ $project->description }}</p>
            <p>Status: <span class="status completed">{{ $project->status }}</span></p>
        </div>
        @endforeach
    </section>
</div>
@endsection