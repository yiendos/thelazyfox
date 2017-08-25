<!DOCTYPE html>
<html>
<head>
    <title>The Lazy Fox</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Oswald:bold,light,regular">
    <!-- Bootstrap -->
    <link href="/css/default.css" rel="stylesheet" media="screen">
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-53ee3bba766da004"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/js/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
    <script src="/js/jquery.validate.min.js"></script>
</head>
<body>
<div id="home">
    <nav class="navbar navbar-wrapper navbar-default" role="navigation">
        <div class="container">
            <div>
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/"><img src="/images/branding/lazyfox-logo-2.png"/></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="/">Home</a></li>
                        <li class="divider-vertical"></li>
                        <li><a href="/illustration/"> Illustration </a></li>
                        <li class="divider-vertical"></li>
                        <li><a href="/design/"> Design </a></li>
                        <li class="divider-vertical"></li>
                        <li><a href="/justforfun/"> Just for fun </a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="divider-vertical"></li>
                        <li class="active"><a href="/contact/">Contact</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3>Thanks for saying hello</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <?php
                if($_POST['name']):
                    $to = 'hello@thelazyfox.co.uk' ;
                    $subject = 'Contact from the lazyfox contact form';
                    $realname = $_POST['name'] ;
                    $theirmail = $_POST['email'] ;
                    $message = str_replace("'","",htmlspecialchars($_POST['message'])) ;
                    $headers = 	'From: Web contact form <hello@thelazyfox.co.uk>' . "\r\n" .
                        'To: <hello@thelazyfox.co.uk>,'.$theirmail."\r\n".
                        'Reply-To: hello@thelazyfox.co.uk' . "\r\n";

                    if( mail($to, $subject, $message."\r\n From:".$realname, $headers)): ?>

                        <h4>Many thanks email sent</h4>
                        <p>and a copy sent to your email account</p>
                        <?php echo $theirmail ?>
                    <?php else: ?>
                        <h4>Sorry email not sent...</h4>
                        <p>please could you manually email your message to <a href="mailto:hello@thelazyfox.co.uk?subject=<?php echo $subject ?>&body=<?php echo $message ?>">hello@thelazyfox.co.uk</a></p>
                        <p>Please note: your message hasn't been lost, by clicking the email address above will open your email client, and paste the message into a new email for you.</p>";
                    <?php endif ?>
                <?php else: ?>
                        <p>no information received</p>
                <?php endif ?>
            </div>
        <div class="row">
            <div class="col-sm-12"><img class="img-responsive" src="/images/just-for-fun/contact-image.png"></div>
        </div>
        </div>
    </div>
</div>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="copyright">
                    <span class="span-copyright">
                        Copyright TheLazyFox <span class="update-date">2014</span>. All rights reserved
                    </span>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/js/bootstrap.min.js"></script>
</body>
</html>