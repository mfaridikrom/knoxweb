<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
    <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous">
    </script>
</head>

<body>
    <h1>halaman utama</h1>
    <a href="dashboard">Dashboard</a>
    <a href="tentang">Tentang</a>
    <a href="knox">knox</a>
    @extends('masterlayout')
    @section('content')
        <x-ui.card></x-ui.card>
        <x-ui.button>bukti</x-ui.button>
        <x-ui.button variant='danger'>mmmm</x-ui.button>
        <x-ui.button variant="btn-warning">bukti</x-ui.button>
        <x-ui.button variant="btn-info">bukti</x-ui.button>
        <x-ui.button variant="btn-accent">bukti</x-ui.button>
        <br>
        <h3>apakah kamu sudah login?</h3>
        <br>
        sudah
        <x-ui.form type="radio" id="jkelamin" name="jkelamin" value="ya" checked></x-ui.form><br>
        belum
        <x-ui.form type="radio" id="jkelamin" name="jkelamin" value="belum"></x-ui.form>
    @endsection
</body>

</html>
