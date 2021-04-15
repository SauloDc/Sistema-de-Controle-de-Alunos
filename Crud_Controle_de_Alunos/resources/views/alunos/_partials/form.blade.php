@csrf
<div class="form-group">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label>Nome</label>
            <input type="text" class="form-control" name="nome" value="{{@$aluno->nome ?? old('nome')}}" required>
        </div>
        <div class="form-group col-md-4">
            <label>Email</label>
            <input type="email" class="form-control" name="email" value="{{@$aluno->email ?? old('email')}}" required>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-4">
            <label>Telefone</label>
            <input type="text" class="form-control" name="telefone" placeholder="9999-9999" value="{{ @$aluno->telefone ?? old('telefone') }}">
        </div>

        <div class="form-group col-md-3">
            <label>Data de Nascimento </label>
            <input class="date form-control" type="date" name="dataNascimento" value="{{ date('Y-m-d', strtotime(@$aluno->dataNascimento)) ?? old('dataNascimento') }}">
        </div>

        <div class="form-group col-md-3">
            <label>Gênero</label>
            <select class="form-control" name="sexo" value="{{ @$aluno->sexo ?? old('sexo') }}">
                <option>Escolha o Genero</option>
                <option {{ @$aluno->sexo === 'male' ? 'selected' : '' }} value="male">Masculino</option>
                <option {{ @$aluno->sexo === 'female' ? 'selected' : '' }} value="female">Feminino</option>
            </select>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-5">
            <label>Escola</label>
            <select class="form-control" name="escola_id" value="{{@$aluno->escola_id ?? old('escola_id') }}">
                <option>Escolha a Escola</option>
                @foreach($escolas as $escola)
                    <option {{ @$aluno->escola_id == $escola->id ? 'selected' : '' }} value="{{ $escola->id }}">
                        {{ $escola->id }} - {{ $escola->nome }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-md-5">
            <label>Turma</label>
            <select class="form-control" name="turma_id" value="{{@$aluno->turma_id ?? old('turma_id') }}">
                <option>Escolha a Turma</option>
                @foreach($turmas as $turma)

                    <option {{ @$turma->id == @$aluno->turma_id ? 'selected' : '' }} value="{{@$turma->id }}"> 
                        {{ $turma->id }} - Turma de {{ date('Y', strtotime($turma->ano))}} - {{ $turma->turno}}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
</div>
    <button class="btn btn-primary" type="submit">Salvar</button>
</div>

