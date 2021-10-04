@extends('main')
@section('main-ui')

    <main>
        <div class="container py-4">
            <div class="p-5 mb-4 bg-dark rounded-3">
                <div class="container-fluid" style="background-color: #212529; text-align: center">
                    <h1 class="display-5 fw-bold animate__animated animate__tada">Welcome to My Journey Experience</h1>
                    <p class="text-md-center" style="text-align: center">
                        So this is my
                        experience from my college until now
                        and I will put my CV at the
                        bottom. You can click the button to download or see my CV.</p>
                    <img src="image/panah.png" alt="" style="width: 30px; height: 20px">
                    <form method="get">
                        <a class="btn btn-primary btn-lg" type="submit" href="document/Resume.pdf" target="_blank">Download /
                            See
                            CV</a>
                    </form>
                </div>
            </div>

            <div class="row align-items-md-stretch">
                <div class="col-md-6">
                    <div class="h-90 p-4 text-white bg-dark rounded-3">
                        <h2 style="text-align: left">Senja Solution - <br> Probation</h2>
                        <p style="text-align: left; font-size: 12px">From 09/2021- Current</p>
                        <p style="text-align: left">In PT Senja Solution I learned a lot about web development, what I
                            learned were HTML Basic, CSS Basic, PHP Basic, Javascript Basic and Laravel Framework.</p>
                        <a class="btn btn-outline-light" href="https://www.senja.co.uk/" target="_blank">Check it out!</a>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="h-90 p-4 bg-light text-black border rounded-3">
                        <h4 style="text-align: right">Tokopedia Seller -<br>Toko Kiong -<br>Owner</h4>
                        <p style="text-align: right; font-size: 12px">From 03/2021 - Current</p>
                        <p style="text-align: right">Manage all needs in Tokopedia, such as managing stock of goods,
                            replying to customer chats,
                            analyzing
                            installed ads & enhance branding from Kiong Store</p>
                        <a class="btn btn-outline-secondary" href="https://www.tokopedia.com/tokokiong-bdg"
                            target="_blank">Check
                            it out!</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
