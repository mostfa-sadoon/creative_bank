        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">Dash board</li>
                       
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">{{ trans('admin.categories')}}</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('category.index')}}">{{ trans('admin.categories')}}</a></li>
                            </ul>
                        </li>

                        @role('Super-Admin')
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">{{ trans('admin.users')}}</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('field.index')}}">{{ trans('admin.fields')}}</a></li>
                            </ul>

                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('field.index')}}">{{ trans('admin.creators')}}</a></li>
                            </ul>
                        </li>
                        @endrole

                        @role('Super-Admin')
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">{{ trans('admin.employee')}}</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('employees')}}">{{ trans('admin.employee')}}</a></li>
                            </ul>

                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('employee.create')}}">{{ trans('admin.employee_create')}}</a></li>
                            </ul>
                        </li>
                        @endrole

                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">{{ trans('admin.ideas')}}</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('idea.index')}}">{{ trans('admin.new_ideas')}}</a></li>
                            </ul>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('idea.accepted')}}">{{ trans('admin.accepted_ideas')}}</a></li>
                            </ul>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('idea.trash')}}">{{ trans('admin.trash')}}</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">{{ trans('admin.vote')}}</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('vote.index')}}">{{ trans('admin.vote')}}</a></li>
                            </ul>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('vote.create')}}">{{ trans('admin.vote_create')}}</a></li>
                            </ul>
                        </li>


                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">{{ trans('admin.news')}}</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('news.create')}}">{{ trans('admin.add_news')}}</a></li>
                            </ul>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('news.index')}}">{{ trans('admin.news_all')}}</a></li>
                            </ul>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('news.gettrash')}}">{{ trans('admin.news_trash')}}</a></li>
                            </ul>
                        </li>


                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">{{ trans('admin.commonquestion')}}</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('commonquestions.index')}}">{{ trans('admin.commonquestion.show')}}</a></li>
                            </ul>
                        </li>

                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">{{ trans('admin.suggesions')}}</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('admin.suggestions')}}">{{ trans('admin.show_suggesions')}}</a></li>
                            </ul>
                        </li>



                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================ -->
         <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid ">

               