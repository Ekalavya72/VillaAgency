@extends('Villa.Admin.inc.main')

@section('container')

<div class="container">
    @if(session('message'))
    {{-- <div class="alert alert-success" id="alert"> --}}
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('message') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        
    @elseif(session('delete'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{ session('delete') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
        
    {{-- </div> --}}
    @endif
</div>
    <div class="content-wrapper">

        <!-- Content wrapper -->
        <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
                <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Carousels/</span>Index</h4>
                <!-- Basic with Icons -->
                <div class="col-xxl">
                    <div class="card">
                        <h5 class="card-header">Carouesls Table</h5>
                        <div class="table-responsive text-nowrap">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>S.N</th>
                                        <th>Title</th>
                                        <th>Location</th>
                                        <th>Images</th>
                                        <th>ACtions</th>
                                        
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-2">

                                @foreach ( $carousels as $carousel)
                                    
                        
                                    <tr>
                                        
                                        <td><i class="  fa-lg text-danger me-3"></i> {{ $loop->iteration }}
                                            <td><i class="  fa-lg text-danger me-3"></i> {{ $carousel->title }}
                                            </td>
                                            <td><i class="  fa-lg text-danger me-3"></i> {{ $carousel->location }}
                                            </td>

                                        <td><a href="{{ asset ('uploads/'. $carousel->img)}} " target="_blank">
                                              <img src="{{ asset ('uploads/'. $carousel->img)}}" alt="img" width="50px"
                                              height="50px"> <a>
                                        </td>
                                        <td>

                                        <a href="{{ route ('carousels.edit' , $carousel->id)}}" class="btn btn-sm btn-primary"> Edit </a>
                                        <a href="{{ route ('carousels.show' , $carousel->id)}}" class="btn btn-sm btn-warning"> Show </a>
                                        <a href="\" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{$carousel->id}}"> Delete </a>
                                        
                                      
                                        
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal{{$carousel->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog        ">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Delete Carousel</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Are you sure ?
                                                    </div>
                                                    <div class="modal-footer">
                                                         
                                                         <form action="{{route('carousels.destroy', $carousel->id)}}"  method="POST" enctype="multipart/form-data">
                                                         @csrf
                                                         @method('delete')
                                                         
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                                        <button type="submit" class="btn btn-danger" >Yes</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </td>
                                         
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $carousels->links()}}
                            
                        <div class="bg-light   mt-3 mb-3 mx-5 px-4 text-end ">
                        <div class="px-5 mx-4">
                         <div class="px-4 mx-3">
                              <a href="{{ route('carousels.create') }}" class="btn btn-primary btn-m "> Add <i class="fa fa-plus" style="font-size:14px;color:white; padding-left:1px;"> </i></a>
                              </div>
                              </div>
                       </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection