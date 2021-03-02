@extends('layouts.client')
@section('title') MVP @endsection
@section('content')
<div class="head">
    <h2>I am applying as:</h2>
    <p>To apply click on the appropriate Icon</p>
</div>

<div class="jobs">
    <div class="job">
        <img src="{{asset('assets/images/presenter.png')}}" alt="">
        <h3>Radio Presenter</h3>
        <ol type="1">
            <li>Prepare a 1 minute talk up video for the NRG Play App for NRG Audience.</li>
            <li>Post your video on your Instagram, Facebook & Twitter accounts using the 
                hashtag #NRGeticMVPs.</li>
            <li>Copy link of your video as posted on Instagram/Facebook/Twitter 
                and submit on the next page.</li>
            <li>Encourage as many people as possible to like, comment and 
                follow your progress on our social media platforms @nrgtv on YouTube, 
                @nrgradiokenya Facebook and @nrgradiokenya on Twitter/Instagram.</li>
        </ol>

        <a href="/application" class="btn-next">Next <i class="fas fa-arrow-right"></i> </a>
    </div>
    <div class="job">
        <img src="{{asset('assets/images/podcast.png')}}" alt="">
        <h3>Podcaster</h3>
        <ol type="1">
            <li>Create a 5 minute native and original podcast in any area of interest</li>
            <li>Post your podcast on your Instagram, Facebook & Twitter accounts 
                using the hashtag #NRGeticMVPs.</li>
            <li>Copy link of your video as posted on Instagram/Facebook/Twitter 
                and submit on the next page.</li>
            <li>Encourage as many people as possible to like, comment and follow your 
                progress on our social media platforms @nrgtv on YouTube, @nrgradiokenya 
                Facebook and @nrgradiokenya on Twitter/Instagram.</li>
        </ol>

        <a href="/application" class="btn-next">Next <i class="fas fa-arrow-right"></i> </a>
    </div>
    <div class="job">
        <img src="{{asset('assets/images/content.png')}}" alt="">
        <h3>Content Creator</h3>
        <ol type="1">
            <li>Create a 1 minute native Video talking about NRG Play App for Choice Audience.</li>
            <li>Post your video on your Instagram, Facebook & Twitter accounts using the hashtag 
                #NRGeticMVPsicMVPs.</li>
            <li>Copy link of your video as posted on Instagram/Facebook/Twitter and submit 
                on the next page.</li>
            <li>Encourage as many people as possible to like, comment and follow your 
                progress on our social media platforms @nrgtv on YouTube, @nrgradiokenya 
                Facebook and @nrgradiokenya on Twitter/Instagram.</li>
        </ol>

        <a href="/application" class="btn-next">Next <i class="fas fa-arrow-right"></i> </a>
    </div>
    <div class="job">
        <img src="{{asset('assets/images/dj.png')}}" alt="">
        <h3>Radio DJ</h3>
        <ol type="1">
            <li>Prepare a 3-minute Hot Mix for NRG Audience</li>
            <li>Post your video on your Instagram, Facebook & Twitter accounts using 
                the hashtag #NRGeticMVPs.</li>
            <li> Copy link of your video as posted on Instagram/Facebook/Twitter 
                and submit on the next page.</li>
            <li>Encourage as many people as possible to like, comment and follow your 
                progress on our social media platforms @nrgtv on YouTube, @nrgradiokenya 
                Facebook and @nrgradiokenya on Twitter/Instagram.</li>
        </ol>

        <a href="/application" class="btn-next">Next <i class="fas fa-arrow-right"></i> </a>
    </div>
</div>

<!-- Special Categories -->
<div class="categories">
    <div class="heading">
        <h2>Special Categories</h2>
    </div>

    <div class="jobs">
        <div class="job">
            <img src="{{asset('assets/images/b-writer.png') }}" alt="">
            <h3>Creative Business<br> Proposal Writer</h3>
            <p>Work on a creative proposal</p>
        <ol type="1">
            <li>seeking sponsorship for NRG Wave event from a company of your choice</li>
            <li>seeking a company of choice to advertise on NRG Radio</li>
            <li> Copy link of your video as posted on Instagram/Facebook/Twitter 
                and submit on the next page.</li>
        </ol>
        <p>NB:- We’re looking for the most creative, well presented, well written, 
            interesting and disruptive proposal that can have companies sponsor NRG Turn up</p>
        <p>Upload your work on the next page.</p>
        <a href="/application" class="btn-next">Next <i class="fas fa-arrow-right"></i> </a>
        </div>
        <div class="job">
            <img src="{{asset('assets/images/designer.png')}}" alt="">
        <h3>Creative Designers</h3>
        <p>Work on creative posters for:</p>
        <ol type="1">
            <li>NRG Play App</li>
            <li>A proposal template for NRG Radio</li>
        </ol>
        <p>Upload your work on the next page</p>
        <a href="/application" class="btn-next">Next <i class="fas fa-arrow-right"></i> </a>
        </div>
        <div class="job">
            <img src="{{asset('assets/images/social-media.png')}}" alt="">
        <h3>Social Media Managers</h3>
        <p>Work on a content schedule/calendar including actual posts and captions for</p>
        <ol type="1">
            <li>A campaign pushing NRG Play App for a week</li>
            <li>A campaign pushing NRG Turn up for a week</li>
        </ol>
        <p>Upload your work on the next page</p>
        <a href="/application" class="btn-next">Next <i class="fas fa-arrow-right"></i> </a>
        </div>
    </div>

    <!-- Bottom -->
    <div class="bottom-categories">
        <div class="jobs">
            <div class="job">
                <div class="job-header">
                    <img src="{{asset('assets/images/sales.png') }}" alt="">
                    <h3>Sales Executives</h3>
                </div>
                
            <ol type="1">
                <li>Work on a proposal selling NRG Radio to a potential advertiser of choice</li>
                <li>Work on a proposal selling NRG Wave to a potential sponsor of choice</li>
            </ol>
            <p>We’re looking for the most creative, well presented, well written, 
                interesting and disruptive proposal, confidence and presentation skills 
                that can have companies buy into your idea to advertise with NRG or sponsor 
                NRG Wave Event</p>
                <p>NB:- We’re looking for the most creative, well presented, 
                    well written, interesting and disruptive proposal, confidence 
                    and presentation skills that can have companies buy into your idea 
                    to advertise with NRG or sponsor NRG Wave Event</p>
                    <p>Upload your work on the next page.</p>
            <a href="/application" class="btn-next">Next <i class="fas fa-arrow-right"></i> </a>
            </div>
            <div class="job">
                <div class="job-header">
                    <img src="{{asset('assets/images/dev.png') }}" alt="">
                    <h3>Web Developers</h3>
                </div>
                
            <ol type="1">
                <li>Work on a replica web platform as nrg.radio/mvp 
                    NB: One should be able to submit a profile picture, personal details and file/video</li>
                <li>Work on a dashboard to view the submissions from 1 above 
                    NB: We’re looking for the most creative, well presented platform </li>
            </ol>
            <p>Upload your work on the next page</p>
            <a href="/application" class="btn-next">Next <i class="fas fa-arrow-right"></i> </a>
            </div>
        </div>
    </div>
</div>

<div class="go-back">
    <a href="/" class="btn-back">Go Back</a>
</div>
@endsection