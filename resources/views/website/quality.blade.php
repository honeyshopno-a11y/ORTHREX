@extends('website.main')
@section('content')

    <!-- InstanceBeginEditable name="slider" -->
    <!-- Breadcrumb Page Section -->
    <section class="section banner-page banner-page-about">
        <div class="hero-container">
            <div class="banner-page__container">
                <div class="banner-page__title">
                    <h3>{{ t('Quality') }}</h3>
                    <p>{{ t('Our Commitment to Excellence and Standards.') }}</p>
                </div>
                <div class="banner-page__intro">
                    <p>{{ t('Explore our quality certifications and standards that reflect our dedication to safe, reliable orthopaedic solutions.') }}
                    </p>
                    <nav class="breadcrumb">
                        <a href="{{ route('home') }}" class="breadcrumb-link">{{ t('Home') }}</a>
                        <i class="breadcrumb-divider fa-solid fa-chevron-right"></i>
                        <a href="{{ route('quality') }}" class="breadcrumb-link">{{ t('Quality') }}</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Page Section -->
    <!-- InstanceEndEditable -->

    <!-- InstanceBeginEditable name="matter" -->
    <!-- Quality Section -->
    <section class="quality-section">
        <div class="quality-container">

            <div class="quality-grid">

                @forelse ($qualities as $item)

                    @if ($item->pdf)
                        <a href="{{ asset($item->pdf) }}" target="_blank" class="quality-card">
                            <div class="quality-card__img-wrap">
                                <img src="{{ asset($item->image) }}" alt="{{ $item->title }}">
                            </div>

                            <h5 class="quality-card__title">{{ $item->title }}</h5>
                        </a>
                    @else
                        <div class="quality-card quality-card--no-link">
                            <div class="quality-card__img-wrap">
                                <img src="{{ asset($item->image) }}" alt="{{ $item->title }}">
                            </div>

                            <h5 class="quality-card__title">{{ $item->title }}</h5>
                        </div>
                    @endif

                @empty

                    <div class="no-data-found">
                        <img src="{{ asset('image/nodatafound.jpg') }}" alt="No Data Found">
                    </div>

                @endforelse

            </div>

        </div>
    </section>
    <!-- Quality Section -->

    <style>
        .quality-section {
            padding: 80px 0;
            background: #f7f9fc;
        }

        .quality-container {
            max-width: 1300px;
            margin: auto;
            padding: 0 20px;
        }

        .quality-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 35px;
        }

        .quality-card {
            background: #fff;
            border-radius: 18px;
            padding: 20px;
            text-align: center;
            text-decoration: none;
            border: 1px solid #e5e7eb;
            box-shadow: 0 8px 25px rgba(0, 0, 0, .08);
            transition: .35s ease;
            overflow: hidden;
            position: relative;
        }

        .quality-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: #c89b2b;
        }

        .quality-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 18px 40px rgba(0, 0, 0, .15);
        }

        .quality-card__img-wrap {
            background: #fafafa;
            border: 1px solid #ececec;
            border-radius: 12px;
            padding: 18px;
            height: 380px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .quality-card__img-wrap img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            transition: .4s;
        }

        .quality-card:hover img {
            transform: scale(1.05);
        }

        .quality-card__title {
            margin-top: 18px;
            font-size: 17px;
            font-weight: 700;
            color: #1d2b4f;
        }

        .quality-card--no-link:hover {
            transform: none;
        }

        @media (max-width: 992px) {
            .quality-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media(max-width:768px) {
            .quality-grid {
                grid-template-columns: 1fr;
            }

            .quality-card__img-wrap {
                height: 320px;
            }
        }

        .no-data-found {
            grid-column: 1 / -1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 50px 20px;
            text-align: center;
        }

        .no-data-found img {
            width: 320px;
            max-width: 100%;
        }

        .no-data-found h4 {
            margin-top: 15px;
            color: #1d2b4f;
            font-size: 22px;
            font-weight: 600;
        }
    </style>
    <!-- InstanceEndEditable -->

@endsection