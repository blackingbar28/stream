<div id='load-item'>
    <table class="table table-responsive table-striped table-bordered table-hover" id="admins-table">
        <thead>
        <th class='text-center'>Id</th>
        <th class="text-center">Name</th>
        <th class="text-center">Slug</th>
        <th class="text-center" colspan="3">Action</th>
        </thead>
        <tbody>
        @foreach($leagues as $league)
            <tr>
                <td class="text-center">{{ $league->name }}</td>
                <td class="text-center">{{ $league->name }}</td>
                <td class="text-center">{{ $league->name }}</td>
                <td class="text-center">
                    <a href="{!! route('league.show', [$league->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-envelope-open-o" aria-hidden="true"></i></a>
                    <a href="{!! route('league.edit', [$league->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                    {{ Form::open(['method' => 'DELETE', 'route' => ['league.destroy', $league->id], 'class' => 'form-delete']) }}
                    {{ Form::hidden('id', $league->id) }}
                    {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                    {{ Form::close() }}

                    {{--<a href="{!! route('league.destroy', [$league->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-trash-o" aria-hidden="true"></i></a>--}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<div class="text-right">
    {!! $leagues->links() !!}
</div>