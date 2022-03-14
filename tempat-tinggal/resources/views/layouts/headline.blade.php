@extends('layouts.app')
@section('content')
        <div class="headline">
            <h1>Mau cari Kos?</h1>
            <p>Cari Kos dengan mudah di TempatTinggal.com</p>
            <div class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" style="background-color: #B4CFB0;" type="submit">Cari</button>
            </div>
        </div>
        <div class="rekomendasi">
            <h1>Rekomendasi Kos</h1>
            <form action="">
                {{-- <img src="{{asset ('')}}" alt=""> --}}
                <div class="image">
                </div>
                <div class="keterangan">
                    <div class="kategori">
                        putra
                    </div>
                    <div class="namakost">
                        nama kost
                    </div>
                    <div class="lokasi">
                        lokasi
                    </div>
                    <div class="harga">
                        Rp 1.000.000 -Rp.1.200.000
                    </div>
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                          </svg>
                    </div>
                </div>
            </form>
        </div>

<style>
    .headline{
        height: 260px;
        margin-left: 157px;
    }
.headline h1{
    font-weight: bold;
    font-size: 32px;
    margin-top: 67px;
}   
.headline p{
    margin-top: -10px;
}
.headline .d-flex{
    width: 366px;
    height: 40px;
    box-shadow: 3px 5px 11px 1px rgba(0,0,0,0.75);
    -webkit-box-shadow: 3px 5px 11px 1px rgba(0,0,0,0.75);
    -moz-box-shadow: 3px 5px 11px 1px rgba(0,0,0,0.75);
}

.d-flex button{
    padding: 5px 30px;
    margin-left: -7px;
}

.rekomendasi{
    background-color:  #B4CFB0;
    height: 645px;
}
.rekomendasi h1{
    font-weight: bold;
    margin-left: 157px;
    padding-top: 44px;
}
.rekomendasi form {
    width: 306px;
    height: 350px;
    background-color: white;
    margin-top: 33px;
    margin-left: 139px;
    box-shadow: -3px 10px 5px -5px rgba(0,0,0,0.6);
    -webkit-box-shadow: -3px 10px 5px -5px rgba(0,0,0,0.6);
    -moz-box-shadow: -3px 10px 5px -5px rgba(0,0,0,0.6);
    padding-top: 18px;
    border-radius: 5px;
}

form .image{
    background-color: blue;
    color: black;
    width: 270px;
    height: 160px;
    margin-left: 18px;
    margin-right: 18px;
    border-radius:5px; 
}
.keterangan{
    margin-left: 18px;
}
.keterangan .kategori{
    display: flex;
    width: 50px;
    height: 20px;
    margin-top: 19px;
    border: 1px solid black;
    justify-content: center;
    align-items: center;
    border-radius: 5px;
}
.keterangan .namakost{
    margin-top: 10px;
}
.keterangan .lokasi{
    margin-top: -5px;
}
.keterangan .harga{
    margin-top: 10px;
}
.keterangan .icon{
    width: 24px;
    height: 24px;
    float: right;
    margin-right: 18px;
    margin-bottom: 12px;
}
</style>
@endsection