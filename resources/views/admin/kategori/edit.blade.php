@extends('admin/layout.master')

@section('title','kategori')
@section('title2','edit')
@section('kategori','active')
@section('konten')

<div class="card">
  <div class="card-header">
    <h4>Tambah Kategori</h4>
  </div>
  <div class="card-body">
    <form action="#" method="POST">
    <!-- @csrf -->
    <div class="row">

         <div class="col-md-12">
             <div class="form-group">
               <label>Nama Kategori</label>
               <input type="text" name="namakategori" value="" class="form-control" autocomplete="off">  
             </div>
           </div>

    </div>    
      <div class="card-footer text-right">
        <button class="btn btn-primary mr-1" type="submit">Submit</button>
        <a href="{{ url()->previous() }}" class="btn btn-secondary" type="reset">Cancel</a>
      </div>
    </form>
  </div>
</div>

@endsection

