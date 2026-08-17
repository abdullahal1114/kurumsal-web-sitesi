## AL.TECHNOLOGY — Kurumsal Web Sitesi

AL.TECHNOLOGY için geliştirilmiş, **Laravel & Livewire** tabanlı kurumsal web sitesidir.

Kurumsal tanıtım sayfaları, ürün kataloğu, haberler, referanslar ve sayfa yenilemeden çalışan fiyat teklifi / iletişim formlarını içeren, modern ve tamamen reaktif bir arayüz sunar.

## 🚀 Projenin Özellikleri

* **Kurumsal Sayfalar:** Hakkımızda, Vizyon-Misyon, Haberler ve Belgeler gibi alt sayfalara sahip kapsamlı kurumsal bölüm.
* **Dinamik Ürün Kataloğu:** Kategoriye göre anlık filtrelenebilen (Yazılım, Bulut, Güvenlik, Donanım, Hizmet) ürün listeleme ekranı.
* **Haber Filtreleme Sistemi:** Kategori bazlı, sayfa yenilemeden çalışan haber/duyuru filtreleme.
* **Fiyat Teklifi Modalı:** Ziyaretçilerin ürün/hizmet bazlı teklif talebinde bulunabildiği, Livewire ile yönetilen form ve modal yapısı.
* **İletişim Modalı:** Ayrı, sade bir iletişim formu ile ziyaretçilerden mesaj alma ve veritabanına kaydetme.
* **Tam Reaktif Arayüz:** Sayfa yenilemeden çalışan formlar, filtreler ve geçiş animasyonları.

## 🛠️ Kullanılan Teknolojiler

* **Backend:** Laravel
* **Reaktif Bileşenler:** Livewire (Volt)
* **İstemci Etkileşimleri:** Alpine.js
* **Tasarım:** Tailwind CSS
* **Build Aracı:** Vite
* **Veritabanı:** MySQL

## 📖 Uygulama Kullanım Kılavuzu

1. **Giriş Sayfası:** `/login` adresinden e-posta ve şifre bilgileriyle sisteme giriş yapılır. Zaten oturum açmış bir kullanıcı bu sayfaya erişmeye çalıştığında otomatik olarak `/dashboard` sayfasına yönlendirilir.
2. **Ana Sayfa:** Siteye girildiğinde kurumsal navigasyon menüsü üzerinden Kurumsal, Referanslar, Ürünler ve Mağaza bölümlerine ulaşılabilir.
3. **Kurumsal Sayfası:** Şirket hakkında genel bilgiler, istatistik şeridi (yıl deneyim, tamamlanan proje, müşteri memnuniyeti vb.) ve Hakkımızda, Vizyon-Misyon, Haberler, Belgeler alt sayfalarına yönlendiren kartları içerir.
4. **Hakkımızda:** Şirketin kuruluş hikayesi, değerleri ve zaman çizelgesi üzerinden büyüme sürecinin anlatıldığı sayfadır. Sayfa sonundaki "BİZE ULAŞIN" butonuyla iletişim formu açılabilir.
5. **Vizyon - Misyon:** Şirketin vizyon ve misyon ifadelerinin yanı sıra stratejik odak alanlarının (yapay zeka, bulut, güvenlik vb.) listelendiği sayfadır.
6. **Haberler:** Kategori butonlarına (Altyapı, Yapay Zeka, Ar-Ge, Etkinlik) tıklayarak ilgili haberleri anında filtreleyebilirsiniz. Manşet haber, seçilen filtreden bağımsız olarak her zaman sayfanın üstünde görüntülenir.
7. **Belgeler:** Şirketin akreditasyon ve kurumsal dokümanlarının listelendiği sayfadır.
8. **Referanslar:** Şirketin daha önce çalıştığı müşteri ve projelerin sergilendiği sayfadır.
9. **Ürünler:** Üstteki kategori filtrelerine (Yazılım, Bulut, Güvenlik, Donanım, Hizmet) tıklayarak ilgili ürünleri anında listeleyebilirsiniz. Her ürün kartındaki "TEKLİF AL" bağlantısı, ürün adı ve hizmet kategorisi otomatik doldurulmuş şekilde fiyat teklifi formunu açar.
10. **Mağaza:** Satın alınabilir ürün ve hizmetlerin listelendiği e-ticaret odaklı sayfadır.
11. **Fiyat Teklifi Talebi:** Herhangi bir sayfadaki "FİYAT TEKLİFİ AL" butonuna veya bir ürün kartındaki "TEKLİF AL" bağlantısına tıklayarak teklif formunu açabilirsiniz. Ad, telefon, şirket, e-posta, ilgilenilen hizmet ve mesaj bilgileri veritabanına kaydedilir.
12. **İletişim:** Hakkımızda sayfasındaki "BİZE ULAŞIN" butonu üzerinden sade bir iletişim formu açılır; ad, e-posta ve mesaj bilgileriniz veritabanına kaydedilir.

## 📸 Uygulama Ekran Görüntüleri

### 1. Giriş Sayfası

<img width="800" height="500" alt="giris-sayfasi" src="docs/screenshots/giris-sayfasi.png" />

### 2. Ana Sayfa

<p float="left">
  <img width="266" alt="ana-sayfa-1" src="docs/screenshots/ana-sayfa-1.png" />
  <img width="266" alt="ana-sayfa-2" src="docs/screenshots/ana-sayfa-2.png" />
  <img width="266" alt="ana-sayfa-3" src="docs/screenshots/ana-sayfa-3.png" />
</p>

### 3. Kurumsal Sayfası

<p float="left">
  <img width="266" alt="ana-sayfa-1" src="docs/screenshots/kurumsal-1.png" />
  <img width="266" alt="ana-sayfa-2" src="docs/screenshots/kurumsal-2.png" />
</p>

### 4. Hakkımızda

<p float="left">
  <img width="266" alt="ana-sayfa-1" src="docs/screenshots/hakkimizda-1.png" />
  <img width="266" alt="ana-sayfa-2" src="docs/screenshots/hakkimizda-2.png" />
  <img width="266" alt="ana-sayfa-3" src="docs/screenshots/hakkimizda-3.png" />
</p>

### 5. Vizyon - Misyon

<p float="left">
  <img width="266" alt="ana-sayfa-1" src="docs/screenshots/vizyon-misyon-1.png" />
  <img width="266" alt="ana-sayfa-2" src="docs/screenshots/vizyon-misyon-2.png" />
  <img width="266" alt="ana-sayfa-3" src="docs/screenshots/vizyon-misyon-3.png" />
</p>

### 6. Haberler

<p float="left">
  <img width="266" alt="ana-sayfa-1" src="docs/screenshots/haberler-1.png" />
  <img width="266" alt="ana-sayfa-2" src="docs/screenshots/haberler-2.png" />
  <img width="266" alt="ana-sayfa-3" src="docs/screenshots/haberler-3.png" />
</p>

### 7. Belgeler

<img width="800" height="500" alt="belgeler" src="docs/screenshots/belgeler-1.png" />

### 8. Referanslar

<p float="left">
  <img width="266" alt="ana-sayfa-1" src="docs/screenshots/referanslar-1.png" />
  <img width="266" alt="ana-sayfa-2" src="docs/screenshots/referanslar-2.png" />
</p>

### 9. Ürünler

<p float="left">
  <img width="266" alt="ana-sayfa-1" src="docs/screenshots/urunler-1.png" />
  <img width="266" alt="ana-sayfa-2" src="docs/screenshots/urunler-2.png" />
  <img width="266" alt="ana-sayfa-3" src="docs/screenshots/urunler-3.png" />
</p>

### 10. Mağaza

<p float="left">
  <img width="266" alt="ana-sayfa-1" src="docs/screenshots/magaza-1.png" />
  <img width="266" alt="ana-sayfa-2" src="docs/screenshots/magaza-2.png" />
  <img width="266" alt="ana-sayfa-3" src="docs/screenshots/magaza-3.png" />
</p>

### 11. Fiyat Teklifi Al Modalı

<img width="800" height="500" alt="fiyat-teklifi-modal" src="docs/screenshots/teklif-1.png" />

### 12. İletişim Modalı

<img width="800" height="500" alt="iletisim-modal" src="docs/screenshots/iletisim-1.png" />

## 💻 Kurulum, Çalıştırma Bilgileri

### 🛠️ Kurulum Adımları

1. Bu projeyi bilgisayarınıza indirin (Clone veya Download ZIP).

   ```bash
   git clone <repo-url>
   cd <proje-klasoru>
   ```

2. PHP ve JS bağımlılıklarını yükleyin.

   ```bash
   composer install
   npm install
   ```

3. `.env` dosyasını oluşturup gerekli bilgileri girin.

   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. `.env` dosyasında veritabanı bağlantı bilgilerinizi (DB_DATABASE, DB_USERNAME, DB_PASSWORD) kendi MySQL yapınıza göre düzenleyin.

5. Migration'ları çalıştırın.

   ```bash
   php artisan migrate
   ```

6. Frontend asset'lerini derleyin ve sunucuyu başlatın.

   ```bash
   npm run dev
   php artisan serve
   ```


