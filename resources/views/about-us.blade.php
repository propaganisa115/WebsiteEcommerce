@extends('template.user')

@section('title')
    Shop
@endsection

@section('style')
<link rel="stylesheet" href="{{asset('css/shop.css')}}">
<link href='https://fonts.googleapis.com/css?family=Alef:400,700' rel='stylesheet' type='text/css'>
<link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
<link rel="stylesheet" href="{{asset('css/about.css')}}">
@endsection

@section('content')

<div class="container">
  <p  contenteditable><b>Ecommercekece</b>  </p><br><br>
 <p  contenteditable>Is one of growing fashion brand in Indonesia. Has collections that prioritize in quality and design.Our products are suitable for young woman to adults.<br>We also provide a simple to glamorous fashion with high quality fabrics.By prioritizing Service Good Excellent, we provide quality and special attention to our consumers.</p>
</div>


    </div>
</div>
  <!-- Pagination Link -->

@endsection

@section('script')
<script type="text/javascript" src="{{asset('js/script.js')}}"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="{{asset('js/about.js')}}"></script>

@endsection
