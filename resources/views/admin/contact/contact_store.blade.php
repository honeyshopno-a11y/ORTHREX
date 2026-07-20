@extends('admin.common')
@section('title', isset($contact_data->id) ? 'Edit Contact Details' : 'Add Contact Details')
@section('content')


    <div class="px-3 px-md-5 flex-grow-1 container-p-y">

        <h4 class="mb-4">@if ($contact_data != '') Edit @else Add @endif Contact Details</h4>

        <form class="form" action="{{ route('contact-store') }}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $contact_data->id ?? '' }}">

            <div class="card p-4">
                <h5 class="m-0 p-0">Contact Section Details :</h5>
                <hr style="border-bottom: 1px solid lightgray;">

                <div class="row mt-2">

                    <div class="col-12 col-md-6 mb-3">
                        <label class="form-label">Contact Number </label>
                        <textarea name="number" id="number" class="form-control @error('number') is-invalid @enderror"
                            rows="1" placeholder="Enter Mobile Number ">{!! optional($contact_data)->number !!}</textarea>
                        @error('number')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-12 col-md-6 mb-3">
                        <label class="form-label">WhatsApp Number </label>
                        <textarea name="whatsapp_number" id="whatsapp_number"
                            class="form-control @error('whatsapp_number') is-invalid @enderror" rows="1"
                            placeholder="Enter WhatsApp Number">{!! optional($contact_data)->whatsapp_number !!}</textarea>
                        @error('whatsapp_number')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-12 mb-3">
                        <label class="form-label">Email</label>
                        <textarea name="email" id="email" class="form-control @error('email') is-invalid @enderror" rows="1"
                            placeholder="Enter Email">{!! optional($contact_data)->email !!}</textarea>
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>


                    <div class="col-12 mb-3">
                        <label class="form-label">Address</label>
                        {{-- id="address" add karyo --}}
                        <textarea name="main_building" id="main_building"
                            class="form-control @error('main_building') is-invalid @enderror"
                            placeholder="Enter Main Building Address">{!! optional($contact_data)->main_building !!}</textarea>

                        @error('main_building')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- <div class="col-12 mb-3">
                        <label class="form-label">Old Building Address</label>

                        <textarea name="old_building" id="old_building"
                            class="form-control @error('old_building') is-invalid @enderror"
                            placeholder="Enter Old Building Address">{!! optional($contact_data)->old_building !!}</textarea>

                        @error('old_building')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div> --}}

                </div>
                <div class="col-12 mt-2">
                    <button type="submit" class="btn btn-primary mt-4">SUBMIT</button>
                </div>
            </div>


        </form>
    </div>

    @session('success')
        <div class="custom-alert" id="custom_alert" role="alert">
            <div>
                ✅ <strong>{{ session('success') }}</strong><br>
            </div>
            <span class="close-btn" onclick="this.parentElement.style.display='none';">&times;</span>
        </div>
    @endsession

    <script>
        setTimeout(function () {
            const alert = document.getElementById('custom_alert');
            if (alert) {
                alert.style.transition = 'opacity 0.5s ease';
                alert.style.opacity = '0';
                setTimeout(function () {
                    alert.style.display = 'none';
                }, 500);
            }
        }, 2000);
    </script>


@endsection