<div id='load-item'>
    <table class="table table-responsive table-striped table-bordered table-hover" id="admins-table">
        <thead>
        <th class='text-center'>Id</th>
        <th class="text-center">from</th>
        <th class="text-center">to</th>
        <th class="text-center">tittle</th>
        <th class="text-center">slug</th>
        <th class="text-center" colspan="3">Action</th>
        </thead>
        <tbody>
        @foreach($matchs as $match)
            <tr>
                <td class="text-center">{{ $match->id }}</td>
                <td class="text-center">{{ $match->from }}</td>
                <td class="text-center">{{ $match->to }}</td>
                <td class="text-center">{{ $match->tittle }}</td>
                <td class="text-center">{{ $match->slug }}</td>
                <td class="text-center">
                    <a href="{!! route('match.show', [$match->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-envelope-open-o" aria-hidden="true"></i></a>
                    <a href="{!! route('match.edit', [$match->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                    {{ Form::open(['method' => 'DELETE', 'route' => ['match.destroy', $match->id], 'class' => 'form-delete']) }}
                    {{ Form::hidden('id', $match->id) }}
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
    {!! $matchs->links() !!}
</div>