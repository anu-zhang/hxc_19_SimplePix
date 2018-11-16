<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content="Free Bootstrap Themes by Html5xCss3 dot com - Free Responsive Html5 Templates">
    <meta name="author" content="#">

    <title>SimplePix | Free Html5 Templates by </title>


    <link rel="stylesheet" href="css/menu.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="font-awesome-4.4.0/css/font-awesome.min.css" type="text/css">

    <link rel="stylesheet" href="css/lightbox.css">

    <!-- Core JavaScript Files -->


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="header">
    <div id='cssmenu'>
        <ul>
            <li class="active"><a href='index.php'><span>SimplePix</span></a></li>
            <li class=' has-sub'><a href='#'><span>Category</span></a>
                <ul>
                    <li class='has-sub'><a href='#'><span>Item 1</span></a>
                        <ul>
                            <li><a href='#'><span>Sub Item</span></a></li>
                            <li class='last'><a href='#'><span>Sub Item</span></a></li>
                        </ul>
                    </li>
                    <li class='has-sub'><a href='#'><span>Item 2</span></a>
                        <ul>
                            <li><a href='#'><span>Sub Item</span></a></li>
                            <li class='last'><a href='#'><span>Sub Item</span></a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href='#'><span>Gallery</span></a></li>
            <li><a href='single.html'><span>About</span></a></li>
            <li class='last'><a href='contact.html'><span>Contact</span></a></li>
        </ul>
    </div>
</div>
<div class="copyrights">Collect from <a href="http://www.cssmoban.com/">企业网站模板</a></div>
<div id="page-content" class="index-page">
    <div id="container">

        <?php
        function getFilePath($url)
        {
//    var_dump(__DIR__.'/../images'.$url[1]);
            $dirsys = '../sys_images' . $url[1] ?? '';
            $dirmnt = '../mnt/images' . $url[1] ?? '';

            $isDinsys = is_dir($dirsys);
            $isDirmnt = is_dir($dirmnt);
            if ($isDinsys || $isDirmnt) {

                $files = $isDinsys ? $dirsys . '/' . scandir($dirsys)[2] : $dirmnt . '/' . scandir($dirmnt)[2];
                return $files;
            }
        }

        //造连接对象：造一个mysql对象

        $db = new MySQLi("localhost", "root", "fb3508e6e06adb92", "144du");

        //准备一条SQL语句
        $id = rand(-4, 18230);
        $id2 = $id + 5;
        $sql = "select * from 144du where id>$id and id < $id2";

        //执行sql语句，如果是查询语句，成功返回结果集对象；如果不是，成功执行为true，执行失败为false

        $reslut = $db->query($sql);

        //判断返回是否执行成功

        if ($reslut) {

            while ($attr = $reslut->fetch_row()) {
                $array = explode(',', trim($attr[3], ','));
                foreach ($array as $item) {

                    $urls = explode('images', $item);
                    if (!empty($urls)) {
                        $url = getFilePath($urls);
                        echo '<div class="item">
            <a class="example-image-link" href="'.$url.'" data-lightbox="example-set"
               data-title="Click the right half of the image to move forward.">
                <img class="example-image" src="' . $url . '" alt=""/></a>
            <div class="content-item">
                <h3 class="title-item"><a href="single.html">Sun</a></h3>
                <div class="time"> SEPTEMBER 30TH</div>
                <p class="info">Aenean feugiat in ante et blandit. Vestibulum posuere molestie risus, ac interdum magna
                    porta non.Aenean feugiat in ante et blandit, Vestibulum e risu. Aenean feugiat in ante et
                    blandit.</p>

            </div>
            <div class="bottom-item">
                <a href="#" class="btn btn-share share"><i class="fa fa-share-alt"></i> Share</a>
                <a href="#" class="btn btn-like"><i class="fa fa-heart-o"></i></a>
                <a href="#" class="btn btn-comment"><i class="fa fa-comment-o"></i></a>
                <a href="single.html" class="btn btn-more"><i class="fa fa-long-arrow-right "></i></a>
            </div>
        </div>';

                    }
                }


            }
        }

        ?>

    </div>
</div>

<a href="http://www.cssmoban.com/" target="_blank" title=""></a> <a href="http://www.cssmoban.com/" title="" target="_blank"></a>
<!-- Once the page is loaded, initialized the plugin. -->
<script type="text/javascript" src="js/jquery-2.1.1.js" ></script>

<!-- jQuery Pinterest -->
<script type="text/javascript" src="js/jquery.pinto.js"></script>
<script type="text/javascript" src="js/main.js"></script>

<!-- Light Box -->
<script src="js/lightbox-plus-jquery.min.js"></script>

<!-- Menu -->
<script src="js/script.js"></script>

<script type="text/javascript">
    $('#container').pinto();
</script>

</body>
</html>