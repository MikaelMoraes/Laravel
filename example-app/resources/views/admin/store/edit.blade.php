@extends(layouts.app)

@section('content')
<h1>Criar Loja</h1>
<form action="{{route('admin.stores.store')}}" method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}" class="form-control">
<div class="form-group">
    <label>Nome loja</label>
    <input type="text" name="name" class="form-control">
</div>
<div class="form-group">
    <label>descrição</label>
    <input type="text" name="description" class="form-control">
</div>
<div class="form-group">
    <label>telefone</label>
    <input type="text" name="phone" class="form-control">
</div>
<div class="form-group">
    <label>celular/wpp</label>
    <input type="text" name="mobile_phone" class="form-control">
</div>
<div class="form-group">
    <label>slug</label>
    <input type="text" name="slug" class="form-control">
</div>
<div class="form-group">
    <label>Usuario</label>
    <select name="user" >
        @foreach($users as $user)
        <option value="{{$user->id}}">{{$user->name}}</option>
        @endforeach
    </select>
</div>
<div>
    <button type="submit" class="btn btn-lg btn-success">CRIAR LOJA </button>
</div>
</form>
@endsection