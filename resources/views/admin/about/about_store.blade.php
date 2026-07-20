@extends('admin.common')
@section('title', 'About Us')
@section('content')

    <style>
        .store_img_view {
            width: 160px !important;
            height: 110px !important;
            object-fit: cover !important;
            border: 1px solid lightgray !important;
            background-color: white !important;
            border-radius: 8px;
        }

        .icon_img_view {
            width: 60px !important;
            height: 60px !important;
            object-fit: contain !important;
            border: 1px solid lightgray !important;
            background-color: #fff !important;
            border-radius: 8px;
            padding: 6px;
        }

        .form-section {
            border: 1px solid #eaeaea;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 25px;
            background-color: #fbfbfb;
        }

        .form-section-title {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 4px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .form-section-title i {
            font-size: 18px;
            color: #696cff;
        }

        .form-section-subtitle {
            font-size: 13px;
            color: #8a8d93;
            margin-bottom: 18px;
        }

        .mini-card {
            border: 1px solid #e7e7e7;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 15px;
            background: #fff;
        }

        .mini-card-title {
            font-size: 13px;
            font-weight: 700;
            color: #696cff;
            margin-bottom: 12px;
            text-transform: uppercase;
        }
    </style>

    <div class="px-3 px-md-5 flex-grow-1 container-p-y">

        <div
            class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-4 row-gap-4">
            <div class="d-flex flex-column justify-content-center">
                <h4 class="mb-1 ps-1">About Us</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="card mb-6">
                    <div class="card-body">
                        <form class="form" action="{{ route('about-store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            {{-- ================= OUR STORY SECTION ================= --}}
                            <div class="form-section">

                                <div class="form-section-title">
                                    <i class='bx bx-building-house'></i> Our Story
                                </div>
                                <div class="form-section-subtitle">
                                    Building image and story description shown at the top of the About page.
                                </div>

                                <div class="row">

                                    {{-- Story Image --}}
                                    <div class="col-12 col-lg-4 mb-3">
                                        <div class="form-group">
                                            <label class="form-label">Story Image</label>

                                            <input type="file" name="story_image" id="storyImageInput"
                                                class="form-control @error('story_image') is-invalid @enderror"
                                                accept="image/*">

                                            @error('story_image')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror

                                            <div class="mt-3">
                                                <img id="story_image_preview"
                                                    src="@if($about_data && $about_data->story_image){{ asset($about_data->story_image) }}@endif"
                                                    class="store_img_view @if(!$about_data || !$about_data->story_image) d-none @endif"
                                                    alt="Preview">
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Story Description --}}
                                    <div class="col-12 col-lg-8 mb-3">
                                        <div class="form-group">
                                            <label class="form-label">Story Description</label>

                                            <textarea name="story_description" rows="6"
                                                class="form-control @error('story_description') is-invalid @enderror"
                                                placeholder="Enter Story Description">{{ $about_data->story_description ?? old('story_description') }}</textarea>

                                            @error('story_description')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>

                            </div>

                            {{-- ================= STATS SECTION (4 fixed items) ================= --}}
                            <div class="form-section">

                                <div class="form-section-title">
                                    <i class='bx bx-trophy'></i> Stats Row
                                </div>
                                <div class="form-section-subtitle">
                                    Four stat items shown below the story (icon, number, label).
                                </div>

                                <div class="row">
                                    @for ($i = 1; $i <= 4; $i++)
                                        <div class="col-12 col-lg-3 mb-3">
                                            <div class="mini-card">
                                                <div class="mini-card-title">Stat {{ $i }}</div>

                                                <div class="form-group mb-3">
                                                    <label class="form-label">Icon</label>
                                                    <input type="file" name="stat{{ $i }}_icon" class="form-control"
                                                        accept="image/*">
                                                    <div class="mt-2">
                                                        <img src="@if($about_data && $about_data->{'stat' . $i . '_icon'}){{ asset($about_data->{'stat' . $i . '_icon'}) }}@endif"
                                                            class="icon_img_view @if(!$about_data || !$about_data->{'stat' . $i . '_icon'}) d-none @endif">
                                                    </div>
                                                </div>

                                                <div class="form-group mb-3">
                                                    <label class="form-label">Number</label>
                                                    <input type="text" name="stat{{ $i }}_number" class="form-control"
                                                        placeholder="e.g. 20+"
                                                        value="{{ $about_data->{'stat' . $i . '_number'} ?? old('stat' . $i . '_number') }}">
                                                </div>

                                                <div class="form-group">
                                                    <label class="form-label">Label</label>
                                                    <input type="text" name="stat{{ $i }}_label" class="form-control"
                                                        placeholder="e.g. Years of Expertise"
                                                        value="{{ $about_data->{'stat' . $i . '_label'} ?? old('stat' . $i . '_label') }}">
                                                </div>
                                            </div>
                                        </div>
                                    @endfor
                                </div>

                            </div>

                            {{-- ================= MISSION / VISION SECTION ================= --}}
                            <div class="form-section">

                                <div class="form-section-title">
                                    <i class='bx bx-target-lock'></i> Mission &amp; Vision
                                </div>
                                <div class="form-section-subtitle">
                                    Text shown in the "Our Mission" and "Our Vision" blocks.
                                </div>

                                <div class="row">

                                    <div class="col-12 col-lg-6 mb-3">
                                        <div class="form-group">
                                            <label class="form-label">Mission Description</label>
                                            <textarea name="mission_description" rows="5" class="form-control"
                                                placeholder="Enter Mission Description">{{ $about_data->mission_description ?? old('mission_description') }}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-12 col-lg-6 mb-3">
                                        <div class="form-group">
                                            <label class="form-label">Vision Description</label>
                                            <textarea name="vision_description" rows="5" class="form-control"
                                                placeholder="Enter Vision Description">{{ $about_data->vision_description ?? old('vision_description') }}</textarea>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            {{-- ================= OUR JOURNEY SECTION (4 fixed items) ================= --}}
                            <div class="form-section">

                                <div class="form-section-title">
                                    <i class='bx bx-timeline'></i> Our Journey
                                </div>
                                <div class="form-section-subtitle">
                                    Four timeline items (icon + description) shown in the "Our Journey" block.
                                </div>

                                <div class="row">
                                    @for ($i = 1; $i <= 4; $i++)
                                        <div class="col-12 col-lg-6 mb-3">
                                            <div class="mini-card">
                                                <div class="mini-card-title">Journey Step {{ $i }}</div>

                                                <div class="row">
                                                    <div class="col-4">
                                                        <label class="form-label">Icon</label>
                                                        <input type="file" name="journey{{ $i }}_icon" class="form-control"
                                                            accept="image/*">
                                                        <div class="mt-2">
                                                            <img src="@if($about_data && $about_data->{'journey' . $i . '_icon'}){{ asset($about_data->{'journey' . $i . '_icon'}) }}@endif"
                                                                class="icon_img_view @if(!$about_data || !$about_data->{'journey' . $i . '_icon'}) d-none @endif">
                                                        </div>
                                                    </div>
                                                    <div class="col-8">
                                                        <label class="form-label">Description</label>
                                                        <textarea name="journey{{ $i }}_description" rows="4"
                                                            class="form-control"
                                                            placeholder="Enter Journey Step Description">{{ $about_data->{'journey' . $i . '_description'} ?? old('journey' . $i . '_description') }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endfor
                                </div>

                            </div>

                            <button type="submit" class="btn btn-primary mt-2">SUBMIT</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>

        {{-- Success Message --}}
        @session('success')
            <div class="custom-alert" id="custom_alert" role="alert">
                <div>✅ <strong>{{ session('success') }}</strong></div>
                <span class="close-btn" onclick="this.parentElement.style.display='none';">&times;</span>
            </div>
        @endsession

    </div>

    <script>
        // Story image preview
        document.getElementById('storyImageInput').addEventListener('change', function (e) {
            const file = e.target.files[0];
            if (file) {
                const preview = document.getElementById('story_image_preview');
                preview.src = URL.createObjectURL(file);
                preview.classList.remove('d-none');
            }
        });

        // Generic preview for all other icon inputs (stat + journey)
        document.querySelectorAll('input[type="file"]').forEach(function (input) {
            if (input.id === 'storyImageInput') return;

            input.addEventListener('change', function (e) {
                const file = e.target.files[0];
                if (!file) return;

                const img = input.closest('.form-group, .col-4').querySelector('img');
                if (img) {
                    img.src = URL.createObjectURL(file);
                    img.classList.remove('d-none');
                }
            });
        });
    </script>
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