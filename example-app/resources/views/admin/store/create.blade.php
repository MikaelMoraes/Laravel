<h1>Criar Loja</h1>
<form action="/admin/stores/store" method="post">
<div>
    <label>Nome loja</label>
    <input type="text" name="name">
</div>
<div>
    <label>descrição</label>
    <input type="text" name="description">
</div>
<div>
    <label>telefone</label>
    <input type="text" name="phone">
</div>
<div>
    <label>celular/wpp</label>
    <input type="text" name="mobile_phone">
</div>
<div>
    <label>slug</label>
    <input type="text" name="slug">
</div>
<div>
    <label>Usuario</label>
    <select name="user" >
        @foreach($users as $user)
        <option value="{{$user->id}}">{{$user->name}}</option>
        @endforeach
    </select>
</div>
<div>
    <button type="submit">CRIAR LOJA </button>
</div>
</form>