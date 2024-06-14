@extends('student')
@section('content')
    <div class="card">
        <div class="card-header">
            <h2>laravel crud</h2>
        </div>
        <div class="card-body">
            <a href="{{url('/student/create')}}" class="btn btn-success btn-sm" title="Add">
                <i class="fa fa-plus" aria-hidden="true"></i>Add New
            </a>
            <br />
            <br />
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>name</th>
                            <th>address</address></th>
                            <th>mobile</th>
                            <th>age</th>
                            <th>contact</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($students as $student)
                        <tr>   
                            <td>{{$loop->iteration}}</td>
                            <td>{{$student->name}}</td>
                            <td>{{$student->address}}</td>
                            <td>{{$student->mobile}}</td>
                            <td>{{$student->age}}</td>
                            <td>{{$student->contact}}</td>
                            <td>
                                <a href="{{url('/student/'. $student->id)}}" title="View Student"></a>
                                <a href="{{url('/student/'. $student->id .'/edit')}}" title="View edit "></a>
                                <form action="POST" action="{{url('/student/'. '/' .$student->edit)}}"></form>
                                    {{method_field('DELETE')}}
                                    {{csrf_field()}}
                                    <button type="submit"class="btn btn-danger btn-sm" title="Delete student"></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection