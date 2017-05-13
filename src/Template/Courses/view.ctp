<style type="text/css">
.row {
    margin: 0 auto;
    max-width: inherit;
    width: 100%;
}

.breadcrumbs {
    border-style: none;
    background-color: initial;
}

.breadcrumbs ul {
    float: inherit;
}

.blog-posts .blog-title-single h1 {
    line-height: 35px;
}

.flat-button {
    font-size: 13px;
}

.swal2-modal .swal2-styled {
    padding: 0 32px;
}
</style>


<div class="page-title parallax parallax4"> 
    <div class="overlay"></div>            
    <div class="container">
        <div class="row">
            <div class="col-md-12">                    
                <div class="page-title-heading">
                    <h2 class="title">COURSES GRID 3 COLUMNS</h2>
                </div><!-- /.page-title-heading -->
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li>Courses Grid</li>
                    </ul>                   
                </div><!-- /.breadcrumbs --> 
            </div><!-- /.col-md-12 -->  
        </div><!-- /.row -->  
    </div><!-- /.container -->                      
</div><!-- /page-title parallax -->

<section class="main-content blog-posts course-single">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="blog-title-single">
                    <h1 class="bold"><?= h($course->name) ?></h1>
                    <ul class="course-meta review style2 clearfix">
                        <li class="author">
                            <div class="thumb">
                                <?= $this->Html->image('teacher/Team-05.jpg', ['alt' => 'image']); ?>
                            </div>

                            <div class="text">
                                <a href="#">Keny White</a>
                                <p>Teacher</p>
                            </div>
                        </li>
                        <li class="categories">
                            <a href="#" class="course-name">Photoshop</a>
                            <p>Categories</p>
                        </li>
                        <li class="review-stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half"></i>
                            <i class="fa fa-star-o"></i>
                            <p>Reviews</p>
                        </li>

                        <li>25 Reviews</li>
                    </ul>

                    <div class="feature-post">
                        <?php 
                            $courseImg = 'courses/' . h($course->image);
                        ?>
                        <?=$this->Html->image($courseImg, ['alt' => $course->name])?>
                    </div><!-- /.feature-post -->
                    <div class="course-widget-price">
                        <h4 class="course-title">COURSE FEATURES</h4>
                        <ul>
                            <li>
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <span>Starts</span>
                                <span class="time">May 29, 2016</span>
                            </li>
                            <li>
                                <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                                <span>Duration</span>
                                <span class="time">2 Months</span>
                            </li>
                            <li>
                                <i class="fa fa-leanpub" aria-hidden="true"></i>
                                <span>Class Duration</span>
                                <span class="time">7:00 - 9:00</span>
                            </li>
                            <li>
                                <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                <span>Institution</span>
                                <span class="time">ABC University</span>
                            </li>
                            <li>
                                <i class="fa fa-user-plus" aria-hidden="true"></i>
                                <span>Seats Available</span>
                                <span class="time">23 Student</span>
                            </li>
                            <li>
                                <i class="fa fa-users" aria-hidden="true"></i>
                                <span>Level</span>
                                <span class="time">All level</span>
                            </li>
                        </ul>
                        <h5 class="bt-course">Course Price: <span>$270.00</span></h5>
                        <?= $this->Html->link(
                                'ENROLL THIS COURSE',
                                [
                                    'controller' => 'Users',
                                    'action' => 'enroll',
                                    '_full' => true
                                ],
                                [
                                    'class' => 'flat-button bg-orange',
                                    'id' => 'enrollBtn'
                                ]
                                );
                        ?>
                        <!-- <a class="flat-button bg-orange" id="enrollBtn" href="javascript:;" data-course="<?=$course->id?>">ENROLL THIS COURSE</a> -->
                    </div>
                    <div class="entry-content">
                        <h4 class="title-1 bold">ABOUT THE COURSES</h4>
                        <p>
                            Fusce eleifend donec sapien sed phase lusa. Pellentesque lacus vamus lorem arcu semper duiac. Cras ornare arcu avamus nda leo. Etiam ind arcu morbi justo mauris tempus pharetra interdum at congue semper purus.
                        </p> 

                        <div class="flat-spacer h8px"></div>
                        <h4 class="title-2">What You Will Learn</h4>
                        <p>
                            Fusce eleifend donec sapien sed phase lusa pellentesque lacus.Vivamus lorem arcu semper duiac. Cras ornare arcu avamus nda leo Etiam ind arcu. Morbi justo mauris tempus pharetra interdum at congue semper purus. Lorem ipsum dolor sit
                        </p>
                         <p class="marginbt-12px">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                        <ul class="flat-list color-black">     
                            <li>2 Glossaries for difficult terms & acronyms</li> 
                            <li>25 hours of High Quality e-Learning content</li>
                            <li>72 end of chapter quizzes </li>
                            <li>30 PDUs Offered </li>
                            <li>Collection of 47 six sigma tools for hands-on practice</li>                                       
                        </ul> 

                        <p class="mgbt-36">
                            Fusce eleifend donec sapien sed phase lusa. Pellentesque lacus vamus lorem arcu semper duiac. Cras ornare arcu avamus nda leo. Etiam ind arcu morbi justo mauris tempus pharetra interdum at congue semper purus. Lorem ipsum dolor sit amet sed consectetur adipisicing elit sed do eiusmod tempor incididunt.                                
                        </p>

                        <h4 class="bold mgbt-17">Explore The Best Concepts</h4>
                        <p class="mgbt-48">
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occa ecatedcupida tat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa quae ab illo inventore veritatis etuquasi architect obeatae vitae dicta sunt explicabo nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit sed quia consequun tur magni.
                        </p>

                        <h4 class="bold mgbt-17">COURSE SYLLABUS</h4>
                        <p class="mgbt-26">
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occa ecatedcupida tat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium
                        </p>

                        <ul class="curriculum">
                                <li class="section">
                                    <h4 class="section-title">Section 1: AngularJS -How to make your browsers Smarter</h4>
                                    <ul class="section-content">
                                        <li class="course-lesson">
                                            <a href="#" class="lesson-title">Welcome to the Course!</a>
                                            <a href="#" class="lesson-preview">Preview</a>
                                            <div class="fr">
                                                <span class="duration">2 house</span>
                                                <a href="#" class="attrachment">Pdf file</a>
                                            </div>
                                        </li>

                                        <li class="course-lesson">
                                            <a href="#" class="lesson-title">What Is SEO / Search Engine Optimization?</a>
                                            <span class="lesson-preview">Looked</span>
                                            <div class="fr">
                                                <span class="duration">45 minute</span>
                                                <a href="#" class="attrachment-video">video</a>
                                            </div>
                                        </li>

                                        <li class="course-lesson">
                                            <a href="#" class="lesson-title">Scope Chains & Closures</a>
                                            <span class="lesson-preview">Looked</span>
                                            <div class="fr">
                                                <span class="duration">3 house</span>
                                                <a href="#" class="question">Questions</a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>

                                <li class="section">
                                    <h4 class="section-title">Section 2: Understanding AngularJS</h4>
                                    <ul class="section-content">
                                        <li class="course-lesson">
                                            <a href="#" class="lesson-title">Javascripting &HTML/CSS</a>
                                            <a href="#" class="lesson-preview">Preview</a>
                                            <div class="fr">
                                                <span class="duration">2 house</span>
                                                <a href="#" class="attrachment">Pdf file</a>
                                            </div>
                                        </li>

                                        <li class="course-lesson">
                                            <a href="#" class="lesson-title">Scope Chains & Closures Developer</a>
                                            <span class="lesson-preview">Looked</span>
                                            <div class="fr">
                                                <span class="duration">45 minute</span>
                                                <a href="#" class="attrachment-video">video</a>
                                            </div>
                                        </li>

                                        <li class="course-lesson">
                                            <a href="#" class="lesson-title">Core stream-adventure</a>
                                            <span class="lesson-preview">Looked</span>
                                            <div class="fr">
                                                <span class="duration">3 house</span>
                                                <a href="#" class="question">Questions</a>
                                            </div>
                                        </li>

                                        <li class="course-lesson">
                                            <a href="#" class="lesson-title">Environmental protection</a>
                                            <a href="#" class="lesson-preview">Preview</a>
                                            <div class="fr">
                                                <span class="duration">1 house</span>
                                                <a href="#" class="attrachment">Pdf file</a>
                                            </div>
                                        </li>

                                        <li class="course-lesson">
                                            <a href="#" class="lesson-title">Preferences in food and clothes</a>
                                            <span class="lesson-preview">Looked</span>
                                            <div class="fr">
                                                <span class="duration">20 minute</span>
                                                <a href="#" class="attrachment-video">Question</a>
                                            </div>
                                        </li>

                                        <li class="course-lesson">
                                            <a href="#" class="lesson-title">Core stream-adventure</a>
                                            <span class="lesson-preview">Looked</span>
                                            <div class="fr">
                                                <span class="duration">3 house</span>
                                                <a href="#" class="question">Questions</a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>

                            </ul>
                        
                    </div><!-- /.entry-post -->
                </div><!-- /.main-post --> 
            </div><!-- /col-md-8 -->

            <div class="sidebar">
                <div class="widget widget-categories">
                    <h5 class="widget-title">Categories</h5>
                    <ul>
                        <li>
                            <a href="#">Web Design</a>
                            <span class="numb-right">(9)</span>
                        </li>
                        <li>
                            <a href="#">App Design</a>
                            <span class="numb-right">(3)</span>
                        </li>
                        <li>
                            <a href="#">Graphic Design</a>
                            <span class="numb-right">(23)</span>
                        </li>
                        <li>
                            <a href="#">Game Design</a>
                            <span class="numb-right">(5)</span>
                        </li>
                        <li>
                            <a href="#">UI-UX Design</a>
                            <span class="numb-right">(7)</span>
                        </li>
                        <li>
                            <a href="#">Print Design</a>
                            <span class="numb-right">(2)</span>
                        </li>
                        <li>
                            <a href="#">Logo - Typo Design </a>
                            <span class="numb-right">(5)</span>
                        </li>
                    </ul>
                </div>

                <div class="widget widget-teacher">
                    <h5 class="widget-title">Browse by Teacher</h5>
                    <div class="text-teacher">
                        <p>Lorem ipsum sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <ul class="teacher-news clearfix">
                        <li>
                            <div class="thumb">
                                <img src="images/flickr/4.jpg" alt="image">
                            </div>
                            <div class="text">
                                <a href="#">Charlie Brown</a>
                                <p>Web Designer</p>
                            </div>
                            <ul class="flat-socials">
                                <li class="facebook">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li class="twitter">
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li class="linkedin">
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </li>
                                <li class="youtube">
                                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <div class="thumb">
                                <img src="images/flickr/5.jpg" alt="image">
                            </div>
                            <div class="text">
                                <a href="#">Emily Foster</a>
                                <p>Web Designer</p>
                            </div>
                            <ul class="flat-socials">
                                <li class="facebook">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li class="twitter">
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li class="linkedin">
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </li>
                                <li class="youtube">
                                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <div class="thumb">
                                <img src="images/flickr/6.jpg" alt="image">
                            </div>
                            <div class="text">
                                <a href="#">Terry Moore</a>
                                <p>Web Designer</p>
                            </div>
                            <ul class="flat-socials">
                                <li class="facebook">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li class="twitter">
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li class="linkedin">
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </li>
                                <li class="youtube">
                                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                                </li>
                            </ul>
                        </li>
                    </ul><!-- /popular-news clearfix -->
                </div>

                <div class="widget widget-featured-courses">
                    <h5 class="widget-title">Featured courses</h5>
                    <ul class="featured-courses-news clearfix">
                        <li>
                            <div class="thumb">
                                <img src="images/flickr/7.jpg" alt="image">
                            </div>
                            <div class="text">
                                <a href="#">Swift Programming for Beginners</a>
                                <p>Sarah Johnson</p>
                            </div>
                            <div class="review-rating">
                                <div class="flat-money">
                                    <p>$170</p>
                                </div>
                                <ul class="flat-reviews">
                                    <li class="star">
                                        <a href="#"><i class="fa fa-star"></i></a>
                                    </li>
                                    <li class="star">
                                        <a href="#"><i class="fa fa-star"></i></a>
                                    </li>
                                    <li class="star">
                                        <a href="#"><i class="fa fa-star"></i></a>
                                    </li>
                                    <li class="star">
                                        <a href="#"><i class="fa fa-star-half-o"></i></a>
                                    </li>
                                     <li class="star">
                                        <a href="#"><i class="fa fa-star-o"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="thumb">
                                <img src="images/flickr/8.jpg" alt="image">
                            </div>
                            <div class="text">
                                <a href="#">Swift Programming for Beginners</a>
                                <p>Sarah Johnson</p>
                            </div>
                            <div class="review-rating">
                                <div class="flat-money">
                                    <p>$170</p>
                                </div>
                                <ul class="flat-reviews">
                                    <li class="star">
                                        <a href="#"><i class="fa fa-star"></i></a>
                                    </li>
                                    <li class="star">
                                        <a href="#"><i class="fa fa-star"></i></a>
                                    </li>
                                    <li class="star">
                                        <a href="#"><i class="fa fa-star"></i></a>
                                    </li>
                                    <li class="star">
                                        <a href="#"><i class="fa fa-star-half-o"></i></a>
                                    </li>
                                     <li class="star">
                                        <a href="#"><i class="fa fa-star-o"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="thumb">
                                <img src="images/flickr/9.jpg" alt="image">
                            </div>
                            <div class="text">
                                <a href="#">Swift Programming for Beginners</a>
                                <p>Sarah Johnson</p>
                            </div>
                            <div class="review-rating">
                                <div class="flat-money">
                                    <p>$170</p>
                                </div>
                                <ul class="flat-reviews">
                                    <li class="star">
                                        <a href="#"><i class="fa fa-star"></i></a>
                                    </li>
                                    <li class="star">
                                        <a href="#"><i class="fa fa-star"></i></a>
                                    </li>
                                    <li class="star">
                                        <a href="#"><i class="fa fa-star"></i></a>
                                    </li>
                                    <li class="star">
                                        <a href="#"><i class="fa fa-star-half-o"></i></a>
                                    </li>
                                     <li class="star">
                                        <a href="#"><i class="fa fa-star-o"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul><!-- /popular-news clearfix -->
                </div><!-- /widget widget-popular-news -->
            </div><!-- /sidebar -->
        </div><!-- /row -->
    </div><!-- /container -->
</section><!-- /main-content -->

<script type="text/javascript">
    $(document).ready(function(){
        
        var isEnroll = window.location.href.substr(window.location.href.lastIndexOf('/') + 1);
        console.log(isEnroll);

        if (isEnroll.includes("enroll")) {
            var newURl = window.location.href.substring(0, window.location.href.lastIndexOf('/'));
            if (window.history && history.pushState) {
                window.history.pushState("", document.title, newURl);
                console.log(window.location.pathname);
            }

            enrollCourse(<?php echo $course->id ?>);
        }

        $('#loginBtn').click(function(e) {
            e.preventDefault();
           
            $('#loginModal').modal('toggle');
        });

        $('#fb-login').click(function(e) {
            var url = '<?php echo \Cake\Routing\Router::url(array(
                    'controller' => 'Users', 
                    'action' => 'facebooklogin', 
                    'redirect_controller' => 'Courses',
                    'redirect_action' => 'view',
                    'redirect_id' => $course->id)); ?>';
            window.location.href = url;
        });

        $('#enrollBtn').click(function(e){
            e.preventDefault();

            enrollCourse(<?php echo $course->id ?>);
       });
    });

    function enrollCourse(courseId) {
        var desUrl = '<?php echo \Cake\Routing\Router::url(array(
            'controller' => 'Users', 'action' => 'enroll')); ?>' + "/" + courseId;

        var options = {
            url: desUrl,
            type: 'GET'
        };

        $.ajax(options).done(function (data) {
            if(data.message === "fail" && data.error === "auth") {
                $('#loginModal').modal('toggle');
            } else if (data.message === "success") {
                swal({
                    title: '<?php echo $course->name ?>',
                    text: 'Welcome to the course. You can now access the course materials.',
                    type: 'success',
                    //timer: 5000,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Start Learning'
                }).then(
                    function () {
                        //TODO: go to lesson page
                    },
                    
                    function (dismiss) {
                        if (dismiss === 'timer') {
                            console.log('I was closed by the timer')
                        }
                    }
                )
            }
        });
    }
</script>