@extends('panels::layouts.admin')

@section('content')
<div class="content-wrapper">
    <form id='panels-edit' class="container" action="{{ route('panels.users.update', ['id' => $profile->users_id]) }}" @submit.stop.prevent='submit($event)'>
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="row">
        <div class="col-12">    
            <div class="card mt-4">
                <div class="card-body" style='position:relative; z-index:0'>
                    <dl>
                        <dt>Foto</dt>
                    </dl>
                    <picture-input ref="pictureInput" {{ $profile->photo ? "prefill=".asset('avatars').'/'.$profile->photo : '' }}
                    width="200" height="300" accept="image/jpeg,image/png" 
                    size="10" button-class="btn" :removable='true' @change="onChange" name='avatar' @remove='onRemove'>
    </picture-input>
                </div>
            </div>
            <div class="col-12 text-right">
                <button class="btn btn-primary" type="submit">Simpan</button>
            </div>
            <div class="card mt-4">
                <div class="card-body">
                    <dl>
                        <dt>Nama Depan</dt>
                        <input type="text" class="form-control" name='first_name' value='{{ $profile->first_name }}'>
                    </dl>
                    <dl>    
                        <dt>Nama Belakang</dt>
                        <input type="text" class="form-control" name='last_name' value='{{ $profile->last_name }}'>
                    </dl>
                </div>
            </div>
            <div class="card mt-4">
            <div class="card-body">
                <dl>
                <dt>Email</dt>
                <input type="text" disabled class="form-control" name='email' value='{{ $profile->user->email }}'>
                </dl>
                <dl>
                <dt>Nama</dt>
                <input type="text" disabled class="form-control" name='name' value='{{ $profile->user->name }}'>
                </dl>
                <dl>
                        <dt>Jenis Kelamin</dt>
                        <select name="gender" id="" class="form-control">
                            <option Disabled>Pilih jenis kelamin</option>
                            <option value=0 {{ $profile->gender ? '' : 'selected' }}>Perempuan</option>
                            <option value=1 {{ $profile->gender ? 'selected' : '' }}>Laki Laki</option>
                        </select>
                </dl>
                <dl>
                <dt>Tanggal Lahir</dt>
                <input type="date" class="form-control" name='date_of_birth' value='{{ $profile->date_of_birth }}'>
                </dl>
                <dl>
                <dt>Alamat</dt>
                <input type="text" class="form-control" name='address' value='{{ $profile->address }}'>
                </dl>
                <dl>
                <dt>Nomor Telefon</dt>
                <input type="text" class="form-control" name='phone_number' value='{{ $profile->phone_number }}'>
                </dl>
                <dl>
                <dt>Nomor KTP</dt>
                <input type="text" class="form-control" name='ktp_number' value='{{ $profile->ktp_number }}'>
                </dl>
            </div>
            </div>
            <div class="card mt-4">
            <div class="card-body">
                <dl>
                <dt>Status Pernikahan</dt>
                <select name="marital_status" id="" class="form-control">
                    <option value=0 {{ $profile->married ? "" : "selected" }}>No</option>
                    <option value=1 {{ $profile->married ? "selected" : "" }}>Yes</option>
                </select>
                
                </dl>
                <dl>
                <dt>Latar Belakang Pendidikan</dt>
                <education-background @change='educationsChanged' eb="{{ $profile->education_backgrounds }}"></education-background>
                </dl>
                <dl>
                <dt>Pengalaman Kerja</dt>
                <work-background @change='worksChanged' eb="{{ $profile->work_backgrounds }}"></work-background>
                </dl>
                <dl>
                <dt>Latar Belakang Keluarga</dt>
                <input type="text" name='family_background' value='{{ $profile->family_background }}' class="form-control">
                </dl>
                <dl>
                <dt>Hobi</dt>
                <input type="text" name='hobbies' value='{{ $profile->hobbies }}' class="form-control">
                </dl>
            </div>
            </div>
            <div class="card mt-4">
            <div class="card-body">
                <dl>
                    <dt>Sudah diterima di perusahaan Jepang?</dt>
                    <select name="is_in_company" id="" class="form-control">
                        <option value=1 {{ $profile->is_in_company ? "selected" : "" }}>Yes</option>
                        <option value=0 {{ $profile->is_in_company ? "" : "selected" }}>No</option>
                    </select>
                </dl>
                <dl>
                    <dt>Nama Perusahaan</dt>
                <input type="text" name='company_name' value='{{ $profile->company_name }}' class="form-control">

                </dl>
                <dl>
                    <dt>Tinggi Badan</dt>
                <input type="text" name='body_height' value='{{ $profile->body_height }}' class="form-control">

                </dl>
                <dl>
                    <dt>Berat Badan</dt>
                <input type="text" name='body_weight' value='{{ $profile->body_weight }}' class="form-control">

                </dl>
                <dl>
                    <dt>Golongan Darah</dt>
                    <input type="text" name='blood_type' value='{{ $profile->blood_type }}' class="form-control">

                </dl>
                <dl>
                    <dt>JLPT Score</dt>
                    <input type="text" name='jlpt_score' value='{{ $profile->jlpt_score }}' class="form-control">

                </dl>
                <dl>
                    <dt>EPA Score</dt>
                    <input type="text" name='epa_score' value='{{ $profile->epa_score }}' class="form-control">

                </dl>
                <dl>
                    <dt>NAT Score</dt>
                    <input type="text" name='nat_score' value='{{ $profile->nat_score }}' class="form-control">

                </dl>
                <dl>
                    <dt>Pernah ke Jepang?</dt>
                    <select name="is_ever_to_japan" id="" class="form-control">
                        <option value=1 {{ $profile->is_ever_to_japan ? "selected" : "" }}>Yes</option>
                        <option value=0 {{ $profile->is_ever_to_japan ? "" : "selected" }}>No</option>
                    </select>
                </dl>
                <dl>
                    <dt>Pernah ke luar negeri?</dt>
                    <textarea name="experience_abroad" class="form-control" id="" rows="6">{{ $profile->experience_abroad }}</textarea>
                </dl>
            </div>
            </div>
        </div>
        </div>
        <div class="row pb-4">
            <div class="col-12 text-right">
                <a href="{{ route('panels.index') }}" class="btn btn-outline-primary">Back to User List</a>
                <button class="btn btn-success" type="submit">Simpan</button>
            </div>
        </div>
    </form>
</div>  
@stop

@section('scripts')
    @parent
    <script src="{{ mix('js/panels.js') }}"></script>
@endsection