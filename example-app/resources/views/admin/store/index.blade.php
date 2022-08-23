<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Loja</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($stores as $store)
        <tr>
            <td>{{$stores->id}}</td>
            <td>{{$stores->name}}</td>
            <td></td>
        </tr>
    </tbody>
</table>
{{$stores->links()}}