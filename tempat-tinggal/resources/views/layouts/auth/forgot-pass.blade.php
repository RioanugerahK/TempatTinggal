@extends('layouts.app')

@section('content')
<div class="icon">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
      </svg>
</div>
<div class="card">
    <div class="card-content">
        <div class="card-title">
             <h2>Lupa Password</h2>
             <div class="underlined-title"></div>
        </div>
        <form action="" class="form">
            <div class="form-text">
                Masukkan nomor handphone yang telah terdaftar dan lakukan verifikasi untuk membuat password baru
            </div>
            <label for="user-noHp" style="padding-top:30px; font-weight:bold;">&nbsp;
               Nomor Handphone 
            </label>
            <input type="text" id="user-noHp" class="form-content" name="noHp" autocomplete="on" required/>
            <div class="form-text">
                Kamu akan membuat password baru setelah melakukan verifikasi.
            </div>
            <div class="form-border"></div>
            <input type="submit" id="submit-btn" name="submit"  value="Verifikasi">
        </form>
    </div>
</div>

<style>
.icon{
    margin-top: 36px;
    margin-left: 96px;
    width: 74px;
    height: 82px;
}
a{
    text-decoration: none;
}
body{
    background-color: white;
}
label{
    font-family: 'Lato';
    font-size: 16px;
    line-height: 19px;
    margin-bottom: 25px;
    font-weight: 400;
}
#forgot-pass{
    font-family: 'Lato';
    font-size: 10pt;
    margin-top: 10px;
    text-align: right;
    margin-left: -60px
}
.card{
    background: #fbfbfb;
    border-radius: 8px;
    box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
    height: 522px;
    margin: 6rem auto 8.1rem auto;
    width: 524px;
}
.card-content{
    padding: 12px 44px;
}
.card-title{
    font-family: "Raleway Thin",sans-serif;
    padding-bottom: 23px;
    padding-top: 13px;
    text-align: center;
    margin-top: 27px;
}
#submit-btn {
    background-color: white;
    border-radius: 21px;
    border: none;
    box-shadow: 0px 1px 8px #ffffff;
    cursor: pointer;
    color: black;
    font-family: "Raleway SemiBold",sans-serif;
    height: 42.3px;
    margin: 0 auto;
    margin-top: 15px;
    transition: 0.25s;
    width: 191px;
}
#submit-btn:hover{
    box-shadow: 0px 1px 18px #B4CFB0 ;
}
.form{
    align-items: left;
    display: flex;
    flex-direction: column;
}
.form-border{
    height: 1px ;
    width: 80%;
    margin-left: 74px;
}
.form-content{
    background: #fbfbfb;
    width: 375px;
    height: 48px;
    border-radius: 5px;
    border: 1px solid #888;
}
.underlined-title{
    height: 2px;
    margin: -1.1rem auto;
    width: 89px;
}
.form-text{
    font-family: 'Lato';
    font-style: normal;
    width: 247px;
    height: 42px;
    font-weight: 300;
    font-size: 15px;
    margin: 30px 0px;
}
</style>
@endsection