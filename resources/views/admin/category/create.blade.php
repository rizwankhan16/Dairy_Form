@extends('admin.layouts.layouts')
@section('admin_page_title')
     category_Create  
@endsection

@section('admin_layouts')
<div class="row">
   <div class="col-12">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title mb-0">create category</h5>
</div>
<div class="card-body">
    @if($errors->any())
    <div class="alert alart-danger" role="alert">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
            </ul>
            </div>
            @endif
            @if(session('success'))
            <div class="alert-sucess">
                {{ session('success') }}
                </div>
                @endif
                <form action="{{route('name.create')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="category_name">Category Name</libel>
                        <input type="text" name="name"  id="category_name" class="form -control" placeholder="ent
                        <button type=  "submit" class="btn btn-primary w0-10" >Add Category</button>
                        </form>
                     </div>
                </div>
            </div>
                 
@endsection