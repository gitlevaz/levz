@extends('layouts.app')
@section('content')
@include('module.editmodle')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">



<div class="container">

  <h2>Accura Member List</h2><br><br>
  <a href="{{url('phptable')}}"  class="addmem btn btn-primary">Php Table</a>
  <a href="{{url('home')}} "class="addmem btn btn-primary">Add New Member</a><br>
  <div class="topnav"><br>
    <p>Serch</a>
    <form action="/search" method="GET">
      <input type="text" placeholder="Search.." name="search" />
      <input type="submit" value="Go" />
  </form>
  </div> 
  <table id="view_table"  class="table table-striped table-bordered view_table" style="width: 100%;">
    <thead class="thead-dark">
      <tr >
        <td>#</td>
        <td> <a href="{{url('shortby_fname')}}"  >ShortBy_Name</a></td>
        <td> <a href="{{url('shortby_lname')}}"  >ShortBy_Lname</a></td>
        <td> <a href="{{url('shortby_divition')}}"  >ShortBy_Divition</a></td>
        <td> <a href="{{url('shortby_dob')}}"  >ShortBy_dob</a></td>
        <td></td>
        <td></td>
      </tr>
        <tr>
          <th>#</th>
          <th>fname</th>
          <th>lname</th>
          <th>divition</th>
          <th>dob</th>
          <th>summery</th>
          <th>action</th>
        </tr>
      </thead>
  
            <tbody  class="tbody-light">
              @foreach ($types as $value)
              <tr>
              <td>{{$value->id}}</td>
              <td>{{$value->fname}}</td>
              <td>{{$value->lname}}</td>
              <td>{{$value->divition}}</td>
              <td>{{$value->dob}}</td>
              <td>{{$value->summery}}</td>  
              <td><a class="btn btn-primary btn-edit" type="submit"  href="newedit/{{$value->id}}" >Edit</a>
                 <a class="btn btn-danger btn-delete"  type="submit"   href="newdel/{{$value->id}}" >Delete</a> </td>
              </tr>                                                                                                                        
              @endforeach 
                    
          </tbody>
        </table>
</div>

<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" charset="utf-8"></script>
<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js" charset="utf-8"></script>


@endsection
