@extends('layouts.master')

@section('title', $sys_vars_title)

@section('content')



    <div class="row  col-lg-4  offset-lg-4  col-md-8 offset-md-2  p-1 pt-3 rounded mt-5 bg-white ">
        <p class="labal-text text-center">{{ $sys_vars_labels1 }}</p>
        <p class="labal-text text-center">{{ $sys_vars_labels2 }}</p>
        <p class="labal-text text-center">{{ $sys_vars_labels3 }}</p>
        <hr>
        <p class="labal-text text-center">{{ $sys_vars_labels4 }}</p>
        <p class="labal-text text-center">{{ $sys_vars_labels5 }}</p>

        <div class="accordion" id="accordionExample">

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="  btn main-btn btn-lg " type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <span class="main-btn-text">
                            {{ $sys_vars_labels6 }}
                        </span>
                        <i class=" main-btn-icon fa fa-building "></i>
                    </button>
                </h2>


                <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">

                        <form method="POST" action="/schools">
                            @csrf

                            <div class="input-group input-group-sm mb-3">
                                <input id="scool_name_box" name="scool_name_box" type="text" class="form-control"
                                    placeholder="{{ $sys_vars_labels7 }}" aria-label="Small"
                                    aria-describedby="inputGroup-sizing-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text main-btn fa fa-search " id="inputGroup-sizing-sm"></span>
                                </div>
                            </div>

                            <h5 class="mt-2">{{ $sys_vars_labels8 }}</h5>

                            @foreach ($sys_vars_schools as $sys_vars_school)
                                <div class="form-group row  mt-2">
                                    <div class="container">
                                        <div class="row">
                                            <span id="empty_{{ $sys_vars_school->static_id }}"
                                                class="input-group-text btn btn-danger fa fa-trash "style="width: 10%; display:none"
                                                onclick="empty_field('{{ $sys_vars_school->static_id }}')"></span>
                                            <select name="" id="{{ $sys_vars_school->static_id }}"
                                                class="form-select form-select-sm"
                                                onchange="changed_field('{{ $sys_vars_school->static_id }}')">
                                                <option value="0">{{ $sys_vars_school->name }}</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <button class=" btn col-6 main-btn btn-ms mt-3 mb-3" type="submit">
                                <span class="main-btn-text">
                                    {{ $sys_vars_labels12 }}
                                </span>
                                <i class=" main-btn-icon fa fa-search "></i>
                            </button>

                        </form>
                    </div>
                </div>
            </div>




            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="collapsed btn main-btn btn-lg mt-3 mb-3" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <span class="main-btn-text">
                            {{ $sys_vars_labels9 }}
                        </span>
                        <i class=" main-btn-icon fa fa-list "></i>
                    </button>
                </h2>

                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <form method="POST" action="">
                            <div class="input-group input-group-sm mb-3">
                                <input id="office_name_box" type="text" class="form-control"
                                    placeholder="{{ $sys_vars_labels10 }}" aria-label="Small"
                                    aria-describedby="inputGroup-sizing-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text main-btn fa fa-search" id="inputGroup-sizing-sm"></span>
                                </div>
                            </div>

                            @csrf
                            <h5 class="mt-2">{{ $sys_vars_labels11 }}</h5>
                            @foreach ($sys_vars_offices as $sys_vars_office)
                                <div class="form-group row  mt-2">
                                    <span id="empty_{{ $sys_vars_office->static_id }}"
                                        class="input-group-text btn btn-danger fa fa-trash "style="width: 10%; display:none"
                                        onclick="empty_field('{{ $sys_vars_office->static_id }}')"></span>
                                    <select name="" id="{{ $sys_vars_office->static_id }}"
                                        class="form-select form-select-sm"
                                        onchange="changed_field('{{ $sys_vars_office->static_id }}')">
                                        <option value="0">{{ $sys_vars_office->name }}</option>
                                    </select>
                                </div>
                            @endforeach

                            <button class=" btn main-btn btn-ms mt-3 mb-3" type="button">
                                <span class="main-btn-text">
                                    {{ $sys_vars_labels13 }}
                                </span>
                                <i class=" main-btn-icon fa fa-search "></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>

        </div>


        <script src="{{ asset('js/jquery-3.7.0.min.js') }}"></script>
        <script>
            //#############################################
            //###### schools
            //#############################################
            var schools = @json($schools);
            var sys_vars_schools = @json($sys_vars_schools);

            var filterd_schools = [];
            var elements = '';
            var empty_elements = '';
            var schoold_array = [];

            @foreach ($sys_vars_schools as $sys_vars_school)
                var {{ $sys_vars_school->static_id }} = [];
                var locl_{{ $sys_vars_school->static_id }};
                $('#{{ $sys_vars_school->static_id }}').find('option').remove().end().append(
                    '<option value ="" >{{ $sys_vars_school->name }} </option>').val('0');
                elements = elements + '#{{ $sys_vars_school->static_id }},';
                empty_elements = empty_elements + '#empty_{{ $sys_vars_school->static_id }},';
            @endforeach

            elements = elements.substring(0, elements.length - 1);
            empty_elements = empty_elements.substring(0, empty_elements.length - 1);



            $(elements).change(function() {

                @foreach ($sys_vars_schools as $sys_vars_school)
                    @if ($sys_vars_school->static_id)
                        locl_{{ $sys_vars_school->static_id }} = $('#{{ $sys_vars_school->static_id }}').val();
                    @endif
                @endforeach

                var filters = {
                    @foreach ($sys_vars_schools as $sys_vars_school)
                        @if ($sys_vars_school->static_id)
                            {{ $sys_vars_school->static_id }}: locl_{{ $sys_vars_school->static_id }},
                        @endif
                    @endforeach
                }

                console.log('changed');
                schoold_array = change_filters(filters, schools);
                set_filters(schoold_array)
                autocomplete(document.getElementById("scool_name_box"), scool_name);

            });

            function set_filters(arry) {

                @foreach ($sys_vars_schools as $sys_vars_school)
                    @if ($sys_vars_school->static_id)
                        {{ $sys_vars_school->static_id }} = [];
                        !locl_{{ $sys_vars_school->static_id }} ? $('#{{ $sys_vars_school->static_id }}').find('option')
                            .remove().end().append('<option value="">{{ $sys_vars_school->name }}</option>') : null;
                    @endif
                @endforeach

                $.each(arry, function(key, val) {

                    @foreach ($sys_vars_schools as $sys_vars_school)
                        @if ($sys_vars_school->static_id)
                            {{ $sys_vars_school->static_id }}.indexOf(arry[key].{{ $sys_vars_school->static_id }}) ===
                                -1 ? {{ $sys_vars_school->static_id }}.push(arry[key]
                                    .{{ $sys_vars_school->static_id }}) : null;
                        @endif
                    @endforeach

                });

                @foreach ($sys_vars_schools as $sys_vars_school)
                    @if ($sys_vars_school->static_id)
                        !locl_{{ $sys_vars_school->static_id }} ? $.each({{ $sys_vars_school->static_id }}, function(key,
                            value) {
                            $('#{{ $sys_vars_school->static_id }}').append($("<option ></option>").text(value));
                        }) : null;
                    @endif
                @endforeach

            }
            set_filters(schools);

            //#############################################
            //###### offices
            //#############################################
            var offices = @json($offices);
            var sys_vars_offices = @json($sys_vars_offices);

            var filterd_offices = [];
            var offices_elements = '';
            var offices_array = [];

            @foreach ($sys_vars_offices as $sys_vars_office)
                var {{ $sys_vars_office->static_id }} = [];
                var locl_{{ $sys_vars_office->static_id }};
                $('#{{ $sys_vars_office->static_id }}').find('option').remove().end().append(
                    '<option value="">{{ $sys_vars_office->name }} </option>').val('');
                offices_elements = offices_elements + '#{{ $sys_vars_office->static_id }},';
            @endforeach

            offices_elements = offices_elements.substring(0, offices_elements.length - 1);

            $(offices_elements).change(function() {

                @foreach ($sys_vars_offices as $sys_vars_office)
                    @if ($sys_vars_office->static_id)
                        locl_{{ $sys_vars_office->static_id }} = $('#{{ $sys_vars_office->static_id }}').val();
                    @endif
                @endforeach

                var filters = {
                    @foreach ($sys_vars_offices as $sys_vars_office)
                        @if ($sys_vars_office->static_id)
                            {{ $sys_vars_office->static_id }}: locl_{{ $sys_vars_office->static_id }},
                        @endif
                    @endforeach
                }

                console.log('changed');
                offices_array = change_filters(filters, offices);
                set_offices_filters(offices_array)
                autocomplete(document.getElementById("office_name_box"), name_mang);

            });

            function set_offices_filters(arry) {
                console.log(arry);

                @foreach ($sys_vars_offices as $sys_vars_office)
                    @if ($sys_vars_office->static_id)
                        {{ $sys_vars_office->static_id }} = [];
                        !locl_{{ $sys_vars_office->static_id }} ? $('#{{ $sys_vars_office->static_id }}').find('option')
                            .remove().end().append('<option value="">{{ $sys_vars_office->name }}</option>') : null;
                    @endif
                @endforeach

                $.each(arry, function(key, val) {

                    @foreach ($sys_vars_offices as $sys_vars_office)
                        @if ($sys_vars_office->static_id)
                            {{ $sys_vars_office->static_id }}.indexOf(arry[key].{{ $sys_vars_office->static_id }}) ===
                                -1 ? {{ $sys_vars_office->static_id }}.push(arry[key]
                                    .{{ $sys_vars_office->static_id }}) : null;
                        @endif
                    @endforeach

                });

                @foreach ($sys_vars_offices as $sys_vars_office)
                    @if ($sys_vars_office->static_id)
                        !locl_{{ $sys_vars_office->static_id }} ? $.each({{ $sys_vars_office->static_id }}, function(key,
                            value) {
                            $('#{{ $sys_vars_office->static_id }}').append($("<option></option>").text(value));
                        }) : null;
                    @endif
                @endforeach

            }

            set_offices_filters(offices);
        </script>

        <script src="{{ asset('js/helpers.js') }}"></script>

    </div>


@stop
