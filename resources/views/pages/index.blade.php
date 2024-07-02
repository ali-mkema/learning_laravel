@extends('Layout.app')


@section('content')
    <div class="jumbotron text-center">
         
         <h1>Items List</h1>
         <table class="table">
             <thead>
                 <tr>
                     <th>ID</th>
                     <th>Fisrt Name</th>
                     <th>Last Name</th>
                     <th>Sex</th>
                     <th>Nationality</th>
                     <th>Address</th>
                     <th>Department</th>
                 </tr>
             </thead>
             <tbody> 
                 @foreach ($items as $item)
                     <tr>
                         <td>{{ $item->id }}</td>
                         <td>{{ $item->first_name }}</td>
                         <td>{{ $item->last_name }}</td>
                         <td>{{ $item->gender }}</td>
                         <td>{{ $item->nationality }}</td>
                         <td>{{ $item->address}}</td>
                         <td>{{ $item->department }}</td>
                         <td><a href="{{url('/emp/modify-emp/'. $item->id)}}"><button type="submit" class="btn btn-outline-primary btn-sm">Edit</button></a> </td>
                         <td><a href="{{ url('/emp/delete-emp/' . $item->id) }}'"><button type="submit" class="btn btn-outline-danger btn-sm">Delete</button></a> </td>
                     </tr>
                 @endforeach
             </tbody>
         </table>
    </div>
@endsection
   