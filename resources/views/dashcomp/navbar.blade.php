<nav>
    <a href="{{route('dash')}}">home</a>
    <a href="#">transaksi</a>
    <a href="#">riwayat transaksi</a>
    @if($role == 'admin')
        <a href="{{route('menuKaryawan')}}">menu karyawan</a>
    @endif
    <a href="{{route('logout')}}">logout</a>
</nav>