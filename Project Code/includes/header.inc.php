<div class="menu-search">
        <nav class="main-menu">
          <ul>
            <li><a class="active" href="index1.php">home</a></li>
            <li>
              <a href="javascript:void(0)">লেখক</a>
              <ul>
                <li><a href="#">হুমায়ুন আহমেদ</a></li>
                <li><a href="#">মুহম্মদ জাফর ইকবাল</a></li>
                <li><a href="#">জহির রায়হান</a></li>
                <li><a href="#">সমরেশ মজুমদার</a></li>
                <li><a href="#">See More...</a></li>
              </ul>
            </li>
            <li>
              <a href="javascript:void(0)">বিষয়</a>
              <ul>
                <li><a href="#">উপন্যাস</a></li>
                <li><a href="#">গল্প</a></li>
                <li><a href="#">সায়েন্স ফিকশন</a></li>
                <li><a href="#">কবিতা</a></li>
                <li><a href="#">See More...</a></li>
              </ul>
            </li>
            <li>
              <a href="javascript:void(0)">প্রকাশনী</a>
              <ul>
                <li><a href="#">বাংলাপ্রকাশ</a></li>
                <li><a href="#">রাকিউট টেক পাবলিশিং</a></li>
                <li><a href="#">রুপা এ্যান্ড কো</a></li>
                <li><a href="#">স্টকপোলে বুকস</a></li>
                <li><a href="#">See More...</a></li>
              </ul>
            </li>
            <li><a class="text-danger" href="#">বইমেলা ২০১৯</a></li>
          </ul>
        </nav>

        <div class="loginForm">
        <form action="includes/search.inc.php" method="POST" onsubmit="return regValidation();">
          <input type="text" name= "search" placeholder="Search Here.." />
            <!-- <button type="button" name="button" value="search">Search</button> -->
            <input class="btn btn-outline-danger" type="submit" name="submit" value="search">
          </form>
        </div>
      </div>