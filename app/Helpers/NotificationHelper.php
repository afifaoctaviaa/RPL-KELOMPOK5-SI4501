<?php

use App\Models\Notification;

class NotificationHelper {

    public static function sendNotification($userId, $judul, $pesan) {
        Notification::create([
            'user_id' => $userId,
            'judul' => $judul,
            'pesan' => $pesan
        ]);
    }

}