@extends('layouts.side')

@section('content')

<div>
    <div class="container-fluid">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Account Categories</h1>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
        @if(session('success'))
            <div class="alert alert-success d-flex align-items-center" role="alert">
              <i class="fas fa-check-circle"></i>
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                <div>
                {{ session('success') }}
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-12">
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                          <tr>
                            <th scope="col">Sl No</th>
                            <th scope="col">Category</th>
                            <th scope="col">#</th>
                          </tr>
                        </thead>
                        <tbody>
                          @php($i=1)
                          @foreach($categories as $category)
                          
                          <tr class="odd">
                            <th scope="row">{{$i++}}</th>
                            <td>{{$category->account_category}}</td>
                            <td>
                                 <a href="{{route('account_categories.edit',$category->ac_id)}}" class="btn " ><i class="fa fa-pencil"></i></a>
                            </td>
                           
                          </tr>
                          
                          @endforeach
                          
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>

    </div>
</div>    

@endsection