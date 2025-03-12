<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">


    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1 mt-5">
        <!-- Dashboard -->
        <li class="menu-item active">
            <a href="<?php echo $domain ?>user/" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>



        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">Booking</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="<?php echo $domain ?>user/book.php" class="menu-link">
                        <div data-i18n="Without menu">All Booking</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?php echo $domain ?>user/booking/pending/" class="menu-link">
                        <div data-i18n="Without menu">Pending Booking</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?php echo $domain ?>user/booking/completed/" class="menu-link">
                        <div data-i18n="Without navbar">Compeleted Booking</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?php echo $domain ?>user/booking/declined/" class="menu-link">
                        <div data-i18n="Without navbar">Declined Booking</div>
                    </a>
                </li>

            </ul>


        </li>


        <li class="menu-item">
            <a href="<?php echo $domain ?>pricing/" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Pricing</div>
            </a>
        </li>


    </ul>

</aside>