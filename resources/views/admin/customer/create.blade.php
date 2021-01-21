@extends("layouts.index")

@section("content")
    <div class="container" id="CreateCustomer">
{{--        <form @submit.prevent="saveData">--}}


{{--        <form action="/customer/create" method="POST">--}}
        <form @submit="submit()" action="#">
            @include("customer.form")
        </form>
        @if(session("success"))
            <h3 class="text-primary">{{session("success")}}</h3>
        @endif
{{--        @{{test}}--}}
    </div>
@endsection
@section("script")
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ mix('dist/js/customers/create.js') }}"></script>
@endsection

