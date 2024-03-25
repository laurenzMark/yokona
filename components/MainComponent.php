<!-- MAIN COMPONENT TABS -->



<!-- MAIN COMPONENT CONTAINER -->
<div class="main-component">


    <!-- MAIN COMPONENT SIDEBAR -->
    <div class="mc-sidebar">
        <button class="mc-tab-button" data-for-tab="dashboard">Dashboard</button>
        <button class="mc-tab-button" data-for-tab="products">Products</button>
        <button class="mc-tab-button" data-for-tab="orders">Orders</button>
        <button class="mc-tab-button" data-for-tab="monitoring">Monitoring</button>
        <button class="mc-tab-button" data-for-tab="reports">Reports</button>
        <button class="mc-tab-button" data-for-tab="customers">Customers</button>
        <button class="mc-tab-button" data-for-tab="employees">Employees</button>
    </div>
    <!-- END OF MAIN MAIN COMPONENT SIDEBAR -->




    <!-- TAB CONTENTS -->

    <!-- DASHBOARD -->
    <div class="mc-tab-content" data-tab="dashboard">
        <?php
        include 'contents/DashboardContent.php';
        ?>
    </div>

    <!-- PRODUCTS -->
    <div class="mc-tab-content" data-tab="products">
        <?php
        include 'contents/ProductsContent.php';
        ?>
    </div>

    <!-- ORDERS -->
    <div class="mc-tab-content" data-tab="orders">
        <?php
        include 'contents/OrdersContent.php';
        ?>
    </div>

    <!-- MONITORING -->
    <div class="mc-tab-content" data-tab="monitoring">
        <?php
        include 'contents/MonitoringContent.php';
        ?>
    </div>

    <!-- REPORTS -->
    <div class="mc-tab-content" data-tab="reports">
        <?php
        include 'contents/ReportsContent.php';
        ?>
    </div>

    <!-- CUSTOMERS -->
    <div class="mc-tab-content" data-tab="customers">
        <?php
        include 'contents/CustomersContent.php';
        ?>
    </div>

    <!-- EMPLOYEES -->
    <div class="mc-tab-content" data-tab="employees">
        <?php
        include 'contents/EmployeesContent.php';
        ?>
    </div>
    <!-- END OF TAB CONTENTS -->

</div>