<div class="table-responsive">
    <table class="table" id="styles-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Icon</th>
                <th>Image</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($styles as $style)
            <tr>
                <td>
                    <a href="{{ route('styles.show', [$style->id]) }}"
                        class='btn btn-default btn-xs'>{{ $style->name }}</a>
                </td>
                <td>{{ $style->description }}</td>
                <td>{{ $style->icon }}</td>
                <td>{{ $style->image }}</td>
                <td>
                    {!! Form::open(['route' => ['styles.destroy', $style->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('styles.show', [$style->id]) }}" class='btn btn-default btn-xs'><i
                                class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('styles.edit', [$style->id]) }}" class='btn btn-default btn-xs'><i
                                class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' =>
                        'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>