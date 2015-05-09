<html>
    <head>
        <title>Facebook</title>
        <link rel="stylesheet" href="../../../../Simon/public/libs/bootstrap/css/bootstrap.min.css">
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        
        <script src="../../../../Simon/public/libs/bootstrap/js/bootstrap.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
        {HTML::script('/libs/typeahead/typeahead.min.js')}
        
        <script>
            var baseUrl = '{url('/')}';
        </script>
        
        {HTML::script('assets/js/app2.js')}
    </head>
    <body>
        <div class="container">
            {capture assign='layouts'}../layouts/{$layout}.tpl{/capture}
            {include file=$layouts}
        </div>
    </body>
</html>
