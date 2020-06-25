

    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>
    <style>
        .progress-bar {
            position: relative;
            width: 200%;
            height: 40px;
            max-width: 200px;
            background: gray;
        }

        .bar {
            position: absolute;
            top: 0;
            left: 0;
            width: 23%;
            height: 100%;
            background: blue;
        }

        .marker-list {
            list-style: none;
            margin: 0;
            padding: 0;
            position: relative;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
        }

        .marker-list .marker {
            position: absolute;
            top: 0;
            width: 2px;
            height: 100%;
            background-color: red;
        }
    </style>
    <script>
        window.console = window.console || function(t) {};
    </script>
    <script>
        if (document.location.search.match(/type=embed/gi)) {
            window.parent.postMessage("resize", "*");
        }
    </script>
    <?php
    if(file_exists(HUBPATH_PAGES . DIRECTORY_SEPARATOR . $_GET['file'] . DIRECTORY_SEPARATOR. 'index.php')) {

        $html = \Administration\app\Fopen::getContentFile(HUBPATH_PAGES . DIRECTORY_SEPARATOR . $_GET['file'] . DIRECTORY_SEPARATOR. 'index.php');
    }
    ?>
    <form method="post">
<textarea id="summernote" name="text"><?php $i = 1; foreach ($html as $k){
        if ($i >= 3){
            echo $k;
        }
        $i++;
    } ?></textarea>
        <input type="hidden" name="file" value="<?= $_GET['file'] ?>">
        <input type="submit">
    </form>

<script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-157cd5b220a5c80d4ff8e0e70ac069bffd87a61252088146915e8726e5d9f147.js"></script>
<script id="rendered-js">
    $('#summernote').summernote({
        height: 300, // set editor height
        minHeight: null, // set minimum height of editor
        maxHeight: null, // set maximum height of editor
        focus: true // set focus to editable area after initializing summernote
    });
    //# sourceURL=pen.js
</script>