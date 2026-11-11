<p><strong>Subject:</strong> {!! $user_data['subject'] !!}</p>
<p><strong>Name:</strong> {!! $user_data['name'] !!}</p>
<p><strong>Email:</strong> {!! $user_data['email'] !!}</p>
<p><strong>Phone:</strong> {!! $user_data['number'] !!}</p>
<p><strong>Country:</strong> {!! $user_data['country'] !!}</p>
<p><strong>How Did You Find Us:</strong> {!! $user_data['find'] !!}</p>

@if (!empty($user_data['Referer Name']))
    <p><strong>Referer Name:</strong> {!! $user_data['Referer Name'] !!}</p>
@endif

@if (!empty($user_data['message']))
    <p><strong>Message:</strong> {!! $user_data['message'] !!}</p>
@endif
