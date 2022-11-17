@extends('layouts.main')
@push('title')
    <title>Customer Table</title>
@endpush
    @section('main-section')
    <a href="{{url('/')}}/register" class="btn btn-primary mb-2 mt-2 mr-2 ml-2 float-right " >Add User</a>
    <a href="{{url('/')}}/customer/view" class="btn btn-warning mb-2 mt-2 mr-2 ml-2 float-right " >Back to Customer</a>
    <table class="table">
        <thead class="thead-dark">
            <tr >
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>Contac</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody class="text-white">
            {{-- <pre>        {{print_r($customer)}}]
            </pre> --}}
    
    @foreach ($customer as $cus)
            <tr class="bg-primary">
                <td>{{$cus->id}}</td>
                <td>{{$cus->name}}</td>
                <td>{{$cus->email}}</td>
                <td>{{$cus->contact}}</td>
                {{-- <td><span class="row"><a href="{{url('/')}}/customer/delete/{{$cus->id}}" class="btn btn-danger mr-2">Delete</a><a href="" class="btn btn-success">Edit</a></span></td> --}}
                <td><span class="row"><a href="{{route('customer-delete',['id'=>$cus->id])}}" class="btn btn-danger mr-2">Delete</a><a href="{{route('customer-restore',['id'=>$cus->id])}}" class="btn btn-success">Restore</a></span></td>


            </tr>
            @endforeach
        </tbody>
    </table>
    @endsection
 

 
