<footer id="myFooter">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-4 text-center">
                <h5>Get started</h5>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Sign up</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="col-sm-4">
                <form action="/" method="post">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <h5 class="size">Quick Login</h5>
                        </div>
                        
                        <div class="col-xs-12 col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-danger" placeholder="Username">
                                <!-- <div class="form-control-feedback">Sorry, that username is incorrect.</div> -->
                            </div>
                        </div>
                        
                        <div class="col-xs-12 col-sm-12">
                            <div class="form-group">
                                <input type="password" class="form-control form-control-danger" placeholder="Password">
                                <!-- <div class="form-control-feedback">Sorry, that password is incorrect.</div> -->
                            </div>
                        </div>
                        
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <button type="submit" class="btn_small btn btn-success">Login</button>
                            </div>
                        </div>
                    </div>
                    
                    {{ csrf_field() }}
                </form>
            </div>
            <div class="col-xs-12 col-sm-4 info pull-sm-right">
                <h5>Information</h5>
                <p>Simple task list application, which facilitates CRUD operations and User Authentication.</p>
            </div>
        </div>
    </div>
</footer>