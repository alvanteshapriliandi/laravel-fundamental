<h1>{{ $title }}</h1>
<p>{{ $subtitle }}</p>

Ini menggunakan PHP Biasa: <?php echo "Halo, Dunia Aku Sedang Belajar Laravel!" ?>
Ini menggunakan Blade: {{ "Halo, Dunia Aku Sedang Belajar Laravel!" }}

<hr>

<!-- Membuat variabel dengna php biasa -->
<?php
    $firstname = "Alvantesha";
?>

<!-- Membuat variabel dengna Blade -->
@php
    $lastname = "Priliandi";
@endphp


<h2>Halo PHP Biasa <?php echo $firstname . ' ' . $lastname; ?></h2>

<h2>Halo Blade {{ $firstname }} {{ $lastname }}</h2>

<hr>

@php
    $is_login = true;
@endphp

<?php if ($is_login): ?>
    <p>Anda Berhasil Login</p>
<?php else: ?>
    <p>Anda Gagal Login</p>
<?php endif; ?>

@if ($is_login)
    <p>Anda Berhasil Login</p>
@else
    <p>Anda Gagal Login</p>
@endif

<hr>

@php
    $students = [
        [
            'nama' => 'Alvantesha',
            'nilai' => 90
        ],
        [
            'nama' => 'Priliandi',
            'nilai' => 80
        ],
        [
            'nama' => 'Dimas',
            'nilai' => 70
        ]
    ];
@endphp
<h2>Daftar Siswa dengan PHP Biasa</h2>
<ul>
    <?php foreach ($students as $student): ?>
        <li>PHP Biasa: <?php echo $student['nama'] . ' - ' . $student['nilai']; ?></li>
    <?php endforeach; ?>
</ul>

<h2>Daftar Siswa dengan Blade</h2>
<ul>
    @foreach ($students as $student)
        <li>Blade: {{ $student['nama'] }} - {{ $student['nilai'] }}</li>
    @endforeach
</ul>

@php
    $html = "<hr><h2>Ini HTML dari PHP Biasa</h2><p>Ini paragraf dari PHP Biasa</p>";
@endphp

{!! $html !!}




