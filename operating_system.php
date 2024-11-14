<h3>Operating System</h3>

<?php

class OperatingSystem {
    public function getDiskSpace() {
        $disk_path = PHP_OS_FAMILY === 'Windows' ? 'D:' : '/';
        $total_space = disk_total_space($disk_path);
        $free_space = disk_free_space($disk_path);
        $used_space = $total_space - $free_space;

        $total_gb = round($total_space / 1024 / 1024 / 1024, 2);
        $free_gb = round($free_space / 1024 / 1024 / 1024, 2);
        $used_db = round($used_space / 1024 / 1024 / 1024, 2);

        return [
            'total' => $total_gb. ' GB',
            'free' => $free_gb. ' GB',
            'used' => $used_db. ' GB',
        ];
    }
}

$os = new OperatingSystem();
$disk_info = $os->getDiskSpace();

echo "Total Sapace: {$disk_info['total']} <br />";
echo "Free Sapace: {$disk_info['free']} <br />";
echo "Used Sapace: {$disk_info['used']} <br />";
?>