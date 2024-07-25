@extends('app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
@vite(['resources/css/app.css', 'resources/js/app.js'])
<div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="display-4">About Us</h1>
        <p class="lead">Learn more about our mission, vision, values, and meet the team behind our success.</p>
    </div>

    <section class="mission-vision mb-5">
        <div class="row">
            <div class="col-lg-6">
                <h2>Our Mission</h2>
                <p>To provide innovative solutions that empower our clients to achieve their goals and enhance their business operations.</p>
            </div>
            <div class="col-lg-6">
                <h2>Our Vision</h2>
                <p>To be a leading provider of quality solutions and services, recognized for our commitment to excellence and customer satisfaction.</p>
            </div>
        </div>
    </section>

    <section class="core-values mb-5">
        <h2>Core Values</h2>
        <ul class="list-group">
            <li class="list-group-item"><strong>Integrity:</strong> We uphold the highest standards of integrity in all our actions.</li>
            <li class="list-group-item"><strong>Innovation:</strong> We embrace change and continuously seek new ways to improve our services.</li>
            <li class="list-group-item"><strong>Collaboration:</strong> We work together to achieve common goals and foster a spirit of teamwork.</li>
            <li class="list-group-item"><strong>Customer Focus:</strong> We prioritize our customers' needs and strive to exceed their expectations.</li>
            <li class="list-group-item"><strong>Excellence:</strong> We are committed to delivering quality and excellence in everything we do.</li>
        </ul>
    </section>

    <section class="team mb-5">
        <h2 class="mb-4">Meet Our Team</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card text-center">
                    <img src="{{ asset('images/team-member1.jpg') }}" class="card-img-top" alt="John Doe">
                    <div class="card-body">
                        <h5 class="card-title">John Doe</h5>
                        <p class="card-text">CEO</p>
                        <p class="card-text">John leads the company with a vision for growth and innovation.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <img src="{{ asset('images/team-member2.jpg') }}" class="card-img-top" alt="Jane Smith">
                    <div class="card-body">
                        <h5 class="card-title">Jane Smith</h5>
                        <p class="card-text">CTO</p>
                        <p class="card-text">Jane is responsible for overseeing the technological direction of the company.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <img src="{{ asset('images/team-member3.jpg') }}" class="card-img-top" alt="Emily Johnson">
                    <div class="card-body">
                        <h5 class="card-title">Emily Johnson</h5>
                        <p class="card-text">Marketing Manager</p>
                        <p class="card-text">Emily drives the marketing strategies to promote our services.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials mb-5">
        <h2 class="mb-4">What Our Clients Say</h2>
        <div class="row">
            <div class="col-md-6">
                <blockquote class="blockquote">
                    <p class="mb-0">“Gadrox Limited transformed our business operations with their innovative solutions. Highly recommended!”</p>
                    <footer class="blockquote-footer">Alice Johnson, <cite title="Company Name">ABC Corp</cite></footer>
                </blockquote>
            </div>
            <div class="col-md-6">
                <blockquote class="blockquote">
                    <p class="mb-0">“Exceptional service and support. Gadrox Limited exceeded our expectations in every aspect.”</p>
                    <footer class="blockquote-footer">Robert Smith, <cite title="Company Name">XYZ Ltd</cite></footer>
                </blockquote>
            </div>
        </div>
    </section>

    <section class="contact-us">
        <h2 class="mb-4">Get in Touch</h2>
        <form action="{{ route('contact.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
    </section>
</div>
@endsection
