<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
    body {
        background: #defede;
    }
    .page-wrap {
        min-height: 100vh;
    }
    .btn{
        background-color: #0b2e13;
        color: white;
    }

</style>
<div class="page-wrap d-flex flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <span class="display-1 d-block font-weight-bold">404</span>
                <h4>The page you are looking for was not found Or only reserved for admin</h4>
                <a href="{{ route('view.home') }}" class="btn" style="text-decoration: none;">Back to Home</a>
            </div>
        </div>
    </div>
</div>
