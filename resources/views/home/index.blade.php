@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<div class="text-center">
    <h1>
        Welcome to the Job Board application!
    </h1>
</div>
<body>
<div id="app">
    <job-type :jobtype_name></job-type>
</div>
<script src="/js/app.js"></script>
</body>
@endsection
<script>
    import JobType from "../../js/component/JobType";
    export default {
        components: {JobType}
    }
</script>
