@extends('panels::layouts.admin')

@section('content')
<div class="content-wrapper">
    <div class="container">
        <div class="row">
        <div class="col-12">    
            <div class="card mt-4">
                <div class="card-body">
                    <dl>
                        <dt>Foto</dt>
                    </dl>
                    @if ($profile->photo)
                    <div style="max-width:250px;">
                        <img class="img-fluid" src="/avatars/{{$profile->photo}}" alt="">
                    </div>
                    @endif
                    
                </div>
            </div>        
            <div class="card mt-4">
                <div class="card-body">
                    <dl>
                        <dt>Nama Depan</dt>
                        <dd>{{ $profile->first_name }}</dd>
                    </dl>
                    <dl>
                        <dt>Nama Belakang</dt>
                        <dd>{{ $profile->last_name }}</dd>
                    </dl>
                </div>
            </div>
            <div class="card mt-4">
            <div class="card-body">
                <dl>
                <dt>Email</dt>
                <dd>{{ $profile->user->email }}</dd>
                </dl>
                <dl>
                <dt>Nama</dt>
                <dd>{{ $profile->user->name }}</dd>
                </dl>
                <dl>
                <dt>Tanggal Lahir</dt>
                <dd>{{ $profile->date_of_birth }}</dd>
                </dl>
                <dl>
                <dt>Alamat</dt>
                <dd>{{ $profile->address }}</dd>
                </dl>
                <dl>
                <dt>Nomor Telefon</dt>
                <dd>{{ $profile->phone_number }}</dd>
                </dl>
                <dl>
                <dt>Nomor KTP</dt>
                <dd>{{ $profile->ktp_number }}</dd>
                </dl>
            </div>
            </div>
            <div class="card mt-4">
            <div class="card-body">
                <dl>
                <dt>Status Pernikahan</dt>
                <dd>{{ $profile->married ? "Yes" : "No" }}</dd>
                </dl>
                <dl>
                <dt>Latar Belakang Pendidikan</dt>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Tingkat</th>
                                <th>Mulai</th>
                                <th>Selesai</th>
                                <th>Nama Institusi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($profile->education_backgrounds as $key => $edu)
                            <tr>
                                <td>{{ $edu->level }}</td>
                                <td>{{ $edu->start }}</td>
                                <td>{{ $edu->end }}</td>
                                <td>{{ $edu->name }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </dl>
                <dl>
                <dt>Pengalaman Kerja</dt>
                <table class="table">
                        <thead>
                            <tr>
                                <th>Nama Perusahaan</th>
                                <th>Mulai</th>
                                <th>Selesai</th>
                                <th>Bidang Kerja</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($profile->work_backgrounds as $key => $edu)
                            <tr>
                                <td>{{ $edu->company }}</td>
                                <td>{{ $edu->start }}</td>
                                <td>{{ $edu->end }}</td>
                                <td>{{ $edu->work_type }}</td>
                                <td>{{ $edu->description }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                </table>
                </dl>
                <dl>
                <dt>Latar Belakang Keluarga</dt>
                <dd>{{ $profile->family_background }}</dd>
                </dl>
                <dl>
                <dt>Hobi</dt>
                <dd>{{ $profile->hobbies }}</dd>
                </dl>
            </div>
            </div>
            <div class="card mt-4">
            <div class="card-body">
                <dl>
                    <dt>Terdaftar di Perusahaan Jepang ?</dt>
                    <dd>{{ $profile->is_in_company ? "Yes" : "No" }}</dd>
                </dl>
                <dl>
                    <dt>Nama Perusahaan</dt>
                    <dd>{{ $profile->company_name }}</dd>
                </dl>
                <dl>
                    <dt>Tinggi Badan</dt>
                    <dd>{{ $profile->body_height }}</dd>
                </dl>
                <dl>
                    <dt>Berat Badan</dt>
                    <dd>{{ $profile->body_weight }}</dd>
                </dl>
                <dl>
                    <dt>Golongan Darah</dt>
                    <dd>{{ $profile->blood_type }}</dd>
                </dl>
                <dl>
                    <dt>JLPT Score</dt>
                    <dd>{{ $profile->jlpt_score }}</dd>
                </dl>
                <dl>
                    <dt>EPA Score</dt>
                    <dd>{{ $profile->epa_score }}</dd>
                </dl>
                <dl>
                    <dt>NAT Score</dt>
                    <dd>{{ $profile->nat_score }}</dd>
                </dl>
                <dl>
                    <dt>Pernah pergi ke Jepang?</dt>
                    <dd>{{ $profile->is_ever_to_japan ? "Yes" : "No"}}</dd>
                </dl>
                <dl>
                    <dt>Pengalaman ke luar negeri?</dt>
                    <dd>{{ $profile->experience_abroad }}</dd>
                </dl>
            </div>
            </div>
        </div>
        </div>
        <div class="row pb-4">
            <div class="col-12 text-right">
                <a href="{{ route('panels.index') }}" class="btn btn-outline-primary">Back to User List</a>
            </div>
        </div>
    </div>
</div>  
@stop
