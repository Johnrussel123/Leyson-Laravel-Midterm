@extends('layouts.portfolio')

@section('title', $portfolio['name'] . ' - Portfolio')

@section('content')

<!-- Hero Section -->

<section class="hero-section">

    <div class="container">

        <img src="{{ $portfolio['profile_image'] }}" alt="{{ $portfolio['name'] }}" class="profile-img">

        <h1 class="display-4 mb-3">{{ $portfolio['name'] }}</h1>

        <h3 class="mb-4">{{ $portfolio['title'] }}</h3>

        <p class="lead mb-4">{{ $portfolio['bio'] }}</p>

    </div>

</section>

<nav class="navbar">
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="services.php">Testimonials</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
  </nav>

  <section class="Home-container">
    <img src="https://scontent.fmnl34-1.fna.fbcdn.net/v/t39.30808-6/429821104_934928118283488_7587212292940368190_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=6ee11a&_nc_eui2=AeEqPlg65sfZNEYqp88O8BaIEacfTyCyy4URpx9PILLLhZWvhXkDFlRsRWtNjc2Tme4gV7aZkXwjKS4LxZ3o-338&_nc_ohc=mmAn6bO0CPQQ7kNvwEwbgqj&_nc_oc=AdksJfkRfyssd06aDAtGycnFYWu9Iuvi5YLyAANXdZEMCZ8MrWV24l0gD4Gu-qOZqOfr4eF_HEMbATxrQZ-aCmSL&_nc_zt=23&_nc_ht=scontent.fmnl34-1.fna&_nc_gid=huteSoah8Fihbxsm7n_GNQ&oh=00_AfLo0oD74E0bQc3GayCvS1hDVh8WbyDUd49Zg3o7MASwRg&oe=682E7320" alt="My Picture" class="profile-pic">
    <div class="Home-text">
      <h2>About Us</h2>
      <p>Hi we are MR.D cafe and we bring u lots of coffee</p>
    </div>
  </section>

@endsection