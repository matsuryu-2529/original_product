@section('title', 'sakurun | teacher')
@extends('layouts.teacher')
@section('content')
    <livewire:teachers.header />
    <livewire:teachers.test-result :user-id="$userId" :year="$year" />
@endsection
