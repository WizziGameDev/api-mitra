
# Mitra API Documentation 📱

## Overview 🌟
This API handles CRUD operations for "Mitra". The available routes include creating, reading, updating, and deleting Mitra data. 
Postman link available: https://api.postman.com/collections/40994183-fd19ec57-2c15-413d-a77f-f46eed13b279?access_key=PMAT-01JS70JDNESVJ39QG4FY9Y4MKY

## 🚀 **API Routes**

### 1. **GET /api/mitras** 
Retrieve a list of all mitras.

#### Request
No request body required.

#### Response
```json
{
  "data": [
    {
      "slug": "example-mitra-123456",
      "name": "Mitra Example",
      "status": "aktif",
      "business_type": "Retail"
    }
  ],
  "error": []
}
```

- **data**: Array of mitra objects.
- **error**: Empty array if no errors occurred.

---

### 2. **POST /api/mitras** 
Create a new Mitra.

#### Request
```json
{
  "name": "Mitra Example",
  "status": "aktif",
  "business_type": "Retail"
}
```

#### Response (Success)
```json
{
  "data": [
    {
      "slug": "mitra-example-123456",
      "name": "Mitra Example",
      "status": "aktif",
      "business_type": "Retail"
    }
  ],
  "error": []
}
```

#### Response (Validation Error)
```json
{
  "data": [],
  "error": {
    "name": ["Nama mitra wajib diisi."],
    "status": ["Status mitra harus dipilih."]
  }
}
```

- **data**: Array containing the created mitra.
- **error**: Array containing validation error messages.

---

### 3. **GET /api/mitras/{slug}** 
Retrieve a single Mitra by its `slug`.

#### Request
No request body required.

#### Response (Success)
```json
{
  "data": [
    {
      "slug": "mitra-example-123456",
      "name": "Mitra Example",
      "status": "aktif",
      "business_type": "Retail"
    }
  ],
  "error": []
}
```

#### Response (Not Found)
```json
{
  "data": [],
  "error": ["Mitra dengan slug tersebut tidak ditemukan."]
}
```

- **data**: Array containing the mitra object.
- **error**: Empty array if no errors occurred. If mitra not found, an error message is provided.

---

### 4. **PUT /api/mitras/{slug}** 
Update an existing Mitra.

#### Request
```json
{
  "name": "Updated Mitra Example",
  "status": "nonaktif",
  "business_type": "Wholesale"
}
```

#### Response (Success)
```json
{
  "data": [
    {
      "slug": "updated-mitra-example-123456",
      "name": "Updated Mitra Example",
      "status": "nonaktif",
      "business_type": "Wholesale"
    }
  ],
  "error": []
}
```

#### Response (Validation Error)
```json
{
  "data": [],
  "error": {
    "name": ["Nama mitra wajib diisi."],
    "status": ["Status mitra harus dipilih."]
  }
}
```

- **data**: Array containing the updated mitra object.
- **error**: Array containing validation error messages.

---

### 5. **DELETE /api/mitras/{slug}** 
Delete a Mitra.

#### Request
No request body required.

#### Response (Success)
```json
{
  "data": "Success delete Mitra",
  "error": []
}
```

#### Response (Not Found)
```json
{
  "data": [],
  "error": ["Mitra tidak ditemukan."]
}
```

- **data**: A message indicating whether the mitra was successfully deleted or an error message if mitra is not found.
- **error**: Empty array if no errors occurred.

---

## **Error Codes ⚠️**

- **404 Not Found**: Returned when no mitra is found for a specific `slug`.
- **422 Unprocessable Entity**: Returned when the request fails validation (e.g., missing or incorrect data).

---

## **Request Validation 📝**

The following fields are validated for each request:

- `name`: Required, must be a string.
- `status`: Required, must be either "aktif" or "nonaktif".
- `business_type`: Required, must be a string.

Custom validation messages are provided to guide the user.

---





<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
# api-mitra-laravel
