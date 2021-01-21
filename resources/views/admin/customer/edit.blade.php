@extends("layouts.index")

@section("content")
    <div class="container" id="EditCustomer">
        <form @submit="submit" method="POST">
            @include("customer.form")
        </form>
        @if(session("success"))
            <h3 class="text-primary">{{session("success")}}</h3>
        @endif
    </div>
@endsection
@section("script")
    <script>
        const data = @json($customer);
    </script>
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ mix('dist/js/customers/edit.js') }}"></script>

@endsection
