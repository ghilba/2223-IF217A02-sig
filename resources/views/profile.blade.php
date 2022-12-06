@extends('layout.app')
@section('main')
<div class="hehe">
    <div class="profil">
        <div class="kirpro">
            <div class="pohol">
                <div class="photo">
                    <button class="ganti">Ubah Foto</button>
                </div>
            </div>
        </div>
        <div class="kanpro">
            <h1>USER PROFILE</h1>
            <hr>
            <form class="identitas">
                <label class="label" for="user"><b>Username</b></label><br>
                <input class ="usnam" type="text" placeholder="Nama" name="user"><br>
                <label class="label" for="nama"><b>Nama Lengkap</b></label><br>
                <input class ="iden" type="email" placeholder="Nama Lengkap" name="nama"><br>
                <label class="label" for="email"><b>Email</b></label><br>
                <input class ="iden" type="email" placeholder="Email" name="email"><br>
                <label class="label" for="password"><b>Password</b></label><br>
                <input class ="iden" type="password" placeholder="........" name="password"><br>
                <label class="label" for="password"><b>Ulangi Password</b></label><br>
                <input class ="iden" type="password" placeholder="........" name="password"><br>
                <button class="konfirmasi" type="submit">Konfirmasi</button>
            </form>
        </div>
    </div>
</div>
@endsection