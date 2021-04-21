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
    <div class="form-row">
        <div class="form-group col-md-3">
            <label>Ano</label>
            <input class="date form-control" type="date" name="year" value="{{ date('Y-m-d', strtotime(@$team->year)) ?? old('year') }}">
        </div>

        <div class="form-group col-md-2">
            <label>Turno</label>
            <select class="form-control" name="shift" value="{{ $team->shift ?? old('shift') }}">
                <option>Escolha o Turno</option>
                <option {{ @$team->shift === 'Manhã' ? 'selected' : '' }} value="Manhã">Manhã</option>
                <option {{ @$team->shift === 'Tarde' ? 'selected' : '' }} value="Tarde">Tarde</option>
                <option {{ @$team->shift === 'Noite' ? 'selected' : '' }} value="Noite">Noite</option>
            </select>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-3">
            <label>Nivel</label>
            <select class="form-control" name="level" value="{{ $team->level ?? old('level') }}">
                <option>Escolha o Nivel de Ensino</option>
                <option {{ @$team->level === 'Ensino Médio' ? 'selected' : '' }} value="Ensino Médio">Ensino Médio</option>
                <option {{ @$team->level === 'Ensino Fundamental' ? 'selected' : '' }} value="Ensino Fundamental">Ensino Fundamental</option>
            </select>
        </div>

        <div class="form-group col-md-2">
            <label>Serie</label>
            <input type="number" class="form-control" name="series" placeholder="1 - 9" min="1" max="9" value="{{ @$team->series ?? old('series') }}">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-5">
            <label>Escola</label>
            <select class="form-control" name="school_id" value="{{ @$team->school_id ?? old('school_id') }}" required>
                <option>Escolha a Escola</option>
                @foreach($schools as $school)
                    <option {{ @$team->school_id == $school->id ? 'selected' : '' }} value="{{ $school->id }}">{{ $school->id }} - {{ $school->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <button class="btn btn-primary" type="submit">Salvar</button>
</div>