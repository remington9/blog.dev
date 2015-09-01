<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
    <link rel="stylesheet" href="/css/bootstrap-image-gallery.min.css">
<title>My Ad Lister</title>
</head>
<body>
    <div class="row">
        <h1 class="heading col-md-8 col-md-offset-2">Image Gallery of the Adlister Project</h1>
    </div>
    <div class="row">
        <p class="subhead col-md-8 col-md-offset-2">
            I'm using a photo gallery here because the adlister project wasnt built with all of the needed security features to go live on the web without being compramised
        </p>
    </div>
    <!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
    <div id="blueimp-gallery" class="blueimp-gallery">
        <!-- The container for the modal slides -->
        <div class="slides"></div>
        <!-- Controls for the borderless lightbox -->
        <h3 class="title"></h3>
        <a class="prev">‹</a>
        <a class="next">›</a>
        <a class="close">×</a>
        <a class="play-pause"></a>
        <ol class="indicator"></ol>
        <!-- The modal dialog, which will be used to wrap the lightbox content -->
        <div class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" aria-hidden="true">&times;</button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body next"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left prev">
                            <i class="glyphicon glyphicon-chevron-left"></i>
                            Previous
                        </button>
                        <button type="button" class="btn btn-primary next">
                            Next
                            <i class="glyphicon glyphicon-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr />
    <div id="links" class="col-md-11 col-md-offset-1">
        <a href="/img/adlister_welcome.png" title="Welcome Page" data-gallery>
            <div class="thumbnail"><img src="/img/adlister_welcome.png" class="img-responsive" alt="Welcome Page"></div>
        </a>
        <a href="/img/adlister_category.png" title="adlister_category" data-gallery>
            <div class="thumbnail"><img src="/img/adlister_category.png" alt="adlister_category"></div>
        </a>
        <a href="/img/adlister_category2.png" title="adlister_category" data-gallery>
            <div class="thumbnail"><img src="/img/adlister_category2.png" alt="adlister_category"></div>
        </a>
        <a href="/img/adlister_create.png" title="adlister_create" data-gallery>
            <div class="thumbnail"><img src="/img/adlister_create.png" alt="adlister_create"></div>
        </a>
        <a href="/img/adlister_edit.png" title="adlister_edit" data-gallery>
            <div class="thumbnail"><img src="/img/adlister_edit.png" alt="adlister_edit"></div>
        </a>
        <a href="/img/adlister_index.png" title="adlister_index" data-gallery>
            <div class="thumbnail"><img src="/img/adlister_index.png" alt="adlister_index"></div>
        </a>
        <a href="/img/adlister_myaccount.png" title="adlister_myaccount" data-gallery>
            <div class="thumbnail"><img src="/img/adlister_myaccount.png" alt="adlister_myaccount"></div>
        </a>
        <a href="/img/adlister_single_show.png" title="adlister_single_show" data-gallery>
            <div class="thumbnail"><img src="/img/adlister_single_show.png" alt="adlister_single_show"></div>
        </a>
    </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
    <script src="js/bootstrap-image-gallery.min.js"></script>

</body>
</html>