<div class="container">
    <div class="row">
        <div class="col-lg-4 mx-auto mt-5">
            <div class="mt-5">
                <div class="d-flex justfiy-center">
                    <i class="fa fa-user fa-xl "></i>                
                </div>
                <h2 class="h4">Login </h2>
                <form class="mt-5 " action="{{route('login')}}" method="POST">
                    <div class="form-group ">
                        <input class="form-control form-control-lg" autocomplete="true" type="email" name="email"  placeholder=" Email">
                    </div>
                    <div class="form-group mt-4">
                        <input class="form-control form-control-lg" type="password" name="password" placeholder="Password">
                    </div>
                    <div class="form-group mt-4">
                        <input type="submit" value="Login" class="btn btn-primary btn-lg" >
                    </div>
                    @csrf
                </form>
            </div>  
        </div>
    </div>
</div>