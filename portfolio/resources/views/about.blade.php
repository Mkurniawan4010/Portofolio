@extends('layout')

@section('title', 'About - My Portfolio')

@section('content')
<section class="py-16">
    <div class="max-w-6xl mx-auto px-4">
        <h1 class="text-5xl font-bold text-center mb-12 text-white animate-on-scroll">Tentang Saya</h1>

        <div class="grid md:grid-cols-2 gap-12 mb-12 items-center">
            <div class="animate-on-scroll flex justify-center md:justify-end">
                <div class="gradient-border p-2 inline-flex items-center justify-center hover-lift max-w-max tilt-3d" data-tilt-max="15" style="transform-style: preserve-3d;">
                    <div class="overflow-hidden rounded-lg shadow-lg w-64 sm:w-80 md:w-[360px] h-96 sm:h-[420px] md:h-[480px] bg-gray-800 flex items-center justify-center" style="transform: translateZ(30px);">
                        <img
                            src="{{ asset('storage/foto_diri/fotoke2.png') }}"
                            alt="Foto Saya"
                            class="w-full h-full object-cover object-center"
                            onerror="this.style.display='none'; document.getElementById('about-photo-placeholder').style.display='flex';"
                        />
                        <div id="about-photo-placeholder" class="hidden items-center justify-center">
                            <i class="fas fa-user-circle text-8xl text-blue-500 opacity-50"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="animate-on-scroll delay-200 flex flex-col justify-center">
                <h2 class="text-3xl font-bold mb-4 text-white">Siapa Saya? 👨‍💼</h2>
                <p class="text-lg text-gray-300 mb-4 leading-relaxed">
                    {{ $aboutContent['bio'] ?? 'Saya adalah seorang developer berpengalaman dengan latar belakang pendidikan S1 Informatika yang passion terhadap teknologi dan pengembangan web.' }}
                </p>
                <p class="text-lg text-gray-300 mb-6 leading-relaxed">
                    {{ $aboutContent['intro'] ?? 'Saya terus belajar dan mengembangkan skill untuk memberikan solusi terbaik dalam setiap proyek yang saya tangani.' }}
                </p>
            </div>
        </div>

        <h2 class="text-3xl font-bold mb-8 text-center text-white animate-on-scroll">Nilai-Nilai Saya 💡</h2>
        <div class="grid md:grid-cols-3 gap-6 mb-12">
            <div class="gradient-border p-6 hover-lift animate-on-scroll">
                <div class="text-4xl text-blue-400 mb-4">
                    <i class="fas fa-rocket"></i>
                </div>
                <h3 class="text-xl font-semibold mb-2 text-white">Inovasi</h3>
                <p class="text-gray-400">Saya terus mencari teknologi dan metodologi baru untuk memberikan solusi yang lebih baik.</p>
            </div>
            <div class="gradient-border p-6 hover-lift animate-on-scroll delay-200">
                <div class="text-4xl text-green-400 mb-4">
                    <i class="fas fa-code"></i>
                </div>
                <h3 class="text-xl font-semibold mb-2 text-white">Kualitas Kode</h3>
                <p class="text-gray-400">Saya percaya pada penulisan kode yang bersih, mudah dipelihara, dan terdokumentasi dengan baik.</p>
            </div>
            <div class="gradient-border p-6 hover-lift animate-on-scroll delay-300">
                <div class="text-4xl text-purple-400 mb-4">
                    <i class="fas fa-handshake"></i>
                </div>
                <h3 class="text-xl font-semibold mb-2 text-white">Kolaborasi</h3>
                <p class="text-gray-400">Saya percaya bahwa hasil terbaik datang dari kerja tim yang solid dan komunikasi yang baik.</p>
            </div>
        </div>

        <!-- Journey Section -->
        <h2 class="text-3xl font-bold mb-8 text-center text-white animate-on-scroll">Perjalanan Saya 📚</h2>
        <div class="gradient-border p-8 animate-on-scroll">
            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <h3 class="text-2xl font-bold text-white mb-4">
                        <i class="fas fa-graduation-cap text-blue-500 mr-2"></i>Pendidikan
                    </h3>
                    <div class="space-y-4">
                        <div class="dark-card p-4 rounded border-l-4 border-blue-500 hover-lift">
                            <p class="font-bold text-white">S1 Informatika</p>
                            <p class="text-gray-400">Universitas Terkemuka</p>
                            <p class="text-sm text-gray-500">Lulusan dengan prestasi</p>
                        </div>
                    </div>
                </div>
                <div>
                    <h3 class="text-2xl font-bold text-white mb-4">
                        <i class="fas fa-star text-yellow-500 mr-2"></i>Fokus
                    </h3>
                    <ul class="space-y-2 text-gray-300">
                        <li><i class="fas fa-check text-green-400 mr-2"></i>Web Development</li>
                        <li><i class="fas fa-check text-green-400 mr-2"></i>Backend Development</li>
                        <li><i class="fas fa-check text-green-400 mr-2"></i>Database Design</li>
                        <li><i class="fas fa-check text-green-400 mr-2"></i>Problem Solving</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection