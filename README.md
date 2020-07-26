![PHP](https://img.shields.io/badge/php-%3E%3D7.4-8892bf.svg)
![CURL](https://img.shields.io/badge/cURL-required-green.svg)

O'zim yozgan bot uchun Framework. Ishlashni osonlashtiradi. Kod yozishda tezlashadiz ishiz. Ancha funktsiyalarini example kodda ishlatmadim. Aqliz yetsa ishlata olasiz, bor kuchida ishlatilsa zo'r ishlarni oson qilsa bo'ladi. Ba'zi joylari dehqoncha yozilgan.  i18 ishlatilgan ya'ni bemalol bir nechta tilni ishlata olasiz. Optimizatsiya. user step qo'yishga va step olishga imkoniyat yengil. knopka qo'shish imkoni zo'r.


Ishlatish bo'yicha qo'llanma.

```$language->setFallbackLang('uz');```
Tilni o'zgartirish uchun kerak, ```translate``` papkasidagi ```lang_uz.ini``` faylini yuklaydi.
Agarda buni ```$language->setFallbackLang('ru');``` ko'rinishida yozsak ```lang_ru.ini``` faylni yuklab beradi.

```$language->init();``` Bu tilni ishga tushurish, barcha tilni sozlash amalidan keyin tilni ishga tushuradi.

```$api->sendMessage(['text' => T::start, 'parse_mode' => 'HTML']);```
sendMessage - bu ko'pchilik odatda eski oddiy bot funktsiyasida ishlatgan ```bot('sendMessage', ['text' => "Salom"]);``` shu ko'rinishdagi matn yuborish.

Aytib o'tsam buni istagancha o'zgartiring. Istasangiz sendAudio, sendVideo, katta kichik harfni farqi yo'q, SenDMESSAGe yokida sendMessage bu ikkalasi ham ishlaydi.


Sezganingizdek ichidagi ```T::start``` bu til. T = translate lekin til desangiz ham bo'laverar ekan)
```T::start``` deganda ```translate``` papkasidagi ```lang_uz.ini``` faylidan ```start="Salom"``` degan qatorni oladi va Salom so'zini yuboradi.


Yangi gap yozish uchun esa ```lang_uz.ini``` fayliga yangi qatorda ```KerakliNom="Matn"``` ko'rinishida yozasiz. Botda yuborish uchun esa ```T::KerakliNom``` deb ishlatsangiz avtomatik Matn so'zini chiqarib beradi.
