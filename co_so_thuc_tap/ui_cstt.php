<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>

    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&amp;display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    />

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <link rel="stylesheet" href="./ui_cstt.css" />
    <style></style>
  </head>
  <body>
    <div class="sidebar" id="sidebar">
      <button class="toggle-btn" onclick="toggleSidebar()">☰</button>
      <div class="icons">
        <i class="fa-solid fa-circle-user"></i>
      </div>

    <div class="menu">
        <hr />
        <ul>
         <h2>Quản lý</h2>
      
         <li><i class="fa-brands fa-windows"></i> <a href="../co_so_thuc_tap/ui_cstt.php">cstttt..</a></li>
         <li><i class="fa-brands fa-windows"></i> <a href="../co_so_thuc_tap/ui_capnhat_cty.php">Đăng ký thông tin cty</a></li>
         <li><i class="fa-brands fa-windows"></i> <a href="../co_so_thuc_tap/ui_capnhat_tt.php">Cập nhật thông tin tuyển dụng</a></li>
         <li><i class="fa-brands fa-windows"></i> <a href="../co_so_thuc_tap/ui_cv.php">Quản lý DS TTS tại công ty</a></li>
         <li><i class="fa-brands fa-windows"></i> <a href="#">Theo dõi & đánh giá quá trình TT</a></li>
         <li><i class="fa-brands fa-windows"></i> <a href="#">Xác nhận hoàn thành TT</a></li>

      
        </ul>
    </div>
   </div>

    <div class="content" id="content">
      <div class="header">
        <div class="search-bar">
          <input type="text" placeholder="Tìm kiếm..." />
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
            <circle cx="11" cy="11" r="8"></circle>
            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
          </svg>
        </div>
        <div class="profile">
          <span>Nguyễn Thị My</span>
          <img src="profile.jpg" alt="Ảnh đại diện" />
        </div>
      </div>

      <div class="dashboard-content">
        <div class="card">
          <h3>Thông tin Công ty</h3>
          <p>Tên: Công ty TNHH ABC</p>
          <p>Địa chỉ: 123 Đường Nguyễn Trãi, Hà Nội</p>
          <p>Số nhân sự: 47</p>
        </div>
        <div class="card">
          <h3>Cơ sở thực tập</h3>
          <p>Số lượng cơ sở thực tập liên kết: 10</p>
          <p>Ngành nghề chính: Công nghệ thông tin, Kế toán, Quản trị kinh doanh</p>
          <canvas id="internshipChart"></canvas>
        </div>
        <div class="card">
          <h3>Thống kê ngành nghề</h3>
          <p>Công nghệ thông tin: 35%</p>
          <p>Kế toán - Kiểm toán: 25%</p>
          <p>Quản trị kinh doanh: 20%</p>
          <p>Kỹ thuật: 20%</p>
          <canvas id="jobChart"></canvas>
        </div>
      </div>
    </div>

    <script>
      function toggleSidebar() {
        const sidebar = document.getElementById("sidebar");
        const content = document.getElementById("content");
        sidebar.classList.toggle("collapsed");
        content.classList.toggle("collapsed");
      }

      new Chart(document.getElementById('internshipChart'), {
        type: 'pie',
        data: {
          labels: ['CNTT', 'Kế toán', 'Quản trị KD'],
          datasets: [{
            data: [50, 30, 20],
            backgroundColor: ['#3498db', '#e74c3c', '#2ecc71']
          }]
        }
      });

      new Chart(document.getElementById('jobChart'), {
        type: 'bar',
        data: {
          labels: ['CNTT', 'Kế toán', 'QTKD', 'Kỹ thuật'],
          datasets: [{
            label: 'Phần trăm',
            data: [35, 25, 20, 20],
            backgroundColor: ['#1abc9c', '#f39c12', '#9b59b6', '#e67e22']
          }]
        },
        options: {
          responsive: true,
          scales: {
            y: { beginAtZero: true }
          }
        }
      });
    </script>
  </body>
</html>