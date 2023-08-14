@extends('layouts.master')

@section('title', $sys_vars_title)

@section('content')

    <div class="row bg-transparent">

        <div class="row  col-lg-6  rounded mt-5 bg-white ">

            <table class="table bg-light text-center text-secondary">
                <thead>
                    <tr>
                        <th scope="col">
                            <h3 class="text-center">بيانات المدرسة</h3>
                        </th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($schools as $school)
                        <tr>
                            <td>{{ $school->authority }}</td>
                        </tr>
                        <tr>
                            <td>{{ $school->basic_school }}</td>
                        </tr>
                        <tr>
                            <td>{{ $school->district }}</td>
                        </tr>
                        <tr>
                            <td>{{ $school->edu_office }}</td>
                        </tr>
                        <tr>
                            <td>{{ $school->gender }}</td>
                        </tr>
                        <tr>
                            <td>{{ $school->mangers_name }}</td>
                        </tr>
                        <tr>
                            <td>{{ $school->scool_name }}</td>
                        </tr>
                        <tr>
                            <td>{{ $school->sector }}</td>
                        </tr>
                        <tr>
                            <td>{{ $school->stage }}</td>
                        </tr>
                        <tr>
                            <td>{{ $school->type_edu }}</td>
                        </tr>
                        <tr>
                            <td>{{ $school->type_sch }}</td>
                        </tr>
                        <tr>
                            <td>{{ $school->year_founded }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>



        <div class="row  col-lg-6  rounded mt-5 bg-white ">
            @foreach ($schools as $school)
                <a href="https://www.google.com/maps?q={{ $school->lat }},{{ $school->long }}">
                    <button class="  btn main-btn btn-lg mt-3 " type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <span class="main-btn-text">
                            عرض على الخريطة
                        </span>
                        <i class=" main-btn-icon fa fa-map "></i>
                    </button>
                </a>
                <iframe
                    src="https://maps.google.com/maps?q={{ $school->lat }},{{ $school->long }}&t=&z=15&hl=ar&output=embed"
                    width="600" height="450" style="border:0;" loading="lazy"></iframe>
            @endforeach
        </div>

    </div>



    <script>
        var schools = @json($schools);
        var sys_vars_schools = @json($sys_vars_schools);
    </script>
@stop
