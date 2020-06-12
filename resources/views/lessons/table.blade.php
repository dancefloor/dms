<div class="table-responsive">
    <table class="table" id="lessons-table">
        <thead>
            <tr>
                <th>Date</th>
        <th>Course Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($lessons as $lesson)
            <tr>
                <td>{{ $lesson->date }}</td>
            <td>{{ $lesson->course_id }}</td>
                <td>
                    {!! Form::open(['route' => ['lessons.destroy', $lesson->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('lessons.show', [$lesson->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('lessons.edit', [$lesson->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
