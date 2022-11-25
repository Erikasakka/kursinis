<?php

// Page logic, checks before loading page
$hello = 'Hello world, ' . date('Y-m-d H:i:s');

// Start page with head and body HTML tags
require_once './templates/header.php'
?>


<!-- HTML + PHP LOGIC -->
<div class="container">
    <div class="col">
        <?php echo $hello; ?>
    </div>

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow ">
      <h3 class="my-0 mr-md-auto font-weight-normal"><b>Music Town</b></h3>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="#">Naujienos</a>
        <a class="p-2 text-dark" href="#">Top 10</a>
        <a class="p-2 text-dark" href="#">Muzika</a>
        <a class="p-2 text-dark" href="#">Pricing</a>
      </nav>
      <form class="form-inline mt-2 mt-md-0 ">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" href="#">Search</button>
          </form>
          &ensp;
      <a class="btn btn-outline-primary " href="#" >Sign up</a>
    </div>


    <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
          <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.</p>
          <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
        </div>
      </div>

      

    <div class="col-md-3">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap" src="pictures/slider1.jpg">
                <div class="card-body">
                <h3 class="mb-0">
                <a class="text-dark" href="#">Featured post</a>
              </h3>
              <div class="mb-1 text-muted">Nov 12</div>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                  <a href="#">Continue reading</a>
                  </div>
                </div>
              </div>
            </div>
</div>
     

<?php

// End page with closing tags and JS 
require_once './templates/footer.php'

?>