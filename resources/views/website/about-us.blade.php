@extends('website.main')
@section('content')


	<!-- InstanceBeginEditable name="slider" -->
	<!-- Breadcrumb Page Section -->
	<section class="section banner-page banner-page-about">
		<div class="hero-container">
			<div class="banner-page__container">
				<div class="banner-page__title">
					<h3>{{ t('About Orthrex Life Care') }}</h3>
					<p>{{ t('Engineering Better Outcomes. Empowering Lives.') }}</p>
				</div>
				<div class="banner-page__intro">
					<p>{{ t('Orthrex Life Care is a trusted leader in orthopaedic innovation, delivering high-quality implant solutions that help surgeons restore mobility and improve patient outcomes.') }}
					</p>
					<nav class="breadcrumb">
						<a href="{{ route('home') }}" class="breadcrumb-link">{{ t('Home') }}</a>
						<i class="breadcrumb-divider fa-solid fa-chevron-right"></i>
						<a href="{{ route('about-us') }}" class="breadcrumb-link">{{ t('About Us') }}</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- Breadcrumb Page Section -->
	<!-- InstanceEndEditable -->

	<!-- InstanceBeginEditable name="matter" -->
	<!-- About Us Section -->
	<section class="section">
		<div class="hero-container">
			<div class="about__container">
				<div class="about__intro">
					<div class="row">
						<div class="col-md-5 animation-box anim-normal anim-delay-sm" data-animation="fade-right">
							<img src="{{ $about_data && $about_data->story_image ? asset($about_data->story_image) : asset('assets/images/about-us/orthrex-factory.jpg') }}"
								class="img-fluid" alt="{{ t('Orthrex Life Care') }}">
						</div>
						<div class="col-md-7">
							<div class="about__content">
								<div class="case-studies__heading">
									<div class="sub-heading-container text-start">{{ t('OUR STORY') }}</div>
									<div class="sub-heading-divider-product"></div>
								</div>
								<p>{{ $about_data->story_description ?? t('Founded with a vision to redefine orthopedic care. Orthrex Life Care combines innovation, precision, and a deep commitment to quality. Our implants are engineered to meet international standards and trusted by surgeons in over 20+ countries.') }}
								</p>

								<div class="about-work-process__grid pt-5">
									@for ($i = 1; $i <= 4; $i++)
										@php
											$icon = $about_data->{'stat' . $i . '_icon'} ?? null;
											$number = $about_data->{'stat' . $i . '_number'} ?? null;
											$label = $about_data->{'stat' . $i . '_label'} ?? null;
										@endphp
										@if($number || $label)
											<div class="about-work-process__item animation-box anim-fast anim-delay-none"
												data-animation="fade-down">
												<div class="about-work-process__step-header">
													<img src="{{ $icon ? asset($icon) : asset('assets/images/icons/expertise.svg') }}"
														alt="{{ $label }}">
												</div>
												<h4>{{ $number }}</h4>
												<h5>{{ $label }}</h5>
											</div>
										@endif
									@endfor
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- About Us Section -->

	<!-- Mission-Vision Section -->
	<section class="mission-values">
		<div class="hero-container">
			<div class="row">
				<div class="col-md-7">
					<div class="case-studies__heading pb-5">
						<div class="sub-heading-container text-start">{{ t('OUR MISSION') }}</div>
						<div class="sub-heading-divider-mission"></div>
						<p>{{ $about_data->mission_description ?? t('To advance orthopaedic care through innovation, precision engineering, and uncompromising quality by delivering reliable implant solutions that empower surgeons and improve patient outcomes worldwide.') }}
						</p>
					</div>

					<div class="case-studies__heading">
						<div class="sub-heading-container text-start">{{ t('OUR VISION') }}</div>
						<div class="sub-heading-divider-vision"></div>
						<p>{{ $about_data->vision_description ?? t('To be a globally trusted leader in orthopaedic healthcare by delivering innovative, precision-engineered implant solutions that enhance mobility, improve lives, and set new standards of excellence in patient care.') }}
						</p>
					</div>
				</div>

				<div class="col-md-5">
					<div class="values-box">
						<div class="case-studies__heading">
							<div class="sub-heading-container text-start">{{ t('OUR JOURNEY') }}</div>
							<div class="sub-heading-divider-journey"></div>
						</div>

						@for ($i = 1; $i <= 4; $i++)
							@php
								$jIcon = $about_data->{'journey' . $i . '_icon'} ?? null;
								$jDesc = $about_data->{'journey' . $i . '_description'} ?? null;
							@endphp
							@if($jDesc)
								<div class="value-item">
									<img src="{{ $jIcon ? asset($jIcon) : asset('assets/images/icons/flag.svg') }}"
										alt="{{ Str::limit($jDesc, 30) }}">
									<div>
										<p>{{ $jDesc }}</p>
									</div>
								</div>
							@endif
						@endfor
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Mission-Vision Section -->
	<!-- InstanceEndEditable -->



@endsection