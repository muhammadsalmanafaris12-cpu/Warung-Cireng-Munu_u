# Warung Cireng Munu'u

Aplikasi Laravel untuk Warung Cireng Munu'u - sistem manajemen menu dan pemesanan.

## 🚀 Deployment ke Railway

### Prerequisites

- Akun [Railway](https://railway.app)
- Akun GitHub
- Repository Git sudah dibuat

### Langkah Deployment:

#### 1. Push Code ke GitHub

```bash
git add .
git commit -m "Prepare for Railway deployment"
git push origin main
```

#### 2. Setup Railway Project

1. Login ke [Railway](https://railway.app)
2. Klik **"New Project"**
3. Pilih **"Deploy from GitHub repo"**
4. Pilih repository **Warung-Cireng-Munu_u**
5. Railway akan otomatis detect Laravel project

#### 3. Add MySQL Database

1. Di Railway dashboard, klik **"New"** → **"Database"** → **"Add MySQL"**
2. Railway akan auto-generate credentials
3. Database akan terhubung otomatis

#### 4. Set Environment Variables

Di Railway dashboard, buka **"Variables"** dan tambahkan:

```env
APP_NAME=Warung Cireng Munu'u
APP_ENV=production
APP_DEBUG=false
APP_KEY=base64:KJ8fgdFbuQUFd3IPQa+wRL4j7JBQkMM69GfUqgA7ILs=
```

**IMPORTANT:** Untuk production, generate APP_KEY baru dengan command:

```bash
php artisan key:generate --show
```

Railway akan otomatis set `DATABASE_URL` dari MySQL service.

#### 5. Deploy!

Railway akan otomatis:

- Install dependencies (composer & npm)
- Build assets (vite)
- Run migrations
- Start server

#### 6. Access Your App

Railway akan memberikan URL seperti:

```
https://warung-cireng-munu-u-production.up.railway.app
```

Update `APP_URL` di environment variables dengan URL ini.

---

## 📝 Default Admin Credentials

Setelah deploy, login dengan:

- **Email:** admin@example.com
- **Password:** password

**⚠️ PENTING:** Ganti password setelah login pertama kali!

---

## 🔧 Local Development

### Setup

```bash
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
npm run build
```

### Run Development Server

```bash
php artisan serve
npm run dev
```

---

## 📁 Struktur Project

- **Landing Page:** `/` - Halaman utama dengan menu cireng
- **Menu Page:** `/menu` - Halaman pemesanan untuk customer
- **Login Admin:** `/login` - Login untuk admin
- **Dashboard Admin:** `/dashboard` - Panel admin (protected)
- **Kelola Menu:** `/dashboard/kelola` - CRUD menu cireng
- **Kelola Orders:** `/dashboard/orders` - Manajemen pesanan

---

## 🛠️ Tech Stack

- **Laravel 12** - PHP Framework
- **Tailwind CSS 4** - CSS Framework
- **Vite** - Asset bundler
- **MySQL** - Database

---

## ⚠️ Important Notes

### File Uploads

Railway menggunakan **ephemeral filesystem** - file yang diupload akan hilang setiap deploy.

**Solusi:**

- Gunakan Cloudinary untuk image uploads
- Atau simpan image sebagai URL eksternal

### Database

- Railway MySQL service tetap persistent
- Data tidak akan hilang setelah deploy
- Backup database secara berkala

### Environment Variables

- Jangan commit file `.env` ke Git
- Selalu gunakan Railway dashboard untuk set variables
- Generate APP_KEY baru untuk production

---

## 📞 Support

Untuk pertanyaan atau issue, silakan buka GitHub Issues.

---

## 📄 License

MIT License
