@extends("UserSite.Layout.app")
@section('content')
    @include('UserSite.Components.slider')
    @include('UserSite.Components.specialized')
{{--    @include('Components.research')--}}
    @include('UserSite.Components.events')
    @include('UserSite.Components.blog')
    @include('UserSite.Components.testimonial')
@endsection
