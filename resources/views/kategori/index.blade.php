@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-12">
         <div class="card">
            <div class="card-header">Daftar Kategori</div>
            <div class="card-body">
               @include('alert')
               <a href="/admin/kategori/create" class="btn btn-info">Tambah Kategori</a>
               <hr>
               <table id="example" class="table table-striped table-bordered" style="width:100%">
                  <thead>
                     <tr>
                        <th>Nama Kategori</th>
                        <th width="100">Aksi</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($kategori as $row)
                     <tr>
                        <td>{{$row->nama_kategori}}</td>
                        <td>
                           <div class="dropdown show">
                              <a class="btn btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Pilih Aksi
                              </a>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                 <a class="dropdown-item" href="/admin/kategori/{{$row->id}}/edit"><i class="fas fa-edit"></i> Edit</a>
                                 {{ Form::open(['url'=>'/admin/kategori/'.$row->id,'method'=>'delete'])}}
                                 <button type="submit" class="dropdown-item"><i class="fas fa-trash-alt"></i> Hapus</button>
                                 {{ Form::close()}}
                              </div>
                           </div>
                        </td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
@push('js')
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script>
   $(document).ready(function() {
       $('#example').DataTable();
   } );
</script>
@endpush