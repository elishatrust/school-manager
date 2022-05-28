
@include('header')
@include('navbar')

<div class="container py-5">
    <div class="row">
        <section class="col-md-8 p-2">
            <img src="/image/education.jpg" class="card-img-top" alt="">
        </section>
        <section class="col-md-4 p-2">
            <div class="card">
                <div class="card-body">
                    <h5 class="fs-5 py-3">Login</h5>
                    <form action="{{url('/')}}" method="POST">
                        @csrf
                        <div class="form-group mb-2">
                            <label for="firstName">Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Enter your username">
                        </div>
                        <div class="form-group mb-2">
                            <label for="secondName">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Enter your password">
                        </div>
                        <div class=" mb-2">
                            <input type="submit" value="Login" class="btn btn-info w-100">
                        </div>
                    </form>

                </div>
              </div>

        </section>
    </div>
</div>

@include('footer')
