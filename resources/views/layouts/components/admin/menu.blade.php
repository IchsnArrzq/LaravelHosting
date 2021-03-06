<!--App Sidebar-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <ul class="side-menu">
        <li class="slide">
            <a class="side-menu__item" href="{{ route('home') }}"><i class="side-menu__icon" data-eva="monitor-outline"></i><span class="side-menu__label">Dashboard</span></a>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon" data-eva="file-text-outline"></i><span class="side-menu__label">Master</span><i class="angle fe fe-chevron-down"></i></a>
            <ul class="slide-menu">
                <li class="{{ request()->is('admin/master/pegawai*') ? 'active' : '' }}"><a class="slide-item" href="{{ route('admin.pegawai.index') }}">Pegawai</a></li>
                <li class="{{ request()->is('admin/master/struktur*') ? 'active' : '' }}"><a class="slide-item" href="{{ route('admin.struktur.index') }}">Struktur Organisasi</a></li>
                <li class="{{ request()->is('admin/master/jabatan*') ? 'active' : '' }}"><a class="slide-item" href="{{ route('admin.jabatan.index') }}">Jabatan</a></li>
                <li class="{{ request()->is('admin/master/agama*') ? 'active' : '' }}"><a class="slide-item" href="{{ route('admin.agama.index') }}">Agama</a></li>
                <li class="{{ request()->is('admin/master/dokumen*') ? 'active' : '' }}"><a class="slide-item" href="{{ route('admin.dokumen.index') }}">Dokumen</a></li>
                <li class="{{ request()->is('admin/master/status_pernikahan*') ? 'active' : '' }}"><a class="slide-item" href="{{ route('admin.status_pernikahan.index') }}">Status Pernikahan</a></li>
                <li class="{{ request()->is('admin/master/pendidikan*') ? 'active' : '' }}"><a class="slide-item" href="{{ route('admin.pendidikan.index') }}">Pendidikan</a></li>
                <li class="{{ request()->is('admin/master/golongan*') ? 'active' : '' }}"><a class="slide-item" href="{{ route('admin.golongan.index') }}">Golongan</a></li>
                <li class="{{ request()->is('admin/master/keahlian*') ? 'active' : '' }}"><a class="slide-item" href="{{ route('admin.keahlian.index') }}">Keahlian</a></li>
                <li class="{{ request()->is('admin/master/unit*') ? 'active' : '' }}"><a class="slide-item" href="{{ route('admin.unit.index') }}">Unit</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon" data-eva="grid-outline"></i><span class="side-menu__label">Kenaikan</span><i class="angle fe fe-chevron-down"></i></a>
            <ul class="slide-menu">
                <li><a class="slide-item" href="{{ route('admin.kenaikan_pangkat.index') }}">Kenaikan Pangkat</a></li>
                <li><a class="slide-item" href="{{ route('admin.kenaikan_berkala.index') }}">Kenaikan Berkala</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon" data-eva="briefcase-outline"></i><span class="side-menu__label">Informasi</span><i class="angle fe fe-chevron-down"></i></a>
            <ul class="slide-menu">
                <li><a class="slide-item" href="{{ route('admin.kategori_informasi.index') }}">Kategori Informasi</a></li>
                <li><a class="slide-item" href="{{ route('admin.informasi.index') }}">Informasi</a></li>
                <li><a class="slide-item" href="asd">Kepegawaian</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon" data-eva="file-text-outline"></i><span class="side-menu__label">Surat</span><i class="angle fe fe-chevron-down"></i></a>
            <ul class="slide-menu">
                <li><a class="slide-item" href="{{ route('admin.surat_masuk.index') }}">Surat Masuk</a></li>
                <li><a class="slide-item" href="{{ route('admin.surat_keluar.index') }}">Surat Keluar</a></li>
                <li><a class="slide-item" href="{{ route('admin.klasifikasi.index') }}">Klasifikasi Surat</a></li>
                <li><a class="slide-item" href="{{ route('admin.disposisi_keluar.index') }}">Disposisi Keluar</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon" data-eva="pin-outline"></i><span class="side-menu__label">Sppd</span><i class="angle fe fe-chevron-down"></i></a>
            <ul class="slide-menu">
                <li><a class="slide-item" href="{{ route('admin.kategori_sppd.index') }}">Daftar Sppd</a></li>
                <li><a class="slide-item" href="{{ route('admin.sppd.index') }}">Daftar tujuan</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon" data-eva="layout-outline"></i><span class="side-menu__label">Cuti</span><i class="angle fe fe-chevron-down"></i></a>
            <ul class="slide-menu">
                <li><a class="slide-item" href="{{  route('admin.kategori_cuti.index') }}">Kategori Cuti</a></li>
                <li><a class="slide-item" href="{{  route('admin.cuti.index') }}">Daftar Cuti</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon" data-eva="archive-outline"></i><span class="side-menu__label">Rapat</span><i class="angle fe fe-chevron-down"></i></a>
            <ul class="slide-menu">
                <li><a class="slide-item" href="{{  route('admin.rapat.index') }}">Rapat</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon" data-eva="save-outline"></i><span class="side-menu__label">Penggajian </span><i class="angle fe fe-chevron-down"></i></a>
            <ul class="slide-menu">
                <li><a class="slide-item" href="{{ route('admin.penerimaan.index') }}">Penerimaan</a></li>
                <li><a class="slide-item" href="{{ route('admin.potongan.index') }}">Potongan</a></li>
                <li><a class="slide-item" href="{{ route('admin.gaji.index') }}">Gaji</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon" data-eva="clock-outline"></i><span class="side-menu__label">Absensi Pegawai</span><i class="angle fe fe-chevron-down"></i></a>
            <ul class="slide-menu">
                <li><a class="slide-item" href="{{  route('admin.jam_kerja.index') }}">Jam Kerja</a></li>
                <li><a class="slide-item" href="{{  route('admin.absensi.index') }}">Absensi</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon" data-eva="stop-circle-outline"></i><span class="side-menu__label">User & Backup</span><i class="angle fe fe-chevron-down"></i></a>
            <ul class="slide-menu">
                <li><a class="slide-item" href="{{ route('admin.user.index') }}">User</a></li>
                <li><a class="slide-item" href="{{ route('admin.user_backup.index') }}">User Backup</a></li>
                <li><a class="slide-item" href="{{ route('admin.backup.index') }}">Database Backup</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon" data-eva="settings"></i><span class="side-menu__label">Settings</span><i class="angle fe fe-chevron-down"></i></a>
            <ul class="slide-menu">
                <li><a class="slide-item" href="{{ route('admin.role.index') }}">Role</a></li>
                <li><a class="slide-item" href="{{ route('admin.permission.index') }}">Permission</a></li>
                <li><a class="slide-item" href="{{ route('admin.setting.show',1) }}">Application Setting</a></li>
            </ul>
        </li>
    </ul>
</aside>
<!--/App Sidebar-->