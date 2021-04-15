@csrf

<div class="form-group">
    <div class="form-row">
        <div class="form-group col-md-3">
            <label>Ano</label>
            <input class="date form-control" type="date" name="ano" value="{{ date('Y', strtotime(@$turma->ano)) ?? old('ano') }}">
        </div>

        <div class="form-group col-md-2">
            <label>Turno</label>
            <select class="form-control" name="turno" value="{{ $turma->turno ?? old('turno') }}">
                <option>Escolha o Turno</option>
                <option {{ @$turma->turno === 'Manhã' ? 'selected' : '' }} value="Manhã">Manhã</option>
                <option {{ @$turma->turno === 'Tarde' ? 'selected' : '' }} value="Tarde">Tarde</option>
                <option {{ @$turma->turno === 'Noite' ? 'selected' : '' }} value="Noite">Noite</option> 
            </select>
        </div>
    </div>

   <div class="form-row">
        <div class="form-group col-md-3">
            <label>Nivel</label>
            <select class="form-control" name="nivel" value="{{ $turma->nivel ?? old('nivel') }}">
                <option>Escolha o Nivel de Ensino</option>
                <option {{ @$turma->nivel === 'Ensino Médio' ? 'selected' : '' }} value="Ensino Médio">Ensino Médio</option>
                <option {{ @$turma->nivel === 'Ensino Fundamental' ? 'selected' : '' }} value="Ensino Fundamental">Ensino Fundamental</option>
            </select>
        </div>

        <div class="form-group col-md-2">
            <label>Serie</label>
            <input type="text" class="form-control" name="serie" pattern="\[0-9]$" placeholder="0 - 9" value="{{ @$turma->serie ?? old('serie') }}">
        </div>
    </div>
</div>
    <button class="btn btn-primary" type="submit">Salvar</button>
</div>
