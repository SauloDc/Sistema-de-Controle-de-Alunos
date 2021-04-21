@csrf

@if($errors->any())
@foreach ($errors->all() as $error)
<div class="m-3 alert alert-danger alert-dismissible fade show" role="alert">
    <div>{{ $error }}</div>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endforeach
@endif

<div class="form-group">
    <div class="col-md-6">
        <label>Nome da Escola</label>
        <input type="text" name="name" class="form-control" value="{{$school->name ?? old('name')}}" required>
    </div>
    <div class="mt-2 col-md-6">
        <label> Endereço</label>
        <input type="text" name="address" class="form-control" value="{{$school->address ?? old('address')}}" required>
    </div>
    <div class="mt-2 col-md-6">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
</div>