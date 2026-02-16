# Hostinger Deployment Guide

## Files Added for Deployment

1. **`.htaccess`** - Root htaccess file that redirects all requests to public folder
2. **`index.php`** - Root index file that serves as entry point

## Deployment Steps

### 1. Upload Files
- Upload the entire `laravel_migration` folder to your Hostinger public_html directory
- Or upload to a subdirectory if needed

### 2. Configure Environment
- Rename `.env.example` to `.env`
- Update database credentials in `.env`:
  ```
  DB_CONNECTION=mysql
  DB_HOST=localhost
  DB_PORT=3306
  DB_DATABASE=your_database_name
  DB_USERNAME=your_database_user
  DB_PASSWORD=your_database_password
  ```
- Update APP_URL to your domain:
  ```
  APP_URL=https://yourdomain.com
  ```

### 3. Set Permissions
Run these commands via SSH or File Manager:
```bash
chmod -R 755 storage
chmod -R 755 bootstrap/cache
```

### 4. Generate Application Key
Via SSH:
```bash
php artisan key:generate
```

Or manually add a key to `.env`:
```
APP_KEY=base64:YOUR_GENERATED_KEY_HERE
```

### 5. Run Migrations (if needed)
```bash
php artisan migrate
```

### 6. Clear Cache
```bash
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear
```

## Important Notes

- The `.htaccess` file automatically redirects all requests to the `public` folder
- Make sure `mod_rewrite` is enabled on your server
- SSL is enforced (HTTP to HTTPS redirect)
- Sensitive files (.env, composer.json) are protected from direct access
- Directory browsing is disabled for security

## Troubleshooting

### 500 Internal Server Error
- Check file permissions (755 for directories, 644 for files)
- Verify `.env` file exists and has correct database credentials
- Check error logs in `storage/logs/laravel.log`

### Routes Not Working
- Verify `.htaccess` file is uploaded
- Check if mod_rewrite is enabled
- Clear route cache: `php artisan route:clear`

### Assets Not Loading
- Check if public folder is accessible
- Verify asset paths in blade files
- Run: `php artisan storage:link` if using storage

## File Structure
```
laravel_migration/
├── .htaccess          (redirects to public/)
├── index.php          (entry point)
├── public/            (Laravel public folder)
│   ├── .htaccess
│   ├── index.php
│   └── assets/
├── app/
├── config/
├── database/
├── resources/
└── storage/
```

## Support
For issues, check Laravel logs at `storage/logs/laravel.log`
