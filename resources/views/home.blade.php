@extends('layouts.app')

@section('title') Home @endsection

@section('content')
    <h1>Home page</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam enim ipsam laudantium nam nemo perferendis rem tenetur vero voluptate? Aliquam, aspernatur atque corporis cumque deleniti dignissimos ex itaque modi mollitia nihil non, perferendis porro reiciendis reprehenderit rerum tempore unde veniam. Aliquid dolorem dolorum enim laborum mollitia necessitatibus nisi perferendis quam qui quia quibusdam quis ratione saepe sed sequi sint, tempora temporibus voluptate voluptatem!</p>
@endsection

@section('aside')
    @parent
    <p>Some text</p>
@endsection
