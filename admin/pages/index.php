
<div class="row box g-2 ">
    
    <a href="?page=users" class="col py-3">
        <div class="icons">
            <i class="fa fa-users fs-1"></i>
        </div>
        <div class="text-box ">
            <h1 class="fs-3">Users</h1>
            <span class="fs-1"><?php echo DataBaseQuery::getCountQuery('users','id','WHERE is_admin = 0'); ?></span>
        </div> 
    </a>
    
    <a href="" class="col mx-2 py-3">
        <div class="icons">
            <i class="fa-solid fa-newspaper fs-1"></i>
        </div>
        <div class="text-box">
            <h1 class="fs-3">News</h1>
            <span class="fs-1">0</span>
        </div> 
    </a>
    <a href="" class="col mx-2 py-3">
        <div class="icons ">
            <i class="fa-solid fa-hotel fs-1"></i>
        </div>
        <div class="text-box">
            <h1 class="fs-3">Hotels</h1>
            <span class="fs-1">0</span>
        </div> 
    </a>
    <a href="" class="col py-3">
        <div class="icons">
            <i class="fa-solid fa-plane-departure fs-1 "></i>
        </div>
        <div class="text-box">
            <h1 class="fs-3">Airlines</h1>
            <span class="fs-1">0</span>
        </div> 
    </a>

</div>

<div class="row py-5"></div>

<div class="row gy-3">
    <div class="col-lg-4 col-md-6">
        <div class="card">
            <h5 class="card-header">Featured</h5>
            <div class="card-body">
      
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6">
        <div class="card">
            <h5 class="card-header">Featured</h5>
            <div class="card-body">

            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <h5 class="card-header">Featured</h5>
            <div class="card-body">
        
            </div>
        </div>
    </div>    

</div>
