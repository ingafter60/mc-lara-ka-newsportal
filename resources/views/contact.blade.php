@extends('master');
@section('content')
<h1>Contact page</h1>
<p>Phone: <?php echo $phone; ?></p>
<p>Email: <?php echo $email; ?></p>

<hr>

<h3>Using Blade</h3>
<p>Firstname: {{ $phone }}</p>
<p>Lastname: {{ $email }}</p>
@endsection

