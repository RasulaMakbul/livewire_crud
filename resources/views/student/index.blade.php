@extends('layouts.app')

@section('content')
<div>
    <livewire:student-show />
</div>
@endsection

@section('script')
<script>
    window.addEventListener('close-modal', event => {
        $('#creatStudentModal').modal('hide');
        $('#updateStudentModal').modal('hide');
        $('#deleteStudentModal').modal('hide');
    })
</script>
@endsection