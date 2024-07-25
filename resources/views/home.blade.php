@extends('app')

@section('content')
@vite(['resources/css/app.css', 'resources/js/app.js'])
<!-- Hero Section -->
<div class="hero-section">
    <h1>Welcome to Gadrox</h1>
    <p>Your trusted partner in delivering quality solutions.</p>
    <a href="{{ route('contact') }}" class="btn btn-primary">Contact Us</a>
</div>

<!-- Slideshow -->
<div class="slideshow">
    <div class="slide">
        <img src="{{ asset('https://gadrox.com/images/header_2.jpeg') }}" alt="Slide 1">
    </div>
    <div class="slide">
        <img src="{{ asset('https://gadrox.com/images/header_3.jpeg') }}" alt="Slide 2">
    </div>
    <div class="slide">
        <img src="{{ asset('https://gadrox.com/images/WhatsAppImage2023-11-04at09.29.411.jpeg') }}" alt="Slide 3">
    </div>
</div>

<!-- User Reviews -->
<section class="reviews">
    <h2>User Reviews</h2>
    <div class="review-item">
        <p>"Gadrox provided excellent service and support!"</p>
        <cite>- User A</cite>
    </div>
    <div class="review-item">
        <p>"Highly recommend their services for quality and reliability."</p>
        <cite>- User B</cite>
    </div>
    <div class="review-item">
        <p>"Professional team and great results!"</p>
        <cite>- User C</cite>
    </div>
</section>

<!-- Gallery -->
<section class="gallery">
    <h2>Our Work</h2>
    <div class="gallery-item">
        <img src="{{ asset('https://gadrox.com/images/WhatsAppImage2023-11-09at07.56.421.jpeg') }}" alt="Project 1">
    </div>
    <div class="gallery-item">
        <img src="{{ asset('https://gadrox.com/images/WhatsAppImage2023-11-09at07.56.42.jpeg') }}" alt="Project 2">
    </div>
    <div class="gallery-item">
        <img src="{{ asset('https://gadrox.com/images/WhatsAppImage2023-11-09at07.56.41.jpeg') }}" alt="Project 3">
    </div>
</section>

<!-- Calendar Section -->
<section class="calendar">
    <h2>Events Calendar</h2>
    <div id="calendar"></div>
</section>

<!-- Footer -->
<footer>
    <p>&copy; {{ date('Y') }} Gadrox. All rights reserved.</p>
</footer>

@endsection

@push('scripts')
<!-- Include FullCalendar JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.2/main.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Slideshow functionality
        const slides = document.querySelectorAll(".slide");
        let currentSlide = 0;

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.style.transform = `translateX(${100 * (i - index)}%)`;
            });
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }

        setInterval(nextSlide, 3000); // Change slide every 3 seconds

        // Calendar functionality
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            events: [
                // Example events
                { title: 'Event 1', date: '2024-07-01' },
                { title: 'Event 2', date: '2024-07-15' },
                { title: 'Event 3', date: '2024-08-05' }
            ]
        });
        calendar.render();
    });
</script>
@endpush
