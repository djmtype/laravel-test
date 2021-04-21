<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="geo.country" content="us">
<meta name="dcterms.subject" content="Pain Relief Patches" />
<meta name="dcterms.rightsHolder" content="Hisamitsu America, Inc" />
<meta name="author" content="Hisamitsu America, Inc" />
<meta name="description" content="{{ $description }}">

<meta property="og:title" content="{{ $title }}" />






@if ( Request::is('/') || empty($page) )
@php 
$pathName = getenv('APP_URL')
@endphp
@else
@php $pathName = getenv('APP_URL') . '/' . $page @endphp
@endif

<meta property="og:url" content="{{ $pathName  }}" />



{{-- <meta property="og:url" content="{{ getenv('APP_URL') }}" /> --}}



<meta property="og:type" content="website" />
{{-- <meta property="og:type" content="article"/> --}}

<meta property="og:site_name" content="Salonpas&reg; Pro" />
<meta property="og:description" content="{{ $description }}" />

{{-- <meta property="og:locale" content="en_US" /> --}}
{{-- <meta property="og:locale:alternate" content="es_US" /> --}}
<meta property="og:image" content="https://us.hisamitsu/img/opengraph/default-logo-facebook@2x.png" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@salonpas" />
<meta name="twitter:title" content="Salonpas&reg;" />
<meta name="twitter:description" content="{{ $description }}" />
<meta name="twitter:image" content="{{ asset('https://us.hisamitsu/img/opengraph/default-logo-facebook@2x.png') }}" />