@extends('website.layouts.website')
@section('content')
<html lang="en" dir="ltr"
      prefix="content: http://purl.org/rss/1.0/modules/content/ dc: http://purl.org/dc/terms/ foaf: http://xmlns.com/foaf/0.1/ og: http://ogp.me/ns# rdfs: http://www.w3.org/2000/01/rdf-schema# sioc: http://rdfs.org/sioc/ns# sioct: http://rdfs.org/sioc/types# skos: http://www.w3.org/2004/02/skos/core# xsd: http://www.w3.org/2001/XMLSchema#">
<head>
    <link rel="profile" href="http://www.w3.org/1999/xhtml/vocab"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Jquery Image Maker Plugin Examples</title>
    <link rel="stylesheet" type="text/css" href="{{asset('image-maker/imageMaker.min.css')}}">


    <script src="{{asset('image-maker/imageMaker.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('#clothe-tshirt-maker').imageMaker({
                merge_images: [{url: './assets/design/just_do_it.png', title: 'Just Do it'},
                    {url: './assets/design/starbucks.png', title: 'Starbucks'},
                    {url: './assets/design/kiss.png', title: 'Kiss'},
                    {url: './assets/design/donkey.png', title: 'Donkey 1'},
                    {url: './assets/design/donkey2.png', title: 'Donkey 2'},
                ],
                templates: [
                    {url: '{{asset('image-maker/images/t-shirt-white.png')}}', title: 'T-shirt White'},
                    {url: '{{asset('image-maker/images/t-shirt-black.png')}}', title: 'T-shirt black'},],
                text_boxes_count: 0
            });
        });
    </script>
</head>
<body>
<div id="clothe-tshirt-maker"></div>

<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();

</script>
</body>
</html>
@endsection
