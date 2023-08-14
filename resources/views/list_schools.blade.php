@extends('layouts.master')

@section('title', $sys_vars_title)

@section('content')


<div class="row  col-lg-4  offset-lg-4  col-md-8 offset-md-2  p-1 pt-3 rounded mt-5 bg-white ">

    <table class="table bg-light text-center text-secondary">
        <thead>
            <tr>
              <th scope="col">    <h3 class="text-center">المدارس المتاحة</h3>              </th>
            </tr>
          </thead>
        <tbody>
            @foreach ($schools as $school)
                <tr>
                    <td><a href="/school/{{ $school->scool_name }}">{{ $school->scool_name }}</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@stop
