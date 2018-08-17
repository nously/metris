# Bismillah

Ada 3 web, web untuk periklanan, aplikasi web untuk user, dan API.

Folder API dan Open akan dipisah kalau sudah ada server dan domainname. (api.metris.xxx & open.metris.xxx)
Untuk sekarang, dijadikan satu dulu.

## 1. Memulai
- Clone repository ini.
- Di dalam folder <metris> ada folder <api> dab <open>
- Semua file dikerjakan di folder ini.
- Bisa pakai web framework.

## 2. Pull, kerjakan, Push
### a. pull
`git pull`
### b. kerjakan
`Melakukan perubahan....`
### c. push
`git add .
git commit -m "<apa yang baru saja dikerjakan?>"
git push`

## 3. Update Project di server
Setelah pekerjaan di-push ke repository ini, project yang ada di server belum berubah. Jadi (untuk sekarang) pull manual dari server. :pensive:
` ...buka git bash...

ssh metris@serveo.net -p 9945	# SSH ke server.
...masukkan password...		# Sampai sini kita sudah berinteraksi langsung dengan server.
cd /var/www/html/metris
git pull `

## 4. Hal hal lain yang berkaitan dengan server
### a. Folder root untuk web aplikasinya di server di mananya ya? (mirip kayak ..../htdocs/<nama-project> kalau biasa pakai XAMPP)
Ada di /var/www/html/metris

### b. Mau reload server?
` sudo service apache2 reload
...masukkan password... `

