@extends('app')

@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
@vite(['resources/css/app.css', 'resources/js/app.js'])

<div class="contact-container">
    <h1>Contact Us</h1>
    <form action="{{ route('contact.store') }}" method="POST" class="contact-form">
        @csrf
        <div class="form-group">
            <input type="text" name="name" placeholder="Your Name" required>
        </div>
        <div class="form-group">
            <input type="email" name="email" placeholder="Your Email" required>
        </div>
        <div class="form-group">
            <input type="text" name="subject" placeholder="Subject" required>
        </div>
        <div class="form-group">
            <textarea name="message" placeholder="Your Message" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Send Message</button>
    </form>

    <div class="social-media">
        <a href="https://wa.me/YOUR_PHONE_NUMBER" target="_blank" class="whatsapp"><i class="fab fa-whatsapp"></i> WhatsApp</a>
        <a href="https://www.instagram.com/yourprofile" target="_blank" class="instagram"><i class="fab fa-instagram"></i></a>
        <a href="https://www.facebook.com/yourprofile" target="_blank" class="facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="https://www.tiktok.com/@yourprofile" target="_blank" class="tiktok"><i class="fab fa-tiktok"></i></a>
        <a href="https://twitter.com/yourprofile" target="_blank" class="twitter"><i class="fab fa-twitter"></i></a>
        <a href="https://www.linkedin.com/in/yourprofile" target="_blank" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
    </div>

    <div class="map-section">
        <h2>Our Location</h2>
        <div id="map"></div>
    </div>
</div>

@endsection

@push('scripts')
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
<script>
    function initMap() {
        var location = { lat: -25.344, lng: 131.036 };
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 4,
            center: location
        });
        var marker = new google.maps.Marker({
            position: location,
            map: map
        });
    }

    document.addEventListener('DOMContentLoaded', function() {
        initMap();
    });
</script>
@endpush
