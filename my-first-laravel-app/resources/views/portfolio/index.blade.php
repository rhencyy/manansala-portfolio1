@extends('layouts.portfolio')

@section('title', $portfolio['name'] . ' - Portfolio')

@section('content')

<!-- Hero Section -->

<section class="hero-section">

    <div class="container">

        <img src="https://lh3.googleusercontent.com/a/ACg8ocL9jvQo6nsadUkIHwH8FWFDyyMXsw19aPGVv9648E9xzNQwcL64=s96-c">

        <h1 class="display-4 mb-3">{{ $portfolio['name'] }}</h1>

        <h3 class="mb-4">{{ $portfolio['title'] }}</h3>

        <p class="lead mb-4">{{ $portfolio['bio'] }}</p>

    </div>

</section>

<!-- About Section -->

<section id="about" class="section">

    <div class="container">

        <h2 class="section-title">About Me</h2>

        <p><h4> My Name is Rhency Manansala ,18 yrs old From longos malabon city, graduate in imelda integrated secondary school</h4></p>

    </div>

</section>

<!-- Projects Section -->

<section id="projects" class="section bg-light">

    <div class="container">

        <h2 class="section-title">My Project</h2>

        <!-- Projects content -->

    </div>

</section>

<!-- Contact Section -->

<section id="contact" class="section">

    <div class="container">

        <h2 class="section-title">Get In Touch</h2>

        <!-- Contact content -->

    </div>

</section>

@endsection