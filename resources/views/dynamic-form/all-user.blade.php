@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="card px-2">
            <h3 class="text-center my-2">Dynamic Form</h3>
            <div class="row px-3 d-flex justify-content-between">
                <div>
                    
                </div>
                <div>
                    <button class="btn btn-primary  my-1"><a href="{{ route('dynamic_form.create') }}"
                            class="text-white">New Form Create</a></button>
                </div>
            </div>
            <div class="row px-3">
                <table border="1" class="table table-bordered my-2">
                    <thead>
                        <tr>
                            <th>Ser No</th>
                            <th>User ID</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $key => $user)
                     
                            <tr>
                                <td>{{ $loop->iteration ?? '' }}</td>
                                <td>
                                    {{$user->user_name ?? ''}}
                                </td>
                                <td class="d-flex justify-content-center">
                                    <a href="{{route('dynamic_form.show',$user->id)}}">
                                        <button class="btn btn-sm btn-info mx-2">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </a>
                                    <a href="{{route('dynamic_form.edit',$user->id)}}">
                                        <button class="btn btn-sm btn-info">
                                            <i class="fas fa-pen"></i>
                                        </button>
                                    </a> 
                                    
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4">No record here</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('css')
    <style>
        h3 {
            color: black;
        }

        .table {
            color: black;
        }

        .table tr th,
        .table tr td {
            text-align: center
        }
    </style>
@endpush

