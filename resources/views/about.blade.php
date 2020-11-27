@extends('master')

@section('sidebar')
   @parent
   <p>Sidebar from ABOUT PAGE</p>
@endsection

@section('component')
    
<h1>About page</h1>
<h6>Firstname: <?php echo $firstname; ?></h6>
<h6>Lastname: <?php echo $lastname; ?></h6>

<hr>

<h3>Using Blade</h3>
<p>Firstname: {{ $firstname }}</p>
<p>Lastname: {{ $lastname }}</p>  
@endsection
