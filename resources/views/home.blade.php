@extends('layouts.app_modern')

@section('content')

<link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

<style>
    h2 {
        text-align: center;
        color: #00695c;
        font-size: 36px;
        margin-bottom: 50px;
        font-weight: 600;
    }

    .grid-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 30px;
        width: 100%;
        margin: 0;
        padding: 20px;
    }

    .tip {
        display: block;
        text-decoration: none;
        background: #ffffffdd;
        border-radius: 20px;
        padding: 20px;
        position: relative;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        overflow: hidden;
        border: 3px solid transparent;
        background-clip: padding-box;
    }

    .tip::before {
        content: '';
        position: absolute;
        inset: 0;
        padding: 3px;
        border-radius: 20px;
        background: linear-gradient(135deg, #00bfa5, #64ffda);
        -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
        -webkit-mask-composite: destination-out;
        mask-composite: exclude;
    }

    .tip:hover {
        transform: scale(1.04);
        box-shadow: 0 12px 28px rgba(0, 0, 0, 0.15);
    }

    .tip h4 {
        font-size: 20px;
        margin-bottom: 10px;
        color: #00796b;
    }

    .tip h4::before {
        content: "💡 ";
    }

    .tip p {
        font-size: 16px;
        color: #333;
    }

    .tip img {
        width: 100%;
        margin-top: 15px;
        border-radius: 12px;
        border: 2px solid #e0f2f1;
    }
</style>

<div>
    <h2>Tips Agar Konsultasi Doktermu Lebih Optimal</h2>

    <div class="grid-container">
        <a href="{{ url('/home') }}" class="tip">
            <h4>1. Persiapkan Pertanyaan Sebelum Konsultasi</h4>
            <p>Catat semua keluhan, gejala, dan pertanyaan agar tidak ada yang tertinggal.</p>
            <img src="https://res.cloudinary.com/dk0z4ums3/image/upload/v1664853609/attached_image/mengenal-tentang-konsultasi-program-hamil.jpg" alt="Persiapkan pertanyaan">
        </a>

        <a href="{{ url('/home') }}" class="tip">
            <h4>2. Ceritakan Kondisi Secara Jujur</h4>
            <p>Jelaskan dengan detail sejak kapan gejala muncul, seberapa sering, dan efeknya.</p>
            <img src="https://autolac.com.br/app/uploads/2018/07/Atendimento-humanizado-o-que-%C3%A9-e-qual-a-import%C3%A2ncia-na-%C3%A1rea-de-sa%C3%BAde-3.jpg" alt="Ceritakan kondisi">
        </a>

        <a href="{{ url('/home') }}" class="tip">
            <h4>3. Catat Jawaban dan Saran Dokter</h4>
            <p>Dengarkan dengan baik dan catat apa saja yang perlu dilakukan atau dihindari.</p>
            <img src="https://akcdn.detik.net.id/community/media/visual/2019/11/10/207f7bbe-819a-4195-9fa5-21a94d8aace1.jpeg?w=1000" alt="Catat saran dokter">
        </a>

        <a href="{{ url('/home') }}" class="tip">
            <h4>4. Tindak Lanjuti Saran Dokter</h4>
            <p>Minum obat sesuai petunjuk, dan pastikan datang sesuai jadwal kontrol.</p>
            <img src="https://img.okezone.com/content/2022/12/07/487/2722173/harus-minum-obat-hipertensi-setiap-hari-amankah-untuk-ginjal-sP76GWrj9o.JPG" alt="Tindak lanjut saran">
        </a>
    </div>
</div>

@endsection
