@extends('layout')
@section('content')
<div id="app">
    <my-form v-for="n in range"></my-form>
    <button v-on:click="addField()">Add a Field</button>
</div>
<script type="x-template" id="my-form">
    <div>
        <input type="text"/>
    </div>
</script>
<script src="{{asset('js/app.js')}}"></script>
@endsection