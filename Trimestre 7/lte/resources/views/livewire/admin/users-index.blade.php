<div>
    <div class="card">

        <div class="card-header">
            <input wire:model="search" class="form-control" placeholder="Ingrese el nombre de un usuario">
        </div>

        @if ($users->count())
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Rol</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @if ($user->getRoleNames()->isEmpty())
                            <span class="text-danger">Sin Rol</span>
                            @else
                            {{ $user->getRoleNames()->first() }}
                            @endif
                        </td>
                        <td>{{ $user->created_at }}</td>
                        <td>{{ $user->updated_at }}</td>
                        <td width="10 px">
                            <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-primary">Editar</a>
                            <form action="{{ route('admin.users.destroy', $user) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este usuario?')">Eliminar</button>
                        </form>
                        </td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="card-footer">
                {{ $users->links() }}
            </div>
        </div>
        @else
        <div class="card-body">
            <strong>No hay registros</strong>
        </div>
        @endif
    </div>
</div>
