<title>Listagem de Usuarios</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<div class="row">
        <div class="col-lg-12">
            <table class="table table-striped table-bordered table-hover">
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
                            <a href="/user/{$u->id}/update">Alterar</a>
                            <form action="{{route('delete',$u->id)}}" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
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