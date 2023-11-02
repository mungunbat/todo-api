INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_08_13_170637_create_todo_table', 1);


INSERT INTO `todo` (`id`, `deadline`, `title`, `content`, `pic`, `create_user_id`, `publish_type`, `status`, `created_at`, `updated_at`) VALUES
(1, '2023-05-09 09:26:57', 'title1', 'content1', 'pic1', 1, '01', '01', '2023-05-09 09:26:57', '2023-05-09 09:30:40'),
(2, '2023-05-09 09:26:57', 'title2', 'content2', 'pic2', 1, '01', '01', '2023-05-09 09:26:57', '2023-05-09 09:26:57'),
(4, '2023-05-09 09:26:57', 'title3', 'content3', 'pic3', 1, '01', '01', '2023-05-09 09:28:19', '2023-05-09 09:28:19');


INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `company_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'username1', 'user@example.com', NULL, 'password', 1, NULL, '2023-05-09 09:26:57', '2023-05-09 09:30:40');


INSERT INTO `company` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'company1', '2023-05-09 09:26:57', '2023-05-09 09:30:40');


INSERT INTO `roles` (`id`, `user_id`, `company_id`, `role`, `created_at`, `updated_at`) VALUES
(1, 1, 1, "01", '2023-05-09 09:26:57', '2023-05-09 09:30:40');
