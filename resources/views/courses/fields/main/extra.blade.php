@auth

@php $user_status = auth()->user()->registrationStatus($course->id) @endphp

@if ($user_status == 'registered' || $user_status == 'open' || $user_status == 'partial')

{{-- <hr class="my-5">
<table class="w-full table-auto">
    <tr>
        <td class="border px-4 py-2">online url: </td>
        <td class="border px-4 py-2">{{ $course->online_link }}</td>
</tr>

<tr>
    <td class="border px-4 py-2">status</td>
    <td class="border px-4 py-2">{{ $course->status }}</td>
</tr>

<tr>
    <td class="border px-4 py-2">to_waiting</td>
    <td class="border px-4 py-2">{{ $course->to_waiting }}</td>
</tr>

<tr>
    <td class="border px-4 py-2">limit</td>
    <td class="border px-4 py-2">{{ $course->limit }}</td>
</tr>

<tr>
    <td class="border px-4 py-2">User ID (author)</td>
    <td class="border px-4 py-2">{{ $course->user_id }}</td>
</tr>


<tr>
    <td class="border px-4 py-2">Slug</td>
    <td class="border px-4 py-2">{{ $course->slug }}</td>
</tr>

<tr>
    <td class="border px-4 py-2">is Online ? : </td>
    <td class="border px-4 py-2">{{ $course->is_online }}</td>
</tr>
</table> --}}
@endif
@endauth