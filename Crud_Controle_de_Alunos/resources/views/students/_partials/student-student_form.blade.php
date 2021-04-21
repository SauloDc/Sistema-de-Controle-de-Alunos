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
        <div class="form-group col-md-6">
            <label>Nome</label>
            <input type="text" class="form-control" name="name" value="{{@$student->name ?? old('name')}}" required>
        </div>
        <div class="form-group col-md-4">
            <label>Email</label>
            <input type="email" class="form-control" name="email" value="{{@$student->email ?? old('email')}}" required>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-4">
            <label>Telefone</label>
            <input type="text" class="form-control" name="phone" placeholder="9999-9999" value="{{ @$student->phone ?? old('phone') }}">
        </div>

        <div class="form-group col-md-3">
            <label>Data de Nascimento </label>
            <input class="date form-control" type="date" name="birthday" value="{{ date('Y-m-d', strtotime(@$student->brithday)) ?? old('brithday') }}">
        </div>

        <div class="form-group col-md-3">
            <label>Gênero</label>
            <select class="form-control" name="gender" value="{{ @$student->gender ?? old('gender') }}">
                <option>Escolha o Genero</option>
                <option {{ @$student->gender === 'male' ? 'selected' : '' }} value="male">Masculino</option>
                <option {{ @$student->gender === 'female' ? 'selected' : '' }} value="female">Feminino</option>
            </select>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-5">
            <label>Escola</label>
            <select class="form-control" name="school_id" value="{{@$student->school_id ?? old('school_id') }}" required>
                <option value="">Escolha a Escola</option>
                @foreach($schools as $school)
                <option {{ @$student->school_id == $school->id ? 'selected' : '' }} value="{{ $school->id }}">
                    {{ $school->id }} - {{ $school->name }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-md-5">
            <label>Turma</label>
            <select class="form-control" name="team_id" value="{{@$student->team_id ?? old('team_id') }}" required>
                <option value="">Escolha a Turma</option>
                @foreach($teams as $team)

                <option {{ @$team->id == @$student->team_id ? 'selected' : '' }} value="{{@$team->id }}">
                    {{ $team->id }} - Time de {{ date('Y', strtotime($team->year))}} - {{ $team->shift}}
                </option>
                @endforeach
            </select>
        </div>
    </div>
</div>
<button class="btn btn-primary" type="submit">Salvar</button>
</div>