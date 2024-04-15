<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Weekly Schedule</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <table id="schedule">
        <tr>
            <th>Time</th>
            <th>Monday</th>
            <th>Tuesday</th>
            <th>Wednesday</th>
            <th>Thursday</th>
            <th>Friday</th>
            <th>Saturday</th>
            <th>Sunday</th>
        </tr>
        <?php for ($hour = 10; $hour <= 17; $hour++): ?>
        <tr>
            <td><?= str_pad($hour, 2, '0', STR_PAD_LEFT) ?>:00</td>
            <?php for ($day = 1; $day <= 7; $day++): ?>
            <td></td>
            <?php endfor; ?>
        </tr>
        <?php endfor; ?>
    </table>
</body>
</html>
