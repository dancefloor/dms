
<li class="{{ Request::is('courses*') ? 'active' : '' }}">
    <a href="{{ route('courses.index') }}"><i class="fa fa-edit"></i><span>Courses</span></a>
</li>

<li class="{{ Request::is('locations*') ? 'active' : '' }}">
    <a href="{{ route('locations.index') }}"><i class="fa fa-edit"></i><span>Locations</span></a>
</li>

<li class="{{ Request::is('skills*') ? 'active' : '' }}">
    <a href="{{ route('skills.index') }}"><i class="fa fa-edit"></i><span>Skills</span></a>
</li>

<li class="{{ Request::is('lessons*') ? 'active' : '' }}">
    <a href="{{ route('lessons.index') }}"><i class="fa fa-edit"></i><span>Lessons</span></a>
</li>

<li class="{{ Request::is('payments*') ? 'active' : '' }}">
    <a href="{{ route('payments.index') }}"><i class="fa fa-edit"></i><span>Payments</span></a>
</li>

<li class="{{ Request::is('styles*') ? 'active' : '' }}">
    <a href="{{ route('styles.index') }}"><i class="fa fa-edit"></i><span>Styles</span></a>
</li>


