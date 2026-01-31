@php
$contact = [
    'phone' => '0812-3456-7890',
    'email' => 'admin@sidangskripsi.test',
    'address_1' => 'Fakultas Ilmu Komputer',
    'address_2' => 'Universitas Contoh, Indonesia',
    'schedule_1' => 'Senin – Jumat',
    'schedule_2' => '08.00 – 16.00 WIB',
];
@endphp

<section id="contact" class="contact-section pt-100 pb-100">
    <div class="container">
        <div class="row">

            <!-- CONTACT INFO -->
            <div class="col-xl-4 col-lg-5">
                <div class="contact-item-wrapper">

                    <div class="contact-item mb-4">
                        <div class="contact-icon">
                            <i class="lni lni-phone"></i>
                        </div>
                        <div class="contact-content">
                            <h4>Kontak</h4>
                            <p>{{ $contact['phone'] }}</p>
                            <p>{{ $contact['email'] }}</p>
                        </div>
                    </div>

                    <div class="contact-item mb-4">
                        <div class="contact-icon">
                            <i class="lni lni-map-marker"></i>
                        </div>
                        <div class="contact-content">
                            <h4>Alamat</h4>
                            <p>{{ $contact['address_1'] }}</p>
                            <p>{{ $contact['address_2'] }}</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="lni lni-alarm-clock"></i>
                        </div>
                        <div class="contact-content">
                            <h4>Jam Operasional</h4>
                            <p>{{ $contact['schedule_1'] }}</p>
                            <p>{{ $contact['schedule_2'] }}</p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- CONTACT FORM -->
            <div class="col-xl-8 col-lg-7">
                <div class="contact-form-wrapper">

                    <div class="section-title text-center mb-4">
                        <span>Hubungi Kami</span>
                        <h2>Butuh Informasi Lebih Lanjut?</h2>
                        <p>
                            Silakan hubungi kami untuk mendapatkan informasi terkait
                            sistem pengajuan dan persetujuan sidang skripsi berbasis web.
                        </p>
                    </div>

                    <form class="contact-form" method="POST" action="#">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="name" placeholder="Nama Lengkap" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="email" placeholder="Email" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="phone" placeholder="No. Telepon">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="subject" placeholder="Subjek">
                            </div>
                            <div class="col-12">
                                <textarea name="message" rows="5" placeholder="Pesan"></textarea>
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="btn primary-btn rounded-full">
                                    Kirim Pesan
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</section>
