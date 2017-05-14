<div id="skin-select">
        <div id="logo">
            <h1>Futari
                <span>beta</span>
            </h1>
        </div>

        <a id="toggle">
            <span class="entypo-menu"></span>
        </a>
        <div class="dark">
            <form action="#">
                <span>
                    <input type="text" name="search" value="" class="search rounded id_search" placeholder="Search Menu..." autofocus />
                </span>
            </form>
        </div>

        <div class="search-hover">
            <form id="demo-2">
                <input type="search" placeholder="Search Menu..." class="id_search">
            </form>
        </div>




        <div class="skin-part">
            <div id="tree-wrap">
                <div class="side-bar">
                    <ul class="topnav menu-left-nest">
                        <li>
                            <a href="#" style="border-left:0px solid!important;" class="title-menu-left">

                                <span class="widget-menu"></span>
                                <i data-toggle="tooltip" class="entypo-cog pull-right config-wrap"></i>

                            </a>
                        </li>
                        <li>
                            <a class="tooltip-tip ajax-load" href="home.html" title="Media">
                                <i class="icon-camera"></i>
                                <span>Dashboard</span>
                            </a>
                        </li> 
                        <li>
                            <a class="tooltip-tip ajax-load" href="#" title="Blog App">
                                <i class="icon-document-edit"></i>
                                <span>Blog App</span>

                            </a>
                            <ul>
                                <li>
                                    <a class="tooltip-tip2 ajax-load" href="blog-list.html" title="Blog List"><i class="entypo-doc-text"></i><span>Blog List</span></a>
                                </li>
                                <li>
                                    <a class="tooltip-tip2 ajax-load" href="blog-detail.html" title="Blog Detail"><i class="entypo-newspaper"></i><span>Blog Details</span></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="tooltip-tip ajax-load" href="media.html" title="Media">
                                <i class="icon-camera"></i>
                                <span>Feedback</span>
                                <div class="noft-blue" style="display: inline-block; float: none;">289</div>
                            </a>
                        </li>                      
                        <li>
                            <a class="tooltip-tip ajax-load" href="media.html" title="Media">
                                <i class="icon-camera"></i>
                                <span>Web Config</span>

                            </a>
                        </li>
                    </ul>

                    <ul class="topnav menu-left-nest">
                        <li>
                            <a href="#" style="border-left:0px solid!important;" class="title-menu-left">

                                <span class="design-kit"></span>
                                <i data-toggle="tooltip" class="entypo-cog pull-right config-wrap"></i>

                            </a>
                        </li>
                        <li>
                            <?= $this->Html->link('<i class="icon-window"></i><span>Courses</span>',
                                ['controller'=>'admincp','action'=>'courses'],
                                ['escape'=>false,'title'=>'Courses']); ?>
                        </li>
                        <li>
                            <a class="tooltip-tip ajax-load" href="index.html" title="Dashboard">
                                <i class="icon-window"></i>
                                <span>Lessons</span>
                            </a>
                        </li>
                        <li>
                            <a class="tooltip-tip ajax-load" href="index.html" title="Dashboard">
                                <i class="icon-window"></i>
                                <span>Topics</span>
                            </a>
                        </li>
                        <li>
                            <a class="tooltip-tip ajax-load" href="mail.html" title="Mail">
                                <i class="icon-mail"></i>
                                <span>Portfolios</span>
                            </a>
                        </li>
                        <li>
                            <a class="tooltip-tip ajax-load" href="mail.html" title="Mail">
                                <i class="icon-mail"></i>
                                <span>Categories</span>
                            </a>
                        </li>
                        <li>
                            <a class="tooltip-tip ajax-load" href="mail.html" title="Mail">
                                <i class="icon-mail"></i>
                                <span>Badges</span>
                            </a>
                        </li>
                    </ul>

                    <ul id="menu-showhide" class="topnav menu-left-nest">
                        <li>
                            <a href="#" style="border-left:0px solid!important;" class="title-menu-left">

                                <span class="component"></span>
                                <i data-toggle="tooltip" class="entypo-cog pull-right config-wrap"></i>

                            </a>
                        </li>
                        <li>
                            <a class="tooltip-tip ajax-load" href="map.html" title="Map">
                                <i class="icon-location"></i>
                                <span>Users</span>

                            </a>
                        </li>
                        <li>
                            <a class="tooltip-tip ajax-load" href="map.html" title="Map">
                                <i class="icon-location"></i>
                                <span>Banned List</span>

                            </a>
                        </li>
                    </ul>


                    <div class="side-dash">
                        <h3>
                            <span>Device</span>
                        </h3>
                        <ul class="side-dashh-list">
                            <li>Avg. Traffic
                                <span>25k<i style="color:#44BBC1;" class="fa fa-arrow-circle-up"></i>
                                </span>
                            </li>
                            <li>Visitors
                                <span>80%<i style="color:#AB6DB0;" class="fa fa-arrow-circle-down"></i>
                                </span>
                            </li>
                            <li>Convertion Rate
                                <span>13m<i style="color:#19A1F9;" class="fa fa-arrow-circle-up"></i>
                                </span>
                            </li>
                        </ul>
                        <h3>
                            <span>Visitors</span>
                        </h3>
                        <div id="g1" style="height:180px" class="gauge"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>