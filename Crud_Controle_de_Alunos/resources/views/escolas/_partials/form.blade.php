@csrf
<div class="form-group">
    <div class="col-md-6">
        <label>Nome da Escola</label>
        <input type="text" name="nome" class="form-control" value="{{$escola->nome ?? old('nome')}}" required>
    </div>
    <div class="mt-2 col-md-6">
        <label> Endereço</label>
        <input type="text" name="endereco" class="form-control" value="{{$escola->endereco ?? old('endereco')}}" required>
    </div>
    <div class="mt-2 col-md-6">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
</div>