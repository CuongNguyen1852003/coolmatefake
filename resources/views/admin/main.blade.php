<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.parts.head')
</head>
<body>
    <section class="admin">
        <div class="row-grid">
            <div class="admin-sidebar">
                <div class="admin-sidebar-top">
                    <img src="/Admin/asset/images/coolmate.png" alt="">
                </div>
                <div class="admin-sidebar-content">
                    @include('admin.parts.sidebar')
                </div>
            </div>
            <!-- admin content -->
            <div class="admin-content">
                    @include('admin.parts.header')
                </div>

                <div class="admin-content-main">
                    <div class="admin-content-main-title">
                        <h1>Dashboard</h1>
                    </div>
                    <div class="admin-content-main-content">
                        <!-- Nội dung nằm ở đây -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        @include('admin.parts.footer')
    </footer>
    
</body>
</html>