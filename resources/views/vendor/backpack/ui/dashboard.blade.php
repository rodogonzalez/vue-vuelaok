@extends(backpack_view('blank'))
<?php
$user_role = 'demo';
$current_user = backpack_user();
$show_pos = false;
$user_id = 0;
if (!is_null($current_user)) {
    $show_pos = true;
    $user_role = 'authenticated';
    $user_id = $current_user->id;
    if (backpack_user()->hasRole('admin')) {
        $user_role = 'admin';
    }
}


?>


@section('content')
    <div id="app" class="container-fluid">


    </div>
@endsection
