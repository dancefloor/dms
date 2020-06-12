<div class="table-responsive">
    <table class="table" id="locations-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Country</th>
        <th>M2</th>
        <th>Price Hour</th>
        <th>Price Month</th>
        <th>Dance Shoes</th>
        <th>Phone</th>
        <th>Public</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($locations as $location)
            <tr>
                <td>{{ $location->name }}</td>
            <td>{{ $location->country }}</td>
            <td>{{ $location->m2 }}</td>
            <td>{{ $location->price_hour }}</td>
            <td>{{ $location->price_month }}</td>
            <td>{{ $location->dance_shoes }}</td>
            <td>{{ $location->phone }}</td>
            <td>{{ $location->public }}</td>
                <td>
                    {!! Form::open(['route' => ['locations.destroy', $location->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('locations.show', [$location->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('locations.edit', [$location->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
