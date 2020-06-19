@if ($course->online_link)
<section>
    <table>
        <tr>
            <td>zoom</td>
            <td>{{ $course->online_link }}</td>
        </tr>
        @if ($course->online_id)
        <tr>
            <td>id</td>
            <td>{{ $course->online_id }}</td>
        </tr>
        <tr>
            <td>password</td>
            <td>{{ $course->online_password }}</td>
        </tr>
        @endif
    </table>
</section>
@endif