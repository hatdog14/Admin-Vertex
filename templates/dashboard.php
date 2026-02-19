<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Vertex | Dashboard</title>
    <link rel="stylesheet" href="assets/css/global.css">
</head>
<body>

<div class="container">
    <header style="margin-bottom: 2rem; display: flex; justify-content: space-between; align-items: center;">
        <div>
            <h1>Admin-Vertex</h1>
            <p style="color: var(--secondary-color);">Attendance Management System</p>
        </div>
        <a href="#" class="btn btn-primary">+ Log Attendance</a>
    </header>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem;">
        <div class="card">
            <h3 style="color: var(--secondary-color); font-size: 0.875rem;">Total Employees</h3>
            <p style="font-size: 1.5rem; font-weight: 700;">24</p>
        </div>
        <div class="card">
            <h3 style="color: var(--secondary-color); font-size: 0.875rem;">Present Today</h3>
            <p style="font-size: 1.5rem; font-weight: 700; color: var(--success);">18</p>
        </div>
        <div class="card">
            <h3 style="color: var(--secondary-color); font-size: 0.875rem;">Late Arrivals</h3>
            <p style="font-size: 1.5rem; font-weight: 700; color: #ef4444;">3</p>
        </div>
    </div>

    <div class="card" style="margin-top: 2rem;">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem;">
            <h2>Recent Activity</h2>
            <div style="width: 300px;">
                <input type="text" placeholder="Search employee...">
            </div>
        </div>

        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Employee Name</th>
                        <th>Time In</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($attendance as $record): ?>
                    <tr>
                        <td style="font-weight: 600;"><?php echo $record['name']; ?></td>
                        <td><?php echo $record['time_in']; ?></td>
                        <td>
                            <span style="padding: 4px 8px; border-radius: 4px; font-size: 0.75rem; background: #f1f5f9;">
                                <?php echo $record['status']; ?>
                            </span>
                        </td>
                        <td>
                            <a href="#" style="color: var(--primary-color); text-decoration: none; font-size: 0.875rem;">Edit</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>