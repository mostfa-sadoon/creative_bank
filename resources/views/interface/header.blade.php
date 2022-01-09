  <!---- ======= Start Nav ======= ---->

  <nav id="navbar_top" class="navbar navbar-expand-lg navbar-dark bg-dark">

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  <a class="navbar-brand" href="#">بنك <span>الأفكار</span> </a>

</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <a class="navbar-brand" href="#">بنك <span>الأفكار</span> </a>

    <ul class="navbar-nav my-2 my-lg-0">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.html">الرئيسية</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="sendIdea.html">أرسل فكرتك</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="#">كيف يعمل</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="#">كم سأربح</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="bestIdeas.html">مبدعين</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="commonQuestions.html">الأسئلة الشائعة</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="news.html">آخر الاخبار</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="about.html">عن البنك</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="#">تواصل معنا</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="#">المقترحات</a>
        </li>

    </ul>
    <form class="form-inline mr-auto">
        <input class="form-control mr-sm-2" type="search" placeholder="بحث" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">تسجيل الدخول</button>

        <a href="{{route('user.signout')}}">log out</a>


    </form>


</div>

</nav>

<!---- ======= End Nav ======= ---->