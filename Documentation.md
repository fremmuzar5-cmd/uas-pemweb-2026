# UAS PEMWEB

## Sistem Pengajuan & Persetujuan Sidang Skripsi Berbasis Web dengan TTE

### Oleh
20220803078-Muhammad Fremmuzar Aditya Putra
**Program Studi**: Sistem Informasi

---

## PROSES SLR (Systematic Literature Review)

```bash
Sumber Literatur Utama:
1. Jurnal transformasi digital administrasi akademik (2020–2024)
2. Regulasi Tanda Tangan Elektronik (Kominfo / BSrE)
3. Best practice UI/UX sistem informasi akademik

Rumpun Ilmu      : Software Engineering / Information Systems
Topik Penelitian : Digitalisasi proses pengajuan dan persetujuan sidang skripsi

P (Population)   : Institusi pendidikan tinggi
I (Intervention) : Sistem informasi berbasis web dengan workflow approval dan TTE
C (Comparison)   : Proses manual (kertas, tanda tangan basah, proses tatap muka)
O (Outcome)      : Efisiensi waktu, akurasi data, transparansi proses
S (Study)        : Implementasi dan evaluasi sistem

Research Question (RQ):
Bagaimana implementasi sistem pengajuan dan persetujuan sidang skripsi berbasis web dengan fitur TTE dapat meningkatkan efisiensi dan akurasi administrasi akademik?
```

---

## RESPOND (Hasil Sintesis Literatur)

```bash
Berdasarkan hasil SLR, ditemukan bahwa:
1. Digitalisasi workflow akademik mampu memangkas waktu proses administrasi hingga >60%.
2. Penerapan TTE yang sesuai regulasi meningkatkan validitas hukum dokumen akademik.
3. Sistem berbasis web dengan role-based access terbukti meningkatkan transparansi dan kepuasan pengguna.
4. UI/UX modern berpengaruh signifikan terhadap tingkat adopsi sistem oleh mahasiswa dan dosen.

Temuan ini menjadi dasar perancangan kebutuhan sistem (BRD).
```

---

## BRD (Business Requirements Document)

```bash
Dokumen BRD disusun berdasarkan hasil SLR dengan ruang lingkup:
- Modul Mahasiswa (pengajuan, upload berkas, tracking status)
- Modul Admin (verifikasi, approval, plotting dosen)
- Modul Dosen (penugasan dan tanda tangan elektronik)
- Integrasi TTE sesuai standar BSrE
- Dashboard monitoring dan notifikasi otomatis

Tujuan utama:
- Mengurangi waktu proses pengajuan dari ±7 hari menjadi ≤2 hari
- Eliminasi penggunaan kertas
- Meningkatkan akurasi dan transparansi data

File terlampir:
BRD.pdf
```

---

## IMPLEMENTASI WEBSITE

```bash
# Setup Project
1. cd root
2. cd boilerplate
3. ./start.sh uts-pemweb
4. cd src
5. code .

# Template
6. Template website diadaptasi dari:
   https://themewagon.com/themes/business/

# Struktur View (Laravel Blade)
7. cd resources/views
8. mkdir layouts pages partials

# Layout utama
9. cd layouts
10. touch app.blade.php

# Halaman
11. cd ../pages
12. touch home.blade.php

# Partial Components
13. cd ../partials
14. touch navbar.blade.php
15. touch sidebar.blade.php
16. touch header.blade.php
17. touch about.blade.php
18. touch service.blade.php
19. touch pricing.blade.php
20. touch cta.blade.php
21. touch latest.blade.php
22. touch brand.blade.php
23. touch contact.blade.php
24. touch map.blade.php
25. touch footer.blade.php
26. touch script.blade.php

# Routing & Backend
27. cd ../../../routes
28. cd ../database/migrations
29. cd ../seeders
30. cd ../../app/Models

# Filament Admin Panel
31. cd ../Filament/Admin/Resources
32. cd ../../../../
```

---

## Kesimpulan

Dokumentasi ini menunjukkan alur lengkap penelitian dan pengembangan sistem, mulai dari **SLR**, **perumusan kebutuhan (BRD)**, hingga **implementasi website**. Struktur ini memastikan proyek memiliki dasar ilmiah yang kuat, kebutuhan bisnis yang jelas, serta implementasi teknis yang terarah dan terdokumentasi dengan baik.
