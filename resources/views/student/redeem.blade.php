@extends('layouts.users')
@section('content')
<section class="section has-text-centered"  style="background-image:url('/img/backscreen.png'); height: 800px;">
<div class="container has-text-centered" style="background-color:white; height: 500px; border-radius: 5px; margin-top: -3em;">
<section class="section has-text-centered background">
<table class="table is-striped" align="center">
    <thead>
    <tr>
        <th colspan="9" style="text-align:center;"><p class="title">REDEEM</p></th>
    </tr>
        <tr>
            <th>Name</th><th>Purchases</th><th>Options</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><button type="button">Yell in Forum (1)</button></td><td>1</td><td></td>
        </tr>
        <tr>
            <td><button type="button">Make a Project (2)</button></td><td>0</td><td></td>
        </tr>
        <tr>
            <td>Assignment 1</td><td></td><td><button type="button">Extension (4)</button><button type="button">Hand In late (8)</button></td>
        </tr>
        <tr>
            <td>Assignment 2</td><td></td><td><button type="button">Extension (4)</button><button type="button">Hand In late (8)</button></td>
        </tr>
        <tr>
            <td>Assignment 3</td><td></td><td><button type="button">Extension (4)</button><button type="button">Hand In late (8)</button></td>
        </tr>
    </tbody>
</table>
</div>
</section>
@endsection('content')