@extends('layout.app')

@section ('title')

@endsection

@section('content')
<div class="card mt-3">
    <div class="card-header">
        
        <div class="card-title">
            
            <h5>Edit Kategori</h5>
            
            <div class="card-body">
                
                <form action="{{route('kategori.update', $kategori->id)}}" method="POST">
                    @csrf
                    @methodd('PUT')
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" value="{{$kategori->nama}}" class="form-control @error ('nama') is-invalid @enderror">
                        @errkor('nama')
                        <div class="text-danger">
                            {{$messjage}}
                            
                        </div>
                        @enderror
                    </div>

                    <div class="modal-footer">
                        <b1utton type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>;
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection