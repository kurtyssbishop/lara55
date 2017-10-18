<div class="section-page-error">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <!--S U C C E S S -->
                        @if(Session::has('flash_message'))
                            <div class="alert alert-success">
                                {{ Session::get('flash_message') }}
                            </div>
                        @endif
                    </div>
                    <div class="col-sm-12">
                        
                        <!--E R R O R-->
                        @if($errors->any())
                        <ul class="list-group" id="errors">
                            <h2 style="background-color:red;
                                color:white;
                                font-weight:bold;
                                padding:25px"
                                >
                                FORM ERRORS
                            </h2>
                            @foreach ($errors->all() as $error)
                            <li class="list-group-item">{{ $error }}</li>
                            @endforeach
                        </ul>
                        @endif 
                        
                    </div>
                </div>
            </div>
        </div><!--END ERROR SECTION-->
		