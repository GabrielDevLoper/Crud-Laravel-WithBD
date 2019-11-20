@section('title', "Listagem de usuarios")
@section('header')
@endsection

<div class="row">
        <div class="col-lg-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>CPF</th>
                        <th>Ações</th>
                    </tr>               
                </thead>
                <tbody>
                    @foreach($usuarios as $u)
                    <tr>
                        <td>{{$u->name}}</td>
                        <td>{{$u->email}}</td>
                        <td>{{$u->cpf}}</td>
                        <td>
                            <a href="/user/{{$u->id}}/update">Alterar</a>
                            <form action="/user/{{$u->id}}" method="POST">
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" >Excluir</button>
                            </form>
                        
                        </td>
                    </tr>
                    @endforeach
                
                </tbody>
           
            </table>
            
        </div>

    </div>