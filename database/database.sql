DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
    `id` BIGINT UNSIGNED,
    `name` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `email_verified_at` DATETIME,
    `password` VARCHAR(255) NOT NULL,
    `remember_token` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES ('1', 'Admin SMK Al Falah', 'admin@alfalah.sch.id', NULL, '$2y$12$Q5gFfwk6fCvtlPtFny20EuqovwQddh7oMj3MtjPE5rFlmKS91e9Ye', NULL, '2026-09-07 08:33:22', '2026-09-07 08:33:51');

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens` (
    `email` VARCHAR(255),
    `token` VARCHAR(255) NOT NULL,
    `created_at` DATETIME,
    PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions` (
    `id` VARCHAR(255),
    `user_id` INT,
    `ip_address` VARCHAR(255),
    `user_agent` TEXT,
    `payload` TEXT NOT NULL,
    `last_activity` INT NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES ('yykm2UrTZdouaQ3plHWRcwxzTf59IRzbmgahaVDs', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.131.0 Chrome/148.0.7778.280 Electron/42.7.0 Safari/537.36', 'eyJfdG9rZW4iOiJsMVFUVUhqT2ZhRUdQa0JOQllBSHNVTnRzM01pRE5ma1d5VFhVUjVtIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MDAwIiwicm91dGUiOiJob21lIn0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', '1789093277');
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES ('Uu6tAqhyR2c0h5sk5XV0pRSRSqqCyTb5EX2mrLRt', '1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/152.0.0.0 Safari/537.36 Edg/152.0.0.0', 'eyJfdG9rZW4iOiJNbVptWG11MHN3Uk82azRrVWZ0UDhSTk1Ld2szNUU1NFkxbVhKaElVIiwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119LCJfcHJldmlvdXMiOnsidXJsIjoiaHR0cDpcL1wvMTI3LjAuMC4xOjgwMDBcL2FkbWluXC9wZW5kYWZ0YXIiLCJyb3V0ZSI6ImFkbWluLnBlbmRhZnRhciJ9LCJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI6MX0=', '1789100240');
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES ('bbsDABS97IHqIEsZUoHOUvcRTvorHPpBExQmqtug', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/152.0.0.0 Safari/537.36 Edg/152.0.0.0', 'eyJfdG9rZW4iOiJLS0RZNk9rZHZqcHNnQ0c0WkZZcWxPeE9SY3BKMzlTcUliM0VCcVNFIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MDAwIiwicm91dGUiOiJob21lIn0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', '1789231254');
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES ('VzftdpUqMDfwm14lpJHuBajBaaw9JBS45za9phVr', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36 Edg/153.0.0.0', 'eyJfdG9rZW4iOiJPQ1ZTeWhpOG15MUt6NU5HdDJFZlZwdU1qVGw5bVdTb3lVTjh6M3F1IiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MDAwXC9iZXJpdGEta2VnaWF0YW4iLCJyb3V0ZSI6ImJlcml0YS5pbmRleCJ9LCJfZmxhc2giOnsib2xkIjpbXSwibmV3IjpbXX19', '1789377296');

DROP TABLE IF EXISTS `cache`;
CREATE TABLE `cache` (
    `key` VARCHAR(255),
    `value` TEXT NOT NULL,
    `expiration` INT NOT NULL,
    PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

DROP TABLE IF EXISTS `cache_locks`;
CREATE TABLE `cache_locks` (
    `key` VARCHAR(255),
    `owner` VARCHAR(255) NOT NULL,
    `expiration` INT NOT NULL,
    PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE `jobs` (
    `id` BIGINT UNSIGNED,
    `queue` VARCHAR(255) NOT NULL,
    `payload` TEXT NOT NULL,
    `attempts` INT NOT NULL,
    `reserved_at` INT,
    `available_at` INT NOT NULL,
    `created_at` INT NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

DROP TABLE IF EXISTS `job_batches`;
CREATE TABLE `job_batches` (
    `id` VARCHAR(255),
    `name` VARCHAR(255) NOT NULL,
    `total_jobs` INT NOT NULL,
    `pending_jobs` INT NOT NULL,
    `failed_jobs` INT NOT NULL,
    `failed_job_ids` TEXT NOT NULL,
    `options` TEXT,
    `cancelled_at` INT,
    `created_at` INT NOT NULL,
    `finished_at` INT,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
    `id` BIGINT UNSIGNED,
    `uuid` VARCHAR(255) NOT NULL,
    `connection` VARCHAR(255) NOT NULL,
    `queue` VARCHAR(255) NOT NULL,
    `payload` TEXT NOT NULL,
    `exception` TEXT NOT NULL,
    `failed_at` DATETIME NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

DROP TABLE IF EXISTS `ekstrakurikuler_fotos`;
CREATE TABLE `ekstrakurikuler_fotos` (
    `id` BIGINT UNSIGNED,
    `ekstrakurikuler` VARCHAR(255) NOT NULL,
    `foto` VARCHAR(255) NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
INSERT INTO `ekstrakurikuler_fotos` (`id`, `ekstrakurikuler`, `foto`, `created_at`, `updated_at`) VALUES ('1', 'Pramuka', '1788754600.jpg', '2026-09-07 04:16:40', '2026-09-07 04:16:40');
INSERT INTO `ekstrakurikuler_fotos` (`id`, `ekstrakurikuler`, `foto`, `created_at`, `updated_at`) VALUES ('2', 'Pramuka', '1788763272.png', '2026-09-07 06:41:12', '2026-09-07 06:41:12');
INSERT INTO `ekstrakurikuler_fotos` (`id`, `ekstrakurikuler`, `foto`, `created_at`, `updated_at`) VALUES ('4', 'Paskibra', '1788763788.jpg', '2026-09-07 06:49:48', '2026-09-07 06:49:48');
INSERT INTO `ekstrakurikuler_fotos` (`id`, `ekstrakurikuler`, `foto`, `created_at`, `updated_at`) VALUES ('5', 'Keagamaan', '1788763905.jpg', '2026-09-07 06:51:45', '2026-09-07 06:51:45');
INSERT INTO `ekstrakurikuler_fotos` (`id`, `ekstrakurikuler`, `foto`, `created_at`, `updated_at`) VALUES ('7', 'Keagamaan', '1788765433.jpg', '2026-09-07 07:17:13', '2026-09-07 07:17:13');
INSERT INTO `ekstrakurikuler_fotos` (`id`, `ekstrakurikuler`, `foto`, `created_at`, `updated_at`) VALUES ('8', 'Keagamaan', '1788765493.jpg', '2026-09-07 07:18:13', '2026-09-07 07:18:13');

DROP TABLE IF EXISTS `pendaftars`;
CREATE TABLE `pendaftars` (
    `id` BIGINT UNSIGNED,
    `nama` VARCHAR(255) NOT NULL,
    `nisn` VARCHAR(255),
    `sekolah_asal` VARCHAR(255),
    `jenis_kelamin` VARCHAR(255),
    `tempat_lahir` VARCHAR(255),
    `tanggal_lahir` DATE,
    `nama_orang_tua` VARCHAR(255),
    `no_hp` VARCHAR(255),
    `alamat` TEXT,
    `jurusan` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
INSERT INTO `pendaftars` (`id`, `nama`, `nisn`, `sekolah_asal`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `nama_orang_tua`, `no_hp`, `alamat`, `jurusan`, `created_at`, `updated_at`) VALUES ('2', 'sifa khoeriah', '234435', 'mts puspa', NULL, 'tasikmalaya', NULL, 'ibu bapa', '356252355454', 'puspa', NULL, '2026-09-09 07:17:00', '2026-09-09 07:17:00');

DROP TABLE IF EXISTS `gurus`;
CREATE TABLE `gurus` (
    `id` BIGINT UNSIGNED,
    `nama` VARCHAR(255) NOT NULL,
    `mata_pelajaran` VARCHAR(255) NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
INSERT INTO `gurus` (`id`, `nama`, `mata_pelajaran`, `created_at`, `updated_at`) VALUES ('1', 'Ibu Sifa khoeriyah', 'PPAI', '2026-09-07 09:38:45', '2026-09-07 09:38:45');

DROP TABLE IF EXISTS `program_keahlian_fotos`;
CREATE TABLE `program_keahlian_fotos` (
    `id` BIGINT UNSIGNED,
    `jurusan` VARCHAR(255) NOT NULL,
    `foto` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
INSERT INTO `program_keahlian_fotos` (`id`, `jurusan`, `foto`, `created_at`, `updated_at`) VALUES ('1', 'tsm', 'program-keahlian/BSjRyAOg7KvccjjwKO0S8zHoSST62JE2GKsAKQLk.jpg', '2026-09-09 03:27:13', '2026-09-09 03:27:13');
INSERT INTO `program_keahlian_fotos` (`id`, `jurusan`, `foto`, `created_at`, `updated_at`) VALUES ('2', 'tbsm', 'program-keahlian/vq7MBzUE3TPW3BcilDChR0XULA9HMFCD80tbBk8z.jpg', '2026-09-09 03:41:11', '2026-09-09 03:41:11');
INSERT INTO `program_keahlian_fotos` (`id`, `jurusan`, `foto`, `created_at`, `updated_at`) VALUES ('3', 'dpb', 'program-keahlian/jZr3aN9deKEvPh6QKHEODAEyeN23cOa7GPS7yCzw.jpg', '2026-09-09 03:41:28', '2026-09-09 03:41:28');
INSERT INTO `program_keahlian_fotos` (`id`, `jurusan`, `foto`, `created_at`, `updated_at`) VALUES ('4', 'rpl', 'program-keahlian/K1rM209nucEgeSmWw5ThKESR9vULiOFKd4U3xiKz.jpg', '2026-09-09 03:41:41', '2026-09-09 03:41:41');
INSERT INTO `program_keahlian_fotos` (`id`, `jurusan`, `foto`, `created_at`, `updated_at`) VALUES ('5', 'ak', 'program-keahlian/JFMqsn5zUFdH8hgKwWA5EWjrNsTPyxFvPk0ZB7zN.jpg', '2026-09-09 03:41:59', '2026-09-09 03:41:59');
INSERT INTO `program_keahlian_fotos` (`id`, `jurusan`, `foto`, `created_at`, `updated_at`) VALUES ('6', 'mplb', 'program-keahlian/XvlkSGrTxljgl6c3AnseMbxTEdCnYt5zwSXmw3FA.jpg', '2026-09-09 03:42:24', '2026-09-09 03:42:24');
INSERT INTO `program_keahlian_fotos` (`id`, `jurusan`, `foto`, `created_at`, `updated_at`) VALUES ('7', 'dkv', 'program-keahlian/7dAQaYKZoA7QchQcb9L2BcpysDIbrHocD3e3AY5J.jpg', '2026-09-09 03:42:41', '2026-09-09 03:42:41');
INSERT INTO `program_keahlian_fotos` (`id`, `jurusan`, `foto`, `created_at`, `updated_at`) VALUES ('8', 'tkj', 'program-keahlian/1J9V2ehXxKKZi9AKjHGfj0pju14TQ9NLWBeUjnKB.jpg', '2026-09-09 03:42:42', '2026-09-09 03:42:42');

DROP TABLE IF EXISTS `galeris`;
CREATE TABLE `galeris` (
    `id` BIGINT UNSIGNED,
    `judul` VARCHAR(255) NOT NULL,
    `deskripsi` TEXT,
    `foto` VARCHAR(255) NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
INSERT INTO `galeris` (`id`, `judul`, `deskripsi`, `foto`, `created_at`, `updated_at`) VALUES ('1', 'Kegiatan SPMB', 'kegiatan spmb', 'galeri/Ki8hsCCneajzxkwHIV1KEaGww22Q1C6eiVQYTNNC.jpg', '2026-09-09 04:02:47', '2026-09-09 06:46:43');

DROP TABLE IF EXISTS `beritas`;
CREATE TABLE `beritas` (
    `id` BIGINT UNSIGNED,
    `judul` VARCHAR(255) NOT NULL,
    `kategori` VARCHAR(255),
    `isi` TEXT NOT NULL,
    `foto` VARCHAR(255),
    `tanggal` DATE NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
INSERT INTO `beritas` (`id`, `judul`, `kategori`, `isi`, `foto`, `tanggal`, `created_at`, `updated_at`) VALUES ('1', 'Terampil Berkarakter', 'Informasi Pendidikan', '🌍✨ **Learning English, Making Connections!**

Belajar Bahasa Inggris jadi lebih seru dengan pengalaman berinteraksi langsung bersama orang dari luar negeri. 🇬🇧📚

Terus belajar, terus berkembang! 💙', 'berita/eruIw3LN1Oo82BI5zig8GT6KmbMbzFoccISUI7ao.jpg', '2026-08-11 00:00:00', '2026-09-09 04:55:20', '2026-09-10 03:47:34');
INSERT INTO `beritas` (`id`, `judul`, `kategori`, `isi`, `foto`, `tanggal`, `created_at`, `updated_at`) VALUES ('2', 'Kegiatan MPLS SMK Al Falah Tanjungjay', NULL, '💙 **Selamat datang di keluarga besar SMK Al Falah Tanjungjaya!**

Mari awali perjalanan baru dengan semangat, kebersamaan, dan pengalaman yang menyenangkan. ✨

**Selamat mengikuti MPLS!**', 'berita/vwoXNNaZDM7aTjKGLyOdMHbkBr43gKqocQukmiwL.jpg', '2026-07-11 00:00:00', '2026-09-10 03:35:42', '2026-09-10 03:35:42');
INSERT INTO `beritas` (`id`, `judul`, `kategori`, `isi`, `foto`, `tanggal`, `created_at`, `updated_at`) VALUES ('3', 'Kegiatan MPLS SMK Al Falah Tanjungjay', 'Kegiatan sekolah', '✨ **Selamat datang, peserta didik baru!** ✨

Awali langkah baru dengan semangat, kenali lingkungan sekolah, dan bangun cerita baru bersama. 💙

**Selamat mengikuti MPLS!**', 'berita/DBUmuKC5gsW5HXK2LbIH9JEyidSWWGtQIGPRRnUH.jpg', '2026-07-11 00:00:00', '2026-09-10 03:36:49', '2026-09-10 03:36:49');
INSERT INTO `beritas` (`id`, `judul`, `kategori`, `isi`, `foto`, `tanggal`, `created_at`, `updated_at`) VALUES ('4', 'Kegiatan MPLS SMK Al Falah Tanjungjay', 'Kegiatan sekolah', '💙 **MPLS Hari Ke-3!** ✨

Semakin mengenal sekolah, semakin banyak pengalaman, dan semakin erat kebersamaan.
Tetap semangat mengikuti setiap kegiatan! 📚🙌

#MPLS #SMKAlFalahTanjungjaya', 'berita/jemXzIJHdqEvA0MWvMnDfubkAtlLwo4mEPbkZzwN.jpg', '0026-08-11 00:00:00', '2026-09-10 03:49:33', '2026-09-10 03:49:33');
INSERT INTO `beritas` (`id`, `judul`, `kategori`, `isi`, `foto`, `tanggal`, `created_at`, `updated_at`) VALUES ('5', 'Kegiatan MPLS SMK Al Falah Tanjungjay', 'Kegiatan sekolah', '💙 **MPLS Day 2!** ✨

Hari kedua, semakin seru, semakin banyak pengalaman, dan semakin dekat dengan lingkungan sekolah.
Tetap semangat dan nikmati setiap prosesnya! 📚🙌

#MPLS #MPLSDay2 #SMKAlFalahTanjungjaya', 'berita/sDPubtD6BAXVl4i7SSwC7iTBeNXUOYbnHFPTszqA.jpg', '0026-08-11 00:00:00', '2026-09-10 06:27:34', '2026-09-10 06:27:34');

DROP TABLE IF EXISTS `alumnis`;
CREATE TABLE `alumnis` (
    `id` BIGINT UNSIGNED,
    `nama` VARCHAR(255) NOT NULL,
    `jurusan` VARCHAR(255) NOT NULL,
    `status` VARCHAR(255) NOT NULL,
    `motivasi` TEXT NOT NULL,
    `foto` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
INSERT INTO `alumnis` (`id`, `nama`, `jurusan`, `status`, `motivasi`, `foto`, `created_at`, `updated_at`) VALUES ('1', 'Aldi firmansyah', 'TKJ', 'Kuliah  Teknik elektro', 'Ilmu yang saya dapatkan di sekolah menjadi bekal untuk menghadapi dunia kerja. Jangan takut untuk belajar dan mencoba hal baru."', 'alumni/xOfHM2SKR6voPG01nzucZW16U0QSJXzhOPVQuRrz.jpg', '2026-09-09 07:39:28', '2026-09-10 02:29:42');

