<style>
    .PicComment {
        background-color: #f0f0f0;
        /* 浅灰色背景 */
        padding: 20px;
        /* 给内容添加一些内边距，使其与背景有一定距离 */
        border-radius: 8px;
        /* 可选：添加圆角效果 */
    }

    .centered-text {
        display: flex;
        justify-content: center;
        /* 水平居中 */
        align-items: center;
        /* 垂直居中 */
        height: 80%;
        /* 使容器高度占满父容器 */
        font-size: 90px;
        /* 设置字体大小，可根据需要调整 */
        color: #00006F;
        /* 设置字体颜色，这里设置为白色 */
        /* 如果背景图是深色，确保字体颜色与背景形成对比 */
    }
</style>


<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\helpers\Url;
$this->title = 'My Yii Application';
?>

<div height="300px"></div>


<main class="main-content">
    <!--== Start Hero Area Wrapper ==-->
    <section class="home-slider-area slider-default">
        <div class="home-slider-content">
            <div class="swiper-container home-slider-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <!-- Start Slide Item -->
                        <div class="home-slider-item">
                            <div class="slider-content-area bg-img"
                                style="background-image: url('static/picture/new/main.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-5 col-xl-6">
                                            <div class="content">
                                                <div class="inner-content">
                                                    <div class="wrap-one">
                                                        <h2>智能海洋牧场</h2>
                                                    </div>
                                                    <div class="wrap-two">
                                                        <p>Smart Ocean Ranch</p>
                                                    </div>
                                                    <!-- <div class="wrap-three">
                                                        <a href="contact.html" class="btn-theme">Booking Now</a>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div class="thumb">
                                                <div class="bg-thumb bg-img" data-bg-img="static/picture/robot.png">


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-logo bg-img" data-bg-img="assets/img/shape/6.webp"></div>
                                </div>
                                <div class="bg-overlay"></div>
                            </div>
                        </div>
                        <!-- End Slide Item -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End Hero Area Wrapper ==-->

    <!--== Start Tracking Area Wrapper ==-->
    <div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tracking-form-wrap">
                        <form class="tracking-searchbox">
                            <div class="track-dropdown">
                                <select class="form-control select-dropdown">
                                    <option selected="">Shipment Type</option>
                                    <option value="lan1">Shipment One</option>
                                    <option value="lan2">Shipment Two</option>
                                    <option value="lan3">Shipment Three</option>
                                </select>
                            </div>
                            <div class="track-dropdown style-two">
                                <select class="form-control select-dropdown">
                                    <option selected="">Product Type</option>
                                    <option value="lan1">Product One</option>
                                    <option value="lan2">Product Two</option>
                                    <option value="lan3">Product Three</option>
                                </select>
                            </div>
                            <input id="tracking-input" class="form-control" type="text" placeholder="关键词">

                            <button class="btn btn-theme" type="button" id="search-btn">
                                <?= Html::a(Html::encode("查询"), ['site/searchPost'], [

                                    'id' => 'dynamic-link'
                                ]) ?>
                                <i class="icon icofont-long-arrow-right"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Tracking Area Wrapper ==-->

    <!--== Start About Area Wrapper ==-->
    <section class="about-area about-default-area">
        <div class="container">
            <div class="row row-gutter-0">
                <div class="col-md-6 col-lg-4">
                    <div class="about-content">
                        <div class="section-title">
                            <h4 class="subtitle">ABOUT PLATFORM</h4>
                            <h2 class="title">平台功能</h2>
                            <p>我们的平台集成多种功能，为用户提供高效、便捷的服务：</p>
                            <ul>
                                <li>
                                    <strong>数据处理与分析模块：</strong>强大的数据处理能力，助您快速挖掘数据价值，支持多种分析模型。
                                </li>
                                <li>
                                    <strong>可视化展示模块：</strong>数据图表化，提供直观的展示方式，助力决策更加精准。
                                </li>
                                <li>
                                    <strong>警报与通知模块：</strong>实时监控关键指标，自动触发警报并推送通知，确保您及时掌握动态。
                                </li>
                                <li>
                                    <strong>用户信息模块：</strong>个性化账户管理，安全可靠的数据存储，提升用户整体体验。
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="about-thumb">
                        <img src="static/picture/new/7.png" alt="Image" width="350" height="300">
                    </div>
                    <div class="about-thumb">
                        <img src="static/picture/new/8.png" alt="Image" width="350" height="300">
                    </div>
                    <div class="about-thumb">
                        <img src="static/picture/new/9.png" alt="Image" width="350" height="30">
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="featured-wrp">
                        <div class="featured-item">
                            <h4 class="title"><a href="<?= Url::to(['post/detail', 'id' => 3]) ?>">智慧海洋牧场：开启海洋渔业新篇章</a></h4>
                            <p>智慧海洋牧场结合人工智能与物联网技术，为传统渔业注入新活力，通过实时监测与精准管理，实现可持续发展与生态保护...</p>
                        </div>
                        <div class="featured-item">
                            <h4 class="title"><a href="<?= Url::to(['post/detail', 'id' => 4]) ?>">现代渔业的未来：智慧海洋科技解析</a></h4>
                            <p>智慧海洋牧场如何利用先进技术改变传统渔业模式，实现资源高效利用与生态平衡？探索海洋科技的无限潜能...</p>
                        </div>
                        <div class="featured-item">
                            <h4 class="title"><a href="<?= Url::to(['post/detail', 'id' => 5]) ?>">智慧海洋牧场：用科技赋能蓝色经济</a></h4>
                            <p>从智能养殖到生态监测，智慧海洋牧场正在用创新技术驱动蓝色经济发展，促进渔业与生态的和谐共存...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End About Area Wrapper ==-->

    <!--== Start Service Area Wrapper ==-->
    <section class="service-area service-default-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto">
                    <div class="section-title text-center">
                        <h4 class="subtitle">SHARE CONTENT</h4>
                        <h2 class="title">智能海洋牧场领域热点</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="swiper-container service-slider-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <!-- Start Service Item -->
                                <div class="service-item">
                                    <div class="thumb">
                                        <a
                                            href="https://blog.csdn.net/DFCED/article/details/136107612?ops_request_misc=%257B%2522request%255Fid%2522%253A%2522efcc36b03f3ac45158a4d6b8a6899516%2522%252C%2522scm%2522%253A%252220140713.130102334..%2522%257D&request_id=efcc36b03f3ac45158a4d6b8a6899516&biz_id=0&utm_medium=distribute.pc_search_result.none-task-blog-2~all~top_positive~default-1-136107612-null-null.142^v100^pc_search_result_base8&utm_term=%E7%94%9F%E6%88%90%E5%BC%8F%E4%BA%BA%E5%B7%A5%E6%99%BA%E8%83%BD&spm=1018.2226.3001.4187"><img
                                                src="static/picture/new/openai.jpg" alt="Image" width="270"
                                                height="308"></a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a
                                                href="https://blog.csdn.net/DFCED/article/details/136107612?ops_request_misc=%257B%2522request%255Fid%2522%253A%2522efcc36b03f3ac45158a4d6b8a6899516%2522%252C%2522scm%2522%253A%252220140713.130102334..%2522%257D&request_id=efcc36b03f3ac45158a4d6b8a6899516&biz_id=0&utm_medium=distribute.pc_search_result.none-task-blog-2~all~top_positive~default-1-136107612-null-null.142^v100^pc_search_result_base8&utm_term=%E7%94%9F%E6%88%90%E5%BC%8F%E4%BA%BA%E5%B7%A5%E6%99%BA%E8%83%BD&spm=1018.2226.3001.4187">海洋牧场的人工智能监测与管理技术</a>
                                        </h4>
                                    </div>
                                </div>
                                <!-- End Service Item -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Start Service Item -->
                                <div class="service-item">
                                    <div class="thumb">
                                        <a href="https://blog.csdn.net/2301_76168381/article/details/143714755"><img
                                                src="static/picture/new/yiyao.png" alt="Image" width="270"
                                                height="308"></a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a
                                                href="https://blog.csdn.net/2301_76168381/article/details/143714755">智能设备在海洋生物养殖中的应用</a>
                                        </h4>
                                    </div>
                                </div>
                                <!-- End Service Item -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Start Service Item -->
                                <div class="service-item">
                                    <div class="thumb">
                                        <a href="https://www.tsinghua.edu.cn/info/1182/110485.htm"><img
                                                src="static/picture/new/naoji.png" alt="Image" width="270"
                                                height="308"></a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a
                                                href="https://www.tsinghua.edu.cn/info/1182/110485.htm">海洋生态修复与智慧化渔业结合</a></h4>
                                    </div>
                                </div>
                                <!-- End Service Item -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Start Service Item -->
                                <div class="service-item">
                                    <div class="thumb">
                                        <a
                                            href="https://game.academy.163.com/course/careerArticle?course=610&isMaster=0"><img
                                                src="static/picture/new/DlJ6ETJl.jpg" alt="Image" width="270"
                                                height="308"></a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a
                                                href="https://game.academy.163.com/course/careerArticle?course=610&isMaster=0">海洋牧场的可持续发展与碳中和技术</a>
                                        </h4>
                                    </div>
                                </div>
                                <!-- End Service Item -->
                            </div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <!-- <p class="get-started">We are ready to give 24/7 support for your cutomer. <a
                            href="services.html">Get Started</a></p> -->
                </div>
            </div>
            <div class="shape-group">
                <div class="shape-style2">
                    <img src="static/picture/21.webp" alt="Image" width="353" height="918">
                </div>
                <div class="shape-style3">
                    <img src="static/picture/31.webp" alt="Image" width="353" height="918">
                </div>
            </div>
        </div>
    </section>
    <!--== End Service Area Wrapper ==-->

    <!--== Start Divider Area Wrapper ==-->
    <!-- <section class="divider-area divider-style1-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="divider-wrap">
                        <div class="column-left">
                            <div class="content">
                                <p>Strist is trusted logistic ompany. You can contact for any logistic service.</p>
                            </div>
                        </div>
                        <div class="column-right">
                            <div class="content">
                                <h2 class="title">88 95 46 37</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--== End Divider Area Wrapper ==-->

    <!--== Start Team Area ==-->
    <section class="team-area team-default-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto">
                    <div class="section-title text-center">
                        <h4 class="subtitle">TEAM MEMBERS</h4>
                        <h2 class="title">喵喵大魔王组</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="team-slider-content">
                        <div class="swiper-container team-slider-container">
                            <div class="swiper-wrapper" style="display: flex; flex-wrap: nowrap;">
                                <div class="swiper-slide" style="flex: 0 0 auto;">
                                    <div class="team-member">
                                        <a>
                                            <div class="thumb">
                                                <img src="static/picture/zmk.jpg" alt="Image" width="161" height="199">
                                            </div>
                                            <div class="content">
                                                <div class="member-info">
                                                    <h4 class="name">张明昆</h4>
                                                    <h6 class="designation">组长</h6>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide" style="flex: 0 0 auto;">
                                    <div class="team-member">
                                        <a>
                                            <div class="thumb">
                                                <img src="static/picture/zmk.jpg" alt="Image" width="161" height="199">
                                            </div>
                                            <div class="content">
                                                <div class="member-info">
                                                    <h4 class="name">张明昆</h4>
                                                    <h6 class="designation">组长</h6>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide" style="flex: 0 0 auto;">
                                    <div class="team-member">
                                        <a>
                                            <div class="thumb">
                                                <img src="static/picture/zmk.jpg" alt="Image" width="161" height="199">
                                            </div>
                                            <div class="content">
                                                <div class="member-info">
                                                    <h4 class="name">张明昆</h4>
                                                    <h6 class="designation">组长</h6>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide" style="flex: 0 0 auto;">
                                    <div class="team-member">
                                        <a>
                                            <div class="thumb">
                                                <img src="static/picture/zmk.jpg" alt="Image" width="161" height="199">
                                            </div>
                                            <div class="content">
                                                <div class="member-info">
                                                    <h4 class="name">张明昆</h4>
                                                    <h6 class="designation">组长</h6>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide" style="flex: 0 0 auto;">
                                    <div class="team-member">
                                        <a>
                                            <div class="thumb">
                                                <img src="static/picture/zmk.jpg" alt="Image" width="161" height="199">
                                            </div>
                                            <div class="content">
                                                <div class="member-info">
                                                    <h4 class="name">张明昆</h4>
                                                    <h6 class="designation">组长</h6>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!--== End Team Area ==-->

    <!--== Start Project Area ==-->

    <!--== End Project Area ==-->

    <!--== Start Blog Area Wrapper ==-->
    <section class="blog-area blog-default-area position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto">
                    <div class="section-title">
                        <h4 class="subtitle">OUR CHARTS</h4>
                        <h2 class="title">数据可视化</h2>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="PicItem">
                    <div class="PicComment">
                        <h3 class="title">月相</h3>
                        <p>输入年份、位置或经纬度即可查看月相</p>
                    </div>
                    <div class="NewPic">
                        <?php include('d3demo3.php'); ?>
                    </div>
                </div>

                <!--== Start Blog Post Item ==-->
                <div class="PicItem">
                    <div class="PicComment">
                        <h3 class="title">动态时钟</h3>
                        <p>从月份精确到秒的动态时钟</p>
                    </div>
                    <div class="NewPic">
                        <?php include('d3demo1.php'); ?>
                    </div>
                </div>
                <!--== End Blog Post Item ==-->



            </div>
        </div>
        <div class="shape-group">
            <div class="shape-style1">
                <img src="static/picture/110.webp" alt="Image" width="185" height="185">
            </div>
        </div>
    </section>
    <!--== End Blog Area Wrapper ==-->

    <!--== Start Testimonial Area Wrapper ==-->
    <section class="testimonial-area testimonial-default-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto">
                    <div class="section-title text-center">
                        <h4 class="subtitle">MESSAGE BOARD</h4>
                        <h2 class="title">个人留言板</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="swiper-container testimonial-slider-container">
                        <div class="swiper-wrapper">
                            <?php if (!empty($feedbacks)): ?>
                                <?php foreach ($feedbacks as $feedback): ?>
                                    <div class="swiper-slide">
                                        <!--== Start Testimonial Item ==-->
                                        <div class="testimonial-item">
                                            <div class="content">
                                                <p>"<?= Html::encode($feedback->content) ?>"</p>
                                                <img class="quote-icon" src="static/picture/quote-icon.webp" alt="Icon"
                                                    width="252" height="191">
                                            </div>
                                            <div class="client-info">
                                                <div class="desc">
                                                    <h5><?= Yii::$app->formatter->asDate($feedback->created_at) ?></h5>
                                                    <h4><?= Html::encode($feedback->author_name) ?></h4>
                                                </div>
                                                <div class="rating">
                                                    <?php
                                                    for ($i = 1; $i <= 5; $i++) {
                                                        if ($i <= $feedback->rating) {
                                                            echo '<span class="rating-color icofont-star"></span>';
                                                        } else {
                                                            echo '<span class="icofont-star"></span>';
                                                        }
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                        <!--== End Testimonial Item ==-->
                                    </div>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="content">
                                            <p>"暂无留言"</p>
                                            <img class="quote-icon" src="static/picture/quote-icon.webp" alt="Icon"
                                                width="252" height="191">
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End Testimonial Area Wrapper ==-->

    <script>
        document.getElementById('search-btn').addEventListener('click', function () {
            // 获取输入框的值
            var key = document.getElementById('tracking-input').value;

            // 如果没有输入值，提示用户
            if (!key) {
                alert('请输入搜索内容！');
                return;
            }

            // 动态更新链接地址
            var dynamicLink = document.getElementById('dynamic-link');
            dynamicLink.href = '<?= \yii\helpers\Url::to(['site/searchpost']) ?>' + '&' + 'key=' + encodeURIComponent(key);

            // 触发点击事件
            dynamicLink.click();
        });
    </script>

    ?>

    <!--== Start Divider Area Wrapper ==-->

    <!--== End Divider Area Wrapper ==-->


</main>